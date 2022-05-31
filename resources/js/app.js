import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import FooterComponent from "./components/FooterComponent";
import IndexComponent from "./components/indexComponent";
import Resume from "./components/Resume";
import Resume2 from "./components/Resume2";
import Resume3 from "./components/Resume3";
import Resume4 from "./components/Resume4";
import Resume5 from "./components/Resume5";
import Resume6 from "./components/Resume6";
import Resume7 from "./components/Resume7";
import Resume8 from "./components/Resume8";
import Resume9 from "./components/Resume9";
import Resume10 from "./components/Resume10";
import Resume11 from "./components/Resume11";
import Resume12 from "./components/Resume12";
import Thanks from "./components/Thanks";
import Preview from "./components/Preview";
import VModal from 'vue-js-modal';
import MotivationModal from "./components/MotivationModal";
import AcademyModal from "./components/AcademyModal";
import ElementUI from 'element-ui';
import locale from 'element-ui/lib/locale/lang/ja';
import 'element-ui/lib/theme-chalk/index.css';
import VueCompositionAPI from '@vue/composition-api'
import { createPinia, PiniaVuePlugin } from 'pinia'

require('./bootstrap');

window.Vue = require('vue').default;

Vue.use(VueRouter);
Vue.use(VModal);
Vue.use(ElementUI, {locale});
Vue.use(VueCompositionAPI)
Vue.use(PiniaVuePlugin)
const pinia = createPinia()

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
         {
             path: '/start/resume/3/',
             name: 'resume3',
             component: Resume3
         },
         {
             path: '/start/resume/4/',
             name: 'resume4',
             component: Resume4
         },
         {
             path: '/start/resume/5/',
             name: 'resume5',
             component: Resume5
         },
         {
             path: '/start/resume/6/',
             name: 'resume6',
             component: Resume6
         },
         {
             path: '/start/resume/7/',
             name: 'resume7',
             component: Resume7
         },
         {
             path: '/start/resume/8/',
             name: 'resume8',
             component: Resume8
         },
         {
             path: '/start/resume/9/',
             name: 'resume9',
             component: Resume9
         },
         {
             path: '/start/resume/10/',
             name: 'resume10',
             component: Resume10
         },
         {
             path: '/start/resume/11/',
             name: 'resume11',
             component: Resume11
         },
         {
             path: '/start/resume/12/',
             name: 'resume12',
             component: Resume12
         },
         {
             path: '/start/resume/preview/',
             name: 'Preview',
             component: Preview
         },
         {
             path: '/start/resume/thanks/',
             name: 'Thanks',
             component: Thanks
         },
     ]
 });

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);
Vue.component('footer-component', FooterComponent);
Vue.component('index-component', IndexComponent);
Vue.component('resume-start', Resume);
Vue.component('resume-2', Resume2);
Vue.component('resume-3', Resume3);
Vue.component('resume-4', Resume4);
Vue.component('resume-5', Resume5);
Vue.component('resume-6', Resume6);
Vue.component('resume-7', Resume7);
Vue.component('resume-8', Resume8);
Vue.component('resume-9', Resume9);
Vue.component('resume-10', Resume10);
Vue.component('resume-11', Resume11);
Vue.component('resume-12', Resume12);
Vue.component('thanks', Thanks);
Vue.component('preview', Preview);
Vue.component('motivation-modal', MotivationModal);
Vue.component('academy-modal', AcademyModal);



const app = new Vue({
    el: '#app',
    router,
    pinia,
});
