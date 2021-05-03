<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="hero-container">
        <img class="hero-img" src="~/assets/img/company.jpg" alt="Company">
      </div>
      <div class="hero-bar">
        <h1 class="hero-title">PHILOSOPHY</h1>
        <p class="hero-subtitle">経営理念</p>
      </div>
    </section>

    <!-- 経営理念 -->
    <section class="philosophy px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto mt-16 md:mt-24 md:pb-20">
      <div class="text-xs md:text-sm">
        <p class="text-base md:text-xl"><span class="border-b w-1/3 border-blue-medium">Thank you for your thanks</span>　～みんなに喜ばれる会社を目指して～　</p>
        <br>
        <p>私たちを取り巻く環境の変化は、日々スピードを増しています。それに伴い、技術革新は絶え間なく進み価値観も多様化しています。それでも、変わることがない大切なもの、それは人のための安心と安全です。そして、その安心と安全こそが健全で豊かな社会の基盤となっていくと考えています。</p>
        <br>
        <p>その中で、当社が目指すものは、普段は気に留めない当たり前のものですが、無くてはならないもの。気がついたときに“ありがたい”と思っていただけるもの。このように皆様の生活の中に浸透し、支えとなるサービスを幅広く展開し、社会に貢献することです。 また、この想いは社外のみならず、社内に対しても同様に、社員・社員の家族など、当社に関わる全ての皆様からありがたいと思っていただく会社づくりを目指していきます。</p>
        <br>
        <p>信頼の絆がつなぐ安心や安全に満ちた素晴らしい社会となるよう、当社のプロ意識にさらに磨きをかけ、今後とも価値ある貢献を果たすためにひたむきな姿勢で取り組んでまいります。</p>
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
          content: 'このページは株式会社アンスールの経営理念のページです。システムコンサルティングからソフトウェアの企画・設計・開発まで、アンスールにお任せ下さい'
        },
        {
          hid: 'keywords',
          name: 'keywords',
          content: '経営理念,システムコンサルティング,システム企画,システム開発,自社製品開発,ソフトウェア設計,ソフトウェア開発,ホームページ制作,SEO,幼児教育,国立小学校,私立小学校,お受験問題'
        }
      ]
    }
  },
  data() {
    return {
      title: '経営理念'
    }
  }
}
</script>