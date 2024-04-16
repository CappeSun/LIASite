<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chats.css') }}">
</head>
<body>
    <div>
        <?php foreach ($chats as $chat){ ?>
            <a class="chatLink" href="/chats/<?= $chat['name']; ?>">
                <div class="chat">
                    <h3><?= $chat['name']; ?></h3>
                    <p><?= $chat['lastSent'] ? 'You sent a message' : 'You received a message'; ?></p>
                </div>
            </a>
        <?php } ?>
        <?php if ($chats == []){ ?>
            <div class="chat">
                <h3>Du har inga chatter än...</h3>
                <p>Skriv ett meddelande till någon!</p>
            </div>
        <?php } ?>
    </div>
</body>
</html>