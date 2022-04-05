import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import FooterComponent from "./components/FooterComponent";
import IndexComponent from "./components/indexComponent";


require('./bootstrap');

window.Vue = require('vue').default;

Vue.use(VueRouter);
 const router = new VueRouter({
     mode: 'history',
     routes: [
         {
             path: '/',
             name: 'index',
             component: IndexComponent
         },
     ]
 });

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);
Vue.component('footer-component', FooterComponent);
Vue.component('index-component', IndexComponent);



const app = new Vue({
    el: '#app',
    router
});
