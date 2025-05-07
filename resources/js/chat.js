import "./bootstrap.js";

// console.log("1111");

// const userId = document
//   .querySelector('meta[name="user-id"]')
//   .getAttribute("content");

// const userId = 7;

window.handleApply = function (id) {
  const form = document.querySelector(`#chat-box-${id}`);
  const message = document.querySelector(`#chat-box-${id}-message`);

  const ulElement = document.querySelector(`#chat-box-ul-${id}`);
  const contentWrapper = ulElement.querySelector(".simplebar-content");

  if (!message.value.trim()) {
    alert("Vui lòng nhập tin nhắn.");
    message.focus();
    return;
  }
  const data = {
    conversation_id: id,
    sender_id: window.user.id,
    sender_type: "Admin",
    message: message.value,
  };

  const formData = new FormData();

  formData.append("conversation_id", id);
  formData.append("sender_id", window.user.id);
  formData.append("sender_type", "Admin");
  formData.append("message", message.value);

  const currentTime = new Date().toLocaleTimeString([], {
    hour: "2-digit",
    minute: "2-digit",
  });

  const messageElement = createMessageElement({
    id: id,
    senderName: "Amin luxchill",
    message: message.value,
    time: currentTime,
    senderType: "Admin",
  });

  contentWrapper.innerHTML += messageElement;
  message.value = "";

  axios
    .post(`${APP_URL}`, formData, {
      headers: {
        "Content-Type": "multipart/form-data",
        Accept: "application/json",
      },
    })
    .then((response) => {
      return response.data;
    })
    .then((data) => {
      return data.data;
    })
    .then((result) => {
      console.log(result);
    })
    .catch((err) => {
      console.log(err);
    });
};

function createMessageElement({
  id,
  senderName,
  message,
  time,
  senderType = "Admin",
}) {
  let li = "";

  const rightClass = senderType === "Admin" ? "right" : "";

  li = `
    <li class='${rightClass}'>
                              <div class="conversation-list">
                                <div class="dropdown">

                                    <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="chat.html#">Copy</a>
                                        <a class="dropdown-item" href="chat.html#">Save</a>
                                        <a class="dropdown-item" href="chat.html#">Forward</a>
                                        <a class="dropdown-item" href="chat.html#">Delete</a>
                                    </div>
                                </div>
                                <div class="ctext-wrap">
                                    <div class="conversation-name">${senderName}</div>
                                    <p>
                                        ${message}
                                    </p>
                                    <p class="chat-time mb-0">
                                        <i class="bx bx-time-five align-middle me-1"></i>
                                        ${time}
                                    </p>
                                </div>

                            </div>
                        </li>
  
  `;

  return li;
}

// window.Echo.private(`conversation.${channelId}`).listen(
//   "ChatMessage",
//   (data) => {
//     console.log("Tin nhắn mới:");
//     console.log(data);
//   }
// );

// window.Echo.join("conversation." + channelId)
//   .listen("ChatMessage", function (event) {
//     console.log("listen");

//     console.log(event);
//   })
//   .error((error) => {
//     console.error("Lỗi khi nhận sự kiện:", error);
//   });

// window.Echo.private("conversation." + channelId).listen(
//   "ChatMessage",
//   function (event) {
//     console.log("listen", event);
//   }
// );

window.Echo.join("conversation." + channelId).listen(
  "ChatMessage",
  function (event) {
    console.log("listen", event);
  }
);

// .here((users) => {
//   // $("#listOnline").empty();
//   // users.forEach((user) => {
//   //   $("#listOnline").append(renderOnlineUser(user));
//   // });
//   console.log("here");

//   console.log(users);
// })
// .joining((user) => {
//   // $("#listOnline").append(renderOnlineUser(user));
//   console.log("joining");

//   console.log(user);
// })
// .leaving((user) => {
//   console.log("leaving");

//   console.log(user);
//   // $(`#user-${user.id}`).remove();
// })

// export function initializeChat(conversationId, userId) {
//   // Lắng nghe channel conversation.{conversation_id} và sự kiện ChatMessage
//   window.Echo.channel(`conversation.${conversationId}`).listen(
//     "ChatMessage",
//     (e) => {
//       console.log("Tin nhắn mới:", e);

//       // Append tin nhắn vào giao diện
//       const chatBox = document.getElementById(`chat-box-${conversationId}`);
//       if (chatBox) {
//         const newMsg = document.createElement("div");
//         newMsg.className =
//           e.sender_id == userId ? "message sent" : "message received";
//         newMsg.innerHTML = `
//                   <p>${e.message.message}</p>
//                   <small>${e.message.created_at}</small>
//               `;
//         chatBox.appendChild(newMsg);
//         chatBox.scrollTop = chatBox.scrollHeight; // Cuộn xuống tin nhắn mới
//       }
//     }
//   );
// }

// window.Echo.private(`chat.${userId}`).listen("ChatMessage", (e) => {
//   console.log("Tin nhắn mới: ", e);

//   // Append ra giao diện
//   // const chatBox = document.getElementById("chat-messages");
//   // const newMsg = document.createElement("div");
//   // newMsg.innerHTML = `<div>${e.message.message}</div>`;
//   // chatBox.appendChild(newMsg);
// });

// export function listenToChat(orderId, onMessageReceived) {
//   window.Echo.private(`chat.${orderId}`).listen(".ChatMessage", (e) => {
//     onMessageReceived(e);
//   });
// }

// export async function sendMessage(orderId, message) {
//   try {
//     const response = await axios.post("/api/chat", {
//       order_id: orderId,
//       message: message,
//     });

//     return response.data;
//   } catch (error) {
//     console.error("Gửi tin nhắn lỗi:", error);
//   }
// }
