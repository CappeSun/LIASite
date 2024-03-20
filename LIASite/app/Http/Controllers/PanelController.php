<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panel;

class PanelController extends Controller
{
    public function add()
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'location' => 'required|string|max:255'
            'area' => 'required|string|max:255',
            'positions' => 'required|string|max:500',
            'desc' => 'required|string|max:2000',
            'size' => 'required|numeric|min:0|max:3',
        ]);

        switch ($request->size) {
            case '0':
                $request->size = '1-4';
                break;
            case '1':
                $request->size = '5-11';
                break;
            case '2':
                $request->size = '11-19';
                break;
            case '3':
                $request->size = '20+';
                break;
            default:
                break;
        }

        $panel = new Panel;

        $site->user_id = Auth::user()['id'];
        $site->name = $request->name;
        $site->location = $request->location;
        $site->area = $request->area;
        $site->positions = $request->positions;
        $site->desc = $request->desc;
        $site->size = $request->size;
    }
}