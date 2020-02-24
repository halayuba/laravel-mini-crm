import { directive as onClickaway } from 'vue-clickaway';
import Toastr from 'vue-toastr'

require('./bootstrap');
require('vue-toastr/src/vue-toastr.scss');

window.Vue = require('vue');

Vue.use(Toastr)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('image-upload', require('./components/ImageUpload.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {
            selectedFeature: '',
            visible: false,
            mobileVisible: false,
            navClicked: false,
            hideAlertFlag: false,
            actionsVisible: false,
        }
    },
    directives: {
        onClickaway: onClickaway,
    },
    computed: {
      btnState() {
        return {
          'text-green-400 border-b-2 border-green-500 font-semibold': this.navClicked,
          'text-green-600 hover:text-green-400 opacity-75 hover:opacity-100 border-b border-transparent hover:border-green-600': ! this.navClicked
        }
      }
    },
    methods: {
      featureClicked(selection) {
        this.selectedFeature = selection
      },
      toggleClicked(selection) {
        if ( this.selectedFeature == '' || this.selectedFeature != selection ) {
          this.selectedFeature = ''
          this.featureClicked(selection)
        }
        else {
          this.selectedFeature = ''
        }
      },
      away: function() {
        this.visible = false
      },

    },

});
