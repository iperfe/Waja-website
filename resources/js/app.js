import './bootstrap';
import 'vite/modulepreload-polyfill';
import Alpine from 'alpinejs';

// Import Tailwind entry CSS
import '../css/app.css';

window.Alpine = Alpine;
Alpine.start();

