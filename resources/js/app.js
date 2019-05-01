import { directive as onClickaway } from 'vue-clickaway';

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app', require('./components/App.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {
            visible: false,
            mobileVisible: false,
            navClicked: false,
            hideAlertFlag: false,
            actionsVisible: false
        }
    },
    directives: {
        onClickaway: onClickaway,
    },
    computed: {
      btnState() {
        return {
          'text-green-light border-b-2 border-green font-semibold': this.navClicked,
          'text-green-dark hover:text-green-light opacity-75 hover:opacity-100 border-b border-transparent hover:border-green-dark': ! this.navClicked
        }
      }
    },
    methods: {
        away: function() {
          this.visible = false
        },
    },
});
