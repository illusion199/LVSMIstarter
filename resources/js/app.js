/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import UserDetail from "./components/UserDetail";
import UserList from "./components/UserList";




require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)



Vue.use(iView, { locale });
locale(lang);
//import Toasted from 'vue-toasted'
import iView from 'iview';
import { locale, Page } from 'iview';
import lang from 'iview/dist/locale/en-US';
import 'iview/dist/styles/iview.css';




// import components
Vue.component('Page', Page);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*
const app = new Vue({
    el: '#app'
});
*/

const routes = [{
    path: '/user',   
    component: UserList,
  
}, 
{

    path: '/user/:id',    
    component: UserDetail,
  

}]

const router = new VueRouter({
    mode: 'history',
    routes,
    //base: window.location.pathName,
    scrollBehavior() {
        return {x: 0, y: 0}
    }

})

const app = new Vue({
    el: '#app',
    router,
    components: {
        //ExComponent,
        //UserList,
        UserDetail


    },
    created() {
        console.log('Working Sir!');
    }
});