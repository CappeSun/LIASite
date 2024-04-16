<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class ChatController extends Controller
{
    public function getList(Request $request)
    {
        $sender = Message::select('receiver')
            ->where('sender', Auth::user()['id'])
            ->distinct()->get()->toArray();
        $receiver = Message::select('sender')
            ->where('receiver', Auth::user()['id'])
            ->distinct()->get()->toArray();

        $ids = [];

        foreach ($sender as $id){
            $ids[] = $id['receiver'];
        }

        foreach($receiver as $id){
            if (!in_array($id['sender'], $ids))
                $ids[] = $id['sender'];
        }

        $chats = [];

        foreach($ids as $id){
            $name = User::select('name')->where('id', $id)->first()['name'];

            $msg = Message::where(function(Builder $query){
                $query->where('sender', Auth::user()['id'])
                ->orWhere('receiver', Auth::user()['id']);
            })
            ->where(function(Builder $query) use($id){
                $query->where('sender', $id)
                ->orWhere('receiver', $id);
            })->orderBy('id', 'desc')->first();

            $chats[] = ['name' => $name, 'lastSent' => $id == $msg['receiver']];
        }

        usort($chats, function($a, $b){
            return $a['lastSent'] - $b['lastSent'];
        });

        return view('chats')->with('chats', $chats);
    }

    public function get(Request $request, $receiver)
    {
        if (User::where('name', $receiver)->first() && $receiver != Auth::user()['name'])
            return view('chat')->with('receiver', $receiver);
        return response('User not found', 404);
    }

    public function load(Request $request)
    {
        // Structure: [[[id, sender, receiver, content], [...], [etc.]], 'userId' => 1, 'lastId' => 3]

        function data(){
            return json_decode(file_get_contents('php://input'), true);
        }

        function receiver(){
            return User::where('name', data()['receiver'])->first();    // Get id from name
        }

        if (!receiver() || Auth::user()['id'] == receiver()['id']) return;

        $msg = Message::where(function(Builder $query){
            $query->where('sender', Auth::user()['id'])
            ->orWhere('receiver', Auth::user()['id']);
        })
        ->where(function(Builder $query){
            $query->where('sender', receiver()['id'])
            ->orWhere('receiver', receiver()['id']);
        })->get();

        $msg = json_decode(json_encode($msg), true);   // Un-object

        foreach ($msg as &$message){    // Get rid of timestamps
            array_pop($message);
            array_pop($message);
        }

        return json_encode([$msg, 'userId' => Auth::user()['id'], 'lastId' => end($msg) ? end($msg)['id'] : 0]);

        // return json_encode([
        //     [
        //         ['id' => 1, 'sender' => 5, 'receiver' => Auth::user()['id'], 'content' => 'Heyyo!'],
        //         ['id' => 2, 'sender' => 4, 'receiver' => Auth::user()['id'], 'content' => 'do u like ham'],
        //         ['id' => 3, 'sender' => Auth::user()['id'], 'receiver' => 4, 'content' => 'i lick ham']
        //     ],
        //     'lastId' => 2
        // ]);
        // Check if user is sender or receiver, place message in chat with whoever is the opposite (JS)
    }

    public function send(Request $request)
    {
        $data = json_decode(file_get_contents('php://input'), true);

        $receiver = User::where('name', $data['receiver'])->first();    // Get id from name

        if (!$receiver || Auth::user()['id'] == $receiver['id'] || $data['content'] == '') return;

        $message = new Message;
        $message->sender = Auth::user()['id'];
        $message->receiver = $receiver['id'];
        $message->content = $data['content'];
        $message->save();
    }

    public function receive(Request $request)
    {
        function data(){
            return json_decode(file_get_contents('php://input'), true);
        }

        function receiver(){
            return User::where('name', data()['receiver'])->first();    // Get id from name
        }

        if (!receiver() || Auth::user()['id'] == receiver()['id']) return;

        $msg = Message::where(function(Builder $query){
            $query->where('receiver', Auth::user()['id']);
        })
        ->where(function(Builder $query){
            $query->where('sender', receiver()['id']);
        })
        ->where('id', '>', data()['lastId'])->get();

        $msg = json_decode(json_encode($msg), true);   // Un-object

        foreach ($msg as &$message){
            array_pop($message);
            array_pop($message);
        }

        return json_encode([$msg, 'userId' => Auth::user()['id'], 'lastId' => end($msg) ? end($msg)['id'] : data()['lastId']]);
    }
}