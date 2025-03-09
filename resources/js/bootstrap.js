import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/* Importar o framework Bootstrap */ 
import 'bootstrap'; 
/* Importar o arquivo bootstrap */ 
import './bootstrap'; 
/* Importar o framework bootstrap */ 
// SCSS imports and Vite directives should be moved to appropriate files
// like resources/sass/app.scss and your main blade template