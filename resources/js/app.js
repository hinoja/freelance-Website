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
    url: '/chat/post',
    data: {
        nickname: "nickname.value",
        message: "message.value",
    }
}
// const options =axios
// .post('/chat/post', {
//     nickname: "nickname.value",
//         message: "message.value",
// })
// .then(response => {
//     console.log('from handle submit', response);
// });
// const options = axios
//     .post(
//         '/chat/post',
//         {
//             // "_token":"{{ csrf_token() }}",
//             nickname: "nickname.value",
//             message: "message.value",
//         },
//         {
//             headers: {
//                 "Content-Type": "application/json",
//                 // 'X-CSRF-TOKEN':$('meta[namee="csrf-token"]').attr('content')
//             },
//         }
//     )
//     .then((response) => {
//         console.log(response);
//     })
//     .catch((error) => {
//         console.log(error.message);
//     });


submitButton.addEventListener('click', function () {

    axios(options);
    // axios.post('/chat', {
    //     nickname: nickname.value,
    //     message: message.value,
    // });
    // console.log(nickname.value,message.value);
});
// Echo.channel('chat').listen('.chatmessageevent', function() {
Echo.channel('chat').listen('ChatMessageEvent', function (data) {
    // console.log('test');
    alert('passer');
    chatDiv.innerHTML += '<div class="chat-msg-content " ><p> Bonjour</p></div>';
    // chatDiv.innerHTML +='<div class="chat-msg-content " ><p>'+ $(event.nickname)+' by '+ $(event.message) +'.</p></div>';
});
