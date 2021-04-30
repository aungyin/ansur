<template>
  <main class="">

    <!-- HERO -->
    <section class="hero mt-6 px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto overflow-hidden">
      <div class="flex flex-col space-y-10 md:flex-row-reverse">
        <div class="w-full md:w-3/5">
          <img src="~/assets/img/product.jpg" alt="Product">
        </div>
        <div class="w-full h-full md:w-2/5 text-center md:text-left">
          <h1 class=" font-light text-2xl md:text-3xl lg:text-4xl tracking-widest">小学校受験サービス</h1>
          <p class=" mt-4 font-thin tracking-widest">豊富な問題集でいつでも簡単に<br class="hidden md:block lg:hidden">受験できる。</p>
          <p class=" mt-8 md:mt-14">小学生向けの受験サービスです。</p>
          <a class="mt-4 px-10 py-4 bg-branding-lighter-blue hover:bg-branding-light-blue text-gray-100 rounded inline-block" href="http://ansurs.com/" target="_blank" rel="noopener noreferrer">今すぐアクセス</a>
        </div>
      </div>
    </section>

    <!-- 目的 -->
    <section class="aim mt-16 py-16 md:py-20 border-gray-100 border-t border-b bg-gray-100">
      <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">
        <h2 class=" font-light text-2xl md:text-4xl tracking-widest">小学校受験サービス</h2>
        <p class="text-sm md:text-base mt-2">
          本サービスは、お勉強や小学校受験向けのコンテンツを提供するサービスとして、練習図形問題16種類、問題数は12,000問以上あります。お勉強や公立・私立小学校お受験をする子供たちはもちろん、ご家族にどんどん情報発信してまいります。<br>
          試験のためだけではなく、子供たちに知識量を増やすこともでき、脳全体を活性化させる事もできます。
        </p>
      </div>
    </section>

    <!-- ガイド -->
    <section class="guide py-16 md:py-20">
      <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">
        <div class="px-2 flex flex-col md:flex-row md:space-x-10">
          <div class=" w-full md:w-1/2 text-center md:text-left">
            <div>
              <img class="w-20 mx-auto md:mx-0" src="~/assets/svg/paper.svg" alt="Paper">
              <h4 class="mt-6">豊富な問題集</h4>
            </div>
            <p class="mt-8">
              図形問題を含む16種類、問題数は12,000問以上あります。
            </p>
          </div>
          <div class=" w-full md:w-1/2 mt-10 md:mt-0 text-center md:text-left">
            <div>
              <img class="w-20 mx-auto md:mx-0" src="~/assets/svg/printer.svg" alt="Printer">
              <h4 class="mt-6">問題集を簡単にプラント</h4>
            </div>
            <p class="mt-8">
              インターネットとプリンターさえ用意すれば、いつでもどこでもプリントで勉強できます。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- お試し -->
    <section class="trial bg-gray-100 py-6">
      <div class="flex flex-col md:flex-row justify-center items-center space-x-10">
        <div class="flex justify-center items-center space-x-4">
          <img class="w-10 md:w-16" src="~/assets/svg/stars.svg" alt="Stars">
          <p class=" tracking-wider">無料問題<a class=" underline leading-loose hover:text-branding-light-blue" href="http://ansurs.com/ItemList/Menu1.aspx" target="_blank" rel="noopener noreferrer">サンプルをみる</a></p>
        </div>
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