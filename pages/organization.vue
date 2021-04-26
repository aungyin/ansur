<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="relative h-56 md:h-84 pb-1/3 md:pb-2/5">
        <img class="absolute h-full w-full object-cover bg-center" src="~/assets/img/company.jpg" alt="Company">
      </div>
      <div class=" absolute bottom-0 left-0 px-4 md:px-20 py-3 -mb-10 md:-mb-16 w-3/4 bg-gradient-to-r from-indigo-400 to-blue-400 text-gray-100 shadow-3xl">
        <h1 class=" font-light text-2xl md:text-5xl leading-none tracking-widest">ORGANIZATION</h1>
        <p class=" mt-1 font-thin text-base md:text-2xl tracking-widest">組織構成</p>
      </div>
    </section>

    <!-- 組織構成 -->
    <section class="organization py-10 px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">
      <div class="mt-4 md:mt-10">
        <img src="~/assets/img/organization.jpg" alt="Organization" class="mx-auto">
      </div>
    </section>

  </main>
</template>

<style scoped>

</style>

<script>
export default {
  head() {
    return {
      title: this.title,
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: 'このページは株式会社アンスールの組織構成のページです。システムコンサルティングからソフトウェアの企画・設計・開発まで、アンスールにお任せ下さい'
        },
        {
          hid: 'keywords',
          name: 'keywords',
          content: '組織構成,システムコンサルティング,システム企画,システム開発,自社製品開発,ソフトウェア設計,ソフトウェア開発,ホームページ制作,SEO,幼児教育,国立小学校,私立小学校,お受験問題'
        }
      ]
    }
  },
  data() {
    return {
      title: '組織構成'
    }
  }
}
</script>