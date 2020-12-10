require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.component('contact-us-form', require('./component/Contactform.vue').default);

const app = new Vue({
    el: '#app'
});
