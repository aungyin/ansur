<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="hero-container">
        <img class="hero-img" src="~/assets/img/company.jpg" alt="Company">
      </div>
      <div class="hero-bar">
        <h1 class="hero-title">ORGANIZATION</h1>
        <p class="hero-subtitle">組織構成</p>
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