let lastId = 0;
let userId;
const chatbox = document.getElementById('chatbox');

async function loadMsg(){
    let response = await fetch('http://localhost:8002/chats/load', {
        method: 'POST',
        headers: {
            'X-CSRF-Token': csrfToken
        },
        body: JSON.stringify({
            receiver: receiver
        })
    });
    let data = await response.json();
    lastId = data['lastId'];
    userId = data['userId'];
    console.log(data);

    data[0].forEach((msg) =>{
        addMsg(msg);
    });

    setTimeout(() =>{
        receiveMsg();
    },1000);
} loadMsg();

async function sendMsg(){
    // Add receive to refresh before send
    await fetch('http://localhost:8002/chats/send', {
        method: 'POST',
        headers: {
            'X-CSRF-Token': csrfToken
        },
        body: JSON.stringify({
            receiver: receiver,
            content: msg.value
        })
    });

    addMsg({'sender': userId, 'content': msg.value});
    msg.value = '';
}

async function receiveMsg(){
    let response = await fetch('http://localhost:8002/chats/receive', {
        method: 'POST',
        headers: {
            'X-CSRF-Token': csrfToken
        },
        body: JSON.stringify({
            receiver: receiver,
            lastId: lastId
        })
    });
    let data = await response.json();
    lastId = data['lastId'];
    console.log(data);

    data[0].forEach((msg) =>{
        addMsg(msg);
    });

    setTimeout(() =>{
        receiveMsg();
    },1000);
}

function addMsg(msg){
    if (msg['content'] == '') return;
    
    let msgText = document.createElement('p');
    msgText.textContent = msg['content'];
    msgText.classList.add('msg');
    let msgCont = document.createElement('div');
    msgCont.appendChild(msgText);
    msgCont.classList.add('msgCont');
    msgCont.classList.add(msg['sender'] == userId ? 'sentMsg' : 'recMsg');
    chatbox.appendChild(msgCont);

    chatbox.scrollTop = chatbox.scrollHeight;
}

msg.addEventListener('keypress', (e) =>{
    if (e.key === 'Enter'){
        sendMsg();
    }
});

sendBtn.addEventListener('click', ()=>{
    sendMsg();
});

receiveBtn.addEventListener('click', ()=>{
    receiveMsg();
});