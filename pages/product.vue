<template>
  <main class="">

    <!-- HERO -->
    <section class="hero mt-6 px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto overflow-hidden">
      <div class="relative flex-col md:block pt-16 pb-1/12 md:pb-16 lg:pb-1/6 xl:pb-1/5">
        <div class=" w-full md:w-3/5 lg:w-8/12 xl:w-7/12 md:absolute md:top-0 md:mt-16 md:right-0 -mr-10">
          <img src="~/assets/svg/product_responsive.svg" alt="Product">
        </div>
        <div class="relative text-center md:text-left mt-10 md:mt-0">
          <h1 class=" font-light text-2xl md:text-4xl lg:text-5xl xl:text-6xl tracking-widest">小学校受験サービス</h1>
          <p class=" mt-4 font-thin text-lg md:text-xl lg:text-2xl tracking-widest">豊富な問題集でいつでも簡単に<br class="hidden md:block lg:hidden">受験できる。</p>
          <p class=" mt-8 md:mt-16 mb-8">小学生向けの受験サービスです。</p>
          <a class="mt-4 px-10 py-4 bg-branding-lighter-blue hover:bg-branding-light-blue text-gray-100 rounded" href="http://ansurs.com/ItemList/Menu1.aspx" target="_blank" rel="noopener noreferrer">無料問題サンプルをみる</a>
        </div>
      </div>
    </section>

    <!-- 目的 -->
    <section class="aim py-16 md:py-20 border-gray-100 border-t border-b bg-gray-100">
      <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">
        <h2 class=" font-light text-2xl md:text-4xl tracking-widest">小学校受験サービス</h2>
        <p class="text-sm md:text-base mt-2">
          幼児教育、国立小学校、私立小学校受験向けポータルサイトです。 鏡図形、変換図形、回転図形、点図形、重ね図形、回転重ね図形、移動図形、季節問題、塗り絵、ちぎり、模試問題など。
他、ブログ、塾情報、各校偏差値情報、都内受験情報、掲示板、家庭学習方法、筑波大学附属小学校向け、お受験スーツ、学費、制服、服装等の記事があります。
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor sem vel tortor tellus. Amet dictumst vel pulvinar enim varius blandit urna, eu feugiat. Rutrum viverra risus et amet.
            </p>
          </div>
          <div class=" w-full md:w-1/2 mt-10 md:mt-0 text-center md:text-left">
            <div>
              <img class="w-20 mx-auto md:mx-0" src="~/assets/svg/printer.svg" alt="Printer">
              <h4 class="mt-6">問題集を簡単にプラント</h4>
            </div>
            <p class="mt-8">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam nisl non turpis elementum iaculis. Metus ullamcorper viverra mauris condimentum euismod eu. Integer amet.
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
        <!-- <button class=" mt-4 md:mt-0 px-10 py-4 bg-branding-lighter-blue hover:bg-branding-light-blue text-gray-100 rounded">試してみる</button> -->
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