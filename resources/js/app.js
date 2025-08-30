import './bootstrap';
import 'vite/modulepreload-polyfill';
import Alpine from 'alpinejs';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

window.swiper = Swiper;

// Import Tailwind entry CSS
import '../css/app.css';

window.Alpine = Alpine;
Alpine.start();

