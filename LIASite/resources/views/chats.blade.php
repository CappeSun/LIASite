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
            <a class="chat" href="/chats/<?= $chat['name']; ?>">
                <div>
                    <h3><?= $chat['name']; ?></h3>
                    <p><?= $chat['lastSent'] ? 'You sent a message' : 'You received a message'; ?></p>
                </div>
            </a>
        <?php } ?>
    </div>
</body>
</html>