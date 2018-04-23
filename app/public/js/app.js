import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home';
import Calendar from './pages/Calendar';
import Booking from './pages/Booking';
import Contacts from './pages/Contacts';

import App from './components/App';
import Menu from './components/Menu';

Vue.use(VueRouter);
Vue.component('next-menu', Menu);

import vueEventCalendar from 'vue-event-calendar';
Vue.use(vueEventCalendar, {
    locale: 'ru',
    color: '#ebb436',
    weekStartOn: 1,
  }
);

var router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', component: Home},
        {path: '/calendar', component: Calendar},
        {path: '/booking', component: Booking},
        {path: '/contacts', component: Contacts},
    ]
});

new Vue({
 el: '#app',
 router: router,
 render: h => h(App)
});