/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import { createApp } from 'vue'

import './styles/app.css';

// Import  vue components here
import RegistrationForm from './components/RegistrationForm.vue'

/**
* Create a fresh Vue Application instance
*/
const app = createApp({});
app.component('RegistrationForm', RegistrationForm)
app.mount('#app');