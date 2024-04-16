<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chat.css') }}">
</head>
<body>
    <div class="chatboxCont">
        <h1 class="title"><?= $receiver; ?></h1>
        <div class="chatbox" id="chatbox"></div>
        <textarea class="msgBox" id="msg"></textarea>
        <button class="sendBtn" id="sendBtn">Skicka!</button>
    </div>
</body>
<script>
    const csrfToken = '{{ csrf_token() }}';
    const receiver = '<?= $receiver; ?>';
</script>
<script src="{{ asset('js/chat.js') }}"></script>
</html>