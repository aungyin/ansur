<template>
  <main class="">

    <!-- HERO -->
    <section class="hero mt-6 px-10 md:px-20 overflow-hidden">
      <div class="relative flex-col md:block pt-16 pb-1/12 md:pb-16 lg:pb-1/6 xl:pb-1/5">
        <div class=" w-full md:w-3/5 lg:w-8/12 xl:w-7/12 md:absolute md:top-0 md:mt-16 md:right-0 -mr-10">
          <img src="~/assets/svg/product_responsive.svg" alt="Product">
        </div>
        <div class="relative text-center md:text-left mt-10 md:mt-0">
          <h1 class=" font-light text-2xl md:text-4xl lg:text-5xl xl:text-6xl tracking-widest">小学校受験サービス</h1>
          <p class=" mt-4 font-thin text-lg md:text-xl lg:text-2xl tracking-widest">豊富な問題集でいつでも簡単に<br class="hidden md:block lg:hidden">受験できる。</p>
          <p class=" mt-8 md:mt-16 mb-8">小学生達為の受験サービスです。</p>
          <a class="mt-4 px-10 py-4 bg-branding-lighter-blue hover:bg-branding-light-blue text-gray-100 rounded" href="http://ansurs.com/ItemList/Menu1.aspx" target="_blank" rel="noopener noreferrer">無料問題サンプルをみる</a>
        </div>
      </div>
    </section>

    <!-- 目的 -->
    <section class="aim py-16 md:py-20 px-10 md:px-20 border-gray-100 border-t border-b bg-gray-100">
      <h2 class=" font-light text-2xl md:text-4xl tracking-widest">小学校受験サービス</h2>
      <p class="text-sm md:text-base mt-2">
        中学受験に次いで最近増えているのが小学校受験です。その勉強のために欠かせないのが問題集。公文・学研・こぐま会など幼児教育を得意とする塾から、様々な小学校受験用問題集が販売されています。しかし、種類が多く、どれを選べば良いのか迷ってしまうという親御さんも多いのではないでしょうか。
        <br>そこで、全国の問題集を簡単にアクセスおよび受験できるサービスを提供しています。
      </p>
    </section>

    <!-- ガイド -->
    <section class="guide py-16 md:py-20 px-10 md:px-20">
      <div class="flex flex-col md:flex-row md:space-x-10">
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
  
}
</script>