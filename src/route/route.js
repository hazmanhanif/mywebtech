// router/index.js
import { createRouter, createWebHistory } from 'vue-router';
import AboutPage from '@/pages/AboutPage.vue';
import ProfilePage from '@/pages/ProfilePage.vue';
import PhotosPage from '@/pages/PhotosPage.vue';
import ContentPage from '@/pages/ContentPage.vue';

const routes = [
  { path: '/', redirect: ContentPage },
  { path: '/home', component: ContentPage },
  { path: '/about', component: AboutPage },
  { path: '/profile', component: ProfilePage },
  { path: '/photos', component: PhotosPage }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
