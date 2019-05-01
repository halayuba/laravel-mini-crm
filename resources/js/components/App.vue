<template>
  <div class="min-h-screen flex items-center justify-center">
      <h1 class="text-5xl font-sans cursor-pointer"
        :class="[flag? 'text-purple' : 'test-indigo']"
        @click="flag=!flag"
      >
        {{ message }}
      </h1>
  </div>
</template>

<script>
    export default {
        data() {
          return {
            flag: true,
          }
        },
        computed: {
          message() {
            return this.flag? 'Click Me' : 'Hello World'
          }
        },
        methods: {
          toggle() {

          }
        }

    }
</script>
