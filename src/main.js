import { createApp } from 'vue';
import App from './App.vue';
import router from './route/route';
import store from './store/store';
import './assets/style.css';


createApp(App).use(router).use(store).mount('#app');
