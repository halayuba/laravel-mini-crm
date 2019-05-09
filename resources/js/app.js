import { directive as onClickaway } from 'vue-clickaway';
import Toastr from 'vue-toastr'

require('./bootstrap');
require('vue-toastr/src/vue-toastr.scss');

window.Vue = require('vue');

Vue.use(Toastr)

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
            actionsVisible: false,
            imageData: null,
            selectedFile: '',
            tipFlag: false,
            state: 'default',
            feature1: false,
            feature2: false,
            feature3: false,
            feature4: false,
            feature5: false,
            feature6: false,
            feature7: false,
            feature8: false,
            feature9: false,
            feature10: false,
            feature11: false,
            feature12: false,
            feature13: false
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
        chooseImage () {
          this.state = 'uploading'
          this.$refs.fileInput.click()
        },
        onFileSelected (event) {
          if (event.target.files.length !== 0) {
            this.selectedFile = event.target.files[0]

            /* == VALIDATION == */
            if( this.isImage() ) {
              if( this.isSizeAcceptable() ) {
                const input = this.$refs.fileInput
                const files = input.files
                if (files && files[0]) {
                  const reader = new FileReader
                  reader.onload = e => {
                  this.imageData = e.target.result
                  }
                  reader.readAsDataURL(files[0])
                  this.$emit('input', files[0])
                }
              } else {
                this.$toastr.e('The file you are trying to upload is too large.')
              }
            } else {
              this.$toastr.e('The file you are trying to upload does not seem to be an image.')
            }
          } else {
            this.$toastr.e('No file selected.')
          }
        },
        isImage() {
          return this.selectedFile.type.match('image.*') ? true : false
        },
        isSizeAcceptable() {
          return (this.selectedFile.size < 99999)? true : false
        },
        removeImage() {
          this.imageData = null
          this.selectedFile = null
          this.$toastr.i('Book cover image is removed.')
        },
    },

});
