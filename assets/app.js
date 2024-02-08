/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import Vue from 'vue';
import './styles/app.css';

// Import  vue components here
//import Example from './components/Example'

/**
* Create a fresh Vue Application instance
*/
new Vue({
  el: '#app',
  //components: {Example}
});