import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import FooterComponent from "./components/FooterComponent";
import IndexComponent from "./components/indexComponent";
import Resume from "./components/Resume";
import Resume2 from "./components/Resume2";


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
         {
             path: '/start/resume/',
             name: 'resume',
             component: Resume
         },
         {
             path: '/start/resume/2/',
             name: 'resume2',
             component: Resume2
         },
     ]
 });

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);
Vue.component('footer-component', FooterComponent);
Vue.component('index-component', IndexComponent);
Vue.component('resume-start', Resume);
Vue.component('resume-2', Resume2);



const app = new Vue({
    el: '#app',
    router,
});
