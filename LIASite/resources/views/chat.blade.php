<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chat.css') }}">
</head>
<body>
    <div class="chatbox" id="chatbox">
        
    </div>
    <input type="text" name="msg" id="msg">
    <button id="sendBtn">Send!</button>
    <button id="receiveBtn">Receive!</button>
</body>
<script>
    const csrfToken = '{{ csrf_token() }}';
    const receiver = '<?= $receiver; ?>';
</script>
<script src="{{ asset('js/chat.js') }}"></script>
</html>