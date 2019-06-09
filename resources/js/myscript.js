if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('../sw.js').then(function(registration) {
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}

// $("#formRegister").validate({
//     rules: {
//         name: "required",
//         email: {
//             required: true,
//             email: true
//         },
//         password: "required",
//         password_confirmation: "required"
//     }
// });
var moment = require('moment'); 
var currentDateTime = moment().format();
console.log(currentDateTime);
// localStorage.clear();
// var datas = localStorage.getItem('datas'); 
// console.log(JSON.parse(datas));

// var res = {
//     'age':12,
//     'phone':'08238232'
// };
// localStorage.setItem('datas',JSON.stringify(res));
// localStorage.setItem("name", "bossza")