

// require('./bootstrap');
// alert('hello');
const sendMessageForm = document.getElementById("chatForm");
const messageInput = document.getElementById("messageInput");
const submitButton = document.getElementById("submitButton");
const textMessage = document.getElementById('messageDisplay');
// const options = {
//     method: 'post',
//     url: '/chat/post',
//     data: {
//         nickname: "nickname.value",
//         message: "message.value",
//     }
// }
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


// submitButton.addEventListener('click', function () {

//     axios(options);
//     // axios.post('/chat', {
//     //     nickname: nickname.value,
//     //     message: message.value,
//     // });
//     // console.log(nickname.value,message.value);
// });
// // Echo.channel('chat').listen('.chatmessageevent', function() {
// Echo.channel('chat').listen('ChatMessageEvent', function (data) {
//     // console.log('test');
//     alert('passer');
//     textMessage.innerHTML += '<div class="chat-msg-content " ><p> Bonjour</p></div>';
//     // textMessage.innerHTML +='<div class="chat-msg-content " ><p>'+ $(event.nickname)+' by '+ $(event.message) +'.</p></div>';
// });

// let url_string = window.location;
// let url = new URL(url_string);
// let name = url.searchParams.get("name");
let name = "name";


let repeatCheck = [];
sendMessageForm.addEventListener('submit', function (e) {
    e.preventDefault();

    if (messageInput.value != '') {
        axios({
            method: 'post',
            url: '/chat',
            headers: { 'Content-Type': 'application/json' },
            data: {
                nickname: 'name',
                message: messageInput.value
            }

        });
        // }
        // console.log(options);
        // axios(options);
        // textMessage.innerHTML += '<div class="chat-msg-content "><strong  pr-3">' + name + '</strong> <p>' + messageInput.value + '</p></div><hr>';
    }
    // window.Echo.channel('freelanceChat').listen('.chatAlias', (res) => {
    //     // window.Echo.channel('freelanceChat').listen('.chatMessageEvent', (res) => {
    //     // sendMessageForm.style.display = 'none';
    //     alert('stape1');
    //     // if (!repeatCheck.includes(res.message)) {
    //     //     repeatCheck.push(res.message);
    //         textMessage.innerHTML += '<div class="chat-msg-content "><strong  pr-3">' + name + '</strong> <p>' + res.message + '</p></div><hr>';
    //         console.log(res.message);
    //     // }
    // });
    window.Echo.channel('freelanceChat').listen('.chatAlias', (res) => {
        alert('passer');
        if (!repeatCheck.includes(res.message)) {
            repeatCheck.push(res.message);
            console.log(res.message);
            textMessage.innerHTML += '<div class="message"><strong class="userName pr-3">' + res.username + '</strong> <span class="singleMessage">' + res.message + '</span></div><hr>';
        }
    });
    messageInput.value = '';
});


