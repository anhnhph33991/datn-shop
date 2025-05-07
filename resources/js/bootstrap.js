// import axios from "axios";
// window.axios = axios;

// window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// let meta_csrf_token = document.querySelector('meta[name="csrf-token"]');
// if (meta_csrf_token != undefined) {
//   window.axios.defaults.headers.common["X-CSRF-TOKEN"] =
//     meta_csrf_token.getAttribute("content");
// }

// import Echo from "laravel-echo";

// import Pusher from "pusher-js";
// window.Pusher = Pusher;

// window.Echo = new Echo({
//   broadcaster: "pusher",
//   key: import.meta.env.VITE_PUSHER_APP_KEY,
//   cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
//   wsHost: import.meta.env.VITE_PUSHER_HOST,
//   wsPort: import.meta.env.VITE_PUSHER_PORT,
//   wssPort: import.meta.env.VITE_PUSHER_PORT,
//   forceTLS: true,
//   authEndpoint: "/broadcasting/auth",
//   auth: {
//     headers: {
//       "X-CSRF-TOKEN": meta_csrf_token.getAttribute("content"),
//     },
//   },
// });

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// import axios from "axios";
// window.axios = axios;

// window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// let meta_csrf_token = document.querySelector('meta[name="csrf-token"]');
// if (meta_csrf_token != undefined) {
//   window.axios.defaults.headers.common["X-CSRF-TOKEN"] =
//     meta_csrf_token.getAttribute("content");
// }

// import Echo from "laravel-echo";

// import Pusher from "pusher-js";
// window.Pusher = Pusher;

// window.Echo = new Echo({
//   broadcaster: "reverb",
//   key: import.meta.env.VITE_REVERB_APP_KEY,
//   wsHost: import.meta.env.VITE_REVERB_HOST,
//   wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
//   wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
//   forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? "https") === "https",
//   enabledTransports: ["ws", "wss"],
//   wsPath: import.meta.env.VITE_REVERB_PATH,
// });

import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

let meta_csrf_token = document.querySelector('meta[name="csrf-token"]');
if (meta_csrf_token != undefined) {
  window.axios.defaults.headers.common["X-CSRF-TOKEN"] =
    meta_csrf_token.getAttribute("content");
}

import Echo from "laravel-echo";

import Pusher from "pusher-js";
window.Pusher = Pusher;

window.Echo = new Echo({
  broadcaster: "pusher",
  key: import.meta.env.VITE_PUSHER_APP_KEY,
  cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
  wsHost: import.meta.env.VITE_PUSHER_HOST,
  wsPort: import.meta.env.VITE_PUSHER_PORT,
  wssPort: import.meta.env.VITE_PUSHER_PORT,
  forceTLS: false,
  enabledTransports: ["ws", "wss"],
  wsPath: import.meta.env.VITE_REVERB_PATH,
  authEndpoint: "/broadcasting/auth",
  auth: {
    headers: {
      "X-CSRF-TOKEN": meta_csrf_token.getAttribute("content"),
    },
  },
});

// window.Echo = new Echo({
//   broadcaster: "pusher",
//   key: import.meta.env.VITE_PUSHER_APP_KEY,
//   cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
//   wsHost: import.meta.env.VITE_PUSHER_HOST,
//   wsPort: import.meta.env.VITE_PUSHER_PORT,
//   wssPort: import.meta.env.VITE_PUSHER_PORT,
//   forceTLS: true,
//   authEndpoint: "/broadcasting/auth",
//   auth: {
//     headers: {
//       "X-CSRF-TOKEN": meta_csrf_token.getAttribute("content"),
//     },
//   },
// });
