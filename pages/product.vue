<template>
  <main>

    <!-- HERO -->
    <section class="hero mt-16 md:mt-20 py-20" style="background: linear-gradient(to right, #021B79, #0575E6);">
      <div class="section-container hero-container">
        <div class="hero-img">
          <img class="mx-auto rounded-md" src="~/assets/img/product.jpg" alt="Product">
        </div>
        <div class="hero-content">
          <h1 class="hero-content__header">小学校受験サービス</h1>
          <p class="hero-content__text">豊富な問題集でいつでも簡単に<br class="hero-content__br">受験できる。</p>
          <p class="mt-8 md:mt-12">小学生向けの受験サービスです。</p>
          <a class="hero-content__link comm-btn--blue" href="http://ansurs.com/" target="_blank" rel="noopener noreferrer">今すぐアクセス</a>
        </div>
      </div>
    </section>

    <!-- 目的 -->
    <section class="aim py-16 md:py-20 bg-gray-100">
      <div class="section-container">
        <h2 class="aim-header">小学校受験サービス</h2>
        <p class="aim-text">
          本サービスは、お勉強や小学校受験向けのコンテンツを提供するサービスとして、練習図形問題16種類、問題数は12,000問以上あります。お勉強や公立・私立小学校お受験をする子供たちはもちろん、ご家族にどんどん情報発信してまいります。<br>
          試験のためだけではなく、子供たちに知識量を増やすこともでき、脳全体を活性化させる事もできます。
        </p>
      </div>
    </section>

    <!-- ガイド -->
    <section class="guide py-16 md:py-20">
      <div class="section-container guide-container">
        <div class="guide-item">
          <div>
            <img class="guide-item__image" src="~/assets/svg/paper.svg" alt="Paper">
            <h4 class="mt-6">豊富な問題集</h4>
          </div>
          <p class="mt-8">
            図形問題を含む16種類、問題数は12,000問以上あります。
          </p>
        </div>
        <div class="guide-item">
          <div>
            <img class="guide-item__image" src="~/assets/svg/printer.svg" alt="Printer">
            <h4 class="mt-6">問題集を簡単にプラント</h4>
          </div>
          <p class="mt-8">
            インターネットとプリンターさえ用意すれば、いつでもどこでもプリントで勉強できます。
          </p>
        </div>
      </div>
    </section>

    <!-- お試し -->
    <section class="trial bg-gray-100 py-6">
      <div class="trial-container">
        <img class="trial-img" src="~/assets/svg/stars.svg" alt="Stars">
        <p class=" tracking-wider">
          無料問題<a class="trial-link" href="http://ansurs.com/ItemList/Menu1.aspx" target="_blank" rel="noopener noreferrer">サンプルをみる</a>
        </p>
      </div>
    </section>

  </main>
</template>

<style scoped>

  .section-container {
    @apply px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto;
  }


  .hero-container {
    @apply flex flex-col space-y-10 md:flex-row-reverse;
  }
  .hero-img {
    @apply w-full md:w-3/5;
  }
  .hero-content {
    @apply w-full h-full md:w-2/5 text-center md:text-left text-white;
  }
  .hero-content__header {
    @apply font-light text-2xl md:text-3xl lg:text-4xl tracking-widest;
  }
  .hero-content__text {
    @apply mt-4 font-thin tracking-widest;
  }
  .hero-content__br {
    @apply hidden md:block lg:hidden;
  }
  .hero-content__link {
    @apply mt-4 inline-block;
  }


  .aim-header {
    @apply font-light text-2xl md:text-4xl tracking-widest;
  }
  .aim-text {
    @apply text-sm md:text-base mt-2;
  }      


  .guide-container {
    @apply flex flex-col space-y-10 md:flex-row md:space-x-10 md:space-y-0;
  }
  .guide-item {
    @apply w-full md:w-1/2 text-center md:text-left;
  }
  .guide-item__image {
    @apply w-20 mx-auto md:mx-0;
  }


  .trial-container {
    @apply flex flex-row justify-center items-center space-x-2;
  }
  .trial-img {
    @apply w-10 md:w-16;
  }
  .trial-link {
    @apply underline leading-loose hover:text-blue-medium;
  }

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
          content: 'このページは株式会社アンスールの製品のページです。システムコンサルティングからソフトウェアの企画・設計・開発まで、アンスールにお任せ下さい'
        },
        {
          hid: 'keywords',
          name: 'keywords',
          content: '製品,システムコンサルティング,システム企画,システム開発,自社製品開発,ソフトウェア設計,ソフトウェア開発,ホームページ制作,SEO,幼児教育,国立小学校,私立小学校,お受験問題'
        }
      ]
    }
  },
  data() {
    return {
      title: '製品'
    }
  }
}
</script>