import store from './store'
import keycloakvue from '@prodabel/vue-keycloak-adapter'

require('./bootstrap');

window.Vue = require('vue');
Vue.use(Vuex)
Vue.use(keycloakvue)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    store
});
