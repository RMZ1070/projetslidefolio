require("./bootstrap");
require("./bootstraptwe");
require('./bootstrap');
require("./jquery.js");
require("./jquery-scrolltofixed-min.js");
require("./jquery.vegas.js");
require("./jquery.mixitup.min.js");
require("./jquery.validate.min.js");
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

global.$ = global.jQuery = require('jquery');


// $.vegas('slideshow', {
//   delay:5000,
//   backgrounds:[
//      { src:'img/nature1.jpg', fade:2000 },
//      { src:'img/bw1.jpg', fade:2000 },
//     { src:'img/portrait1.jpg', fade:2000 },
//      { src:'img/portrait5.jpg', fade:2000 },
//     { src:'img/portrait2.jpg', fade:2000 },
//     { src:'img/portrait3.jpg', fade:2000 },
//      { src:'img/portrait4.jpg', fade:2000 },
//        { src:'img/forest.jpg', fade:2000 }
       
//   ]
// })('overlay', {
// src:'img/overlay.png'
// });


  $(function(){
    $('#Grid').mixitup();
      });

      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });


$(document).ready(function() {
        $('#nav').scrollToFixed();
  });


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

