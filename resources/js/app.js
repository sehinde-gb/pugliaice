/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

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
//Vue.component('checkbox', require('./components/Checkbox.vue'));
//Vue.component('userbox', require('./components/Userbox.vue'));
//Vue.component('datepicker', require('./components/Datepicker.vue'));
//Vue.component('calendar-component', require('./components/CalendarComponent.vue'));
//Vue.component('radio-component', require('./components/RadioComponent.vue').default);
Vue.component('order-component', require('./components/OrderComponent.vue'));

import checkbox from './components/Checkbox.vue';
import calendar from './components/CalendarComponent.vue';
//import radio from './components/RadioComponent.vue';
import order from './components/OrderComponent.vue';


//import '../node_modules/bootstrap/dist/css/bootstrap.min.css';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

   components: {order}

      
});


