<template>
    <a @click="scrollTop" v-show="visible"
      class="fixed p-2 md:p-3 m-3 bottom-0 right-0 text-blue-medium text-sm cursor-pointer rounded border border-blue-medium bg-gray-100 hover:bg-blue-medium hover:text-gray-100">
        TOP
    </a>
</template>

<script>
export default {
  data () {
    return {
      visible: false
    }
  },
  methods: {
    scrollTop: function () {
      this.intervalId = setInterval(() => {
        if (window.pageYOffset === 0) {
          clearInterval(this.intervalId)
        }
        window.scroll(0, window.pageYOffset - 50)
      }, 20)
    },
    scrollListener: function (e) {
      this.visible = window.scrollY > 150
    }
  },
  mounted: function () {
    window.addEventListener('scroll', this.scrollListener)
  },
  beforeDestroy: function () {
    window.removeEventListener('scroll', this.scrollListener)
  }
}
</script>

<style scoped>
</style>
