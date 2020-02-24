<template>
  <!-- LOGO UPLOAD -->
  <div class="w-full mt-12">
    <label class="form_label">
      Upload Logo

      <!-- TIP -->
      <span class="text-sm text-gray-700 ml-1" title="Logo must be an image and min. size 100X100"
        @click="tipFlag = !tipFlag"
      >
        <picture class="w-4 h-4 fill-current text-gray-600 inline-block">
          <svgInfo/>
        </picture>
      </span>
      <p class="my-1 px-2 py-1 text-gray-700 border border-gray-500"
        v-if="tipFlag"
        @click="tipFlag = !tipFlag"
      >
        Logo must be an image and min. size 100X100
      </p>
    </label>

    <!-- VUE FOR FORMATTING AND INITIAL VALIDATION -->
    <div class="px-3">
      <div class="mt-6 block w-32 h-32 cursor-pointer bg-cover bg-center bg-gray-500 hover:bg-gray-400"
        :style="{ 'background-image': `url(${imageData})` }"
        @click="chooseImage"
      >
        <span class="w-full h-full flex justify-center items-center text-gray-700 text-sm font-medium"
          v-if="!imageData"
        >
          Choose an Image
        </span>
        <input name="file" type="file" class="hidden"
          ref="fileInput"
          @input="onFileSelected"
        >
      </div>
    </div>

  </div> <!-- END LOGO UPLOAD -->
</template>

<script>
  import svgInfo from '../assets/img/svg/Info'

  export default {
    data() {
      return {
        imageData: null,
        selectedFile: '',
        tipFlag: false,
      }
    },
    components: {
      svgInfo
    },
    methods: {
      chooseImage () {
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
        this.$toastr.i('image is removed.')
      },
    }

  }
</script>

<style>

</style>
