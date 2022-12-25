import axios from 'axios';
import './bootstrap';

// require('./bootstrap');
// alert('hello');
const nickname = document.getElementById("nickname");
const message = document.getElementById("message-chat");
const submitButton = document.getElementById("submitButton");
const chatDiv = document.getElementById('message');
const options = {
    method: 'post',
    url: '/chat',
    data: {
        nickname: nickname.value,
        message: message.value,
    }
}

submitButton.addEventListener('click', () => {

    axios(options);
    // axios.post('/chat', {
    //     nickname: nickname.value,
    //     message: message.value,
    // });
    // console.log(nickname.value,message.value);
});
window.Echo.channel('chat').listen('.chatmessageevent', (e) => {
    // console.log('test');
    alert('passer');
    chatDiv.innerHTML += '<div class="chat-msg-content " ><p> Bonjour</p></div>';
    // chatDiv.innerHTML +='<div class="chat-msg-content " ><p>'+ $(event.nickname)+' by '+ $(event.message) +'.</p></div>';
});
