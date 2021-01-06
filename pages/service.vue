<template>
  <main>
    <!-- HERO -->
    <section class="hero relative">
      <div class="relative h-56 md:h-84 pb-1/3 md:pb-1/5">
        <img class="block md:hidden absolute h-full w-full object-cover bg-center" src="~/assets/img/service-sm.jpg" alt="Service">
        <img class="hidden md:block absolute h-full w-full object-cover bg-center" src="~/assets/img/service.jpg" alt="Service">
      </div>
      <div class=" absolute bottom-0 left-0 px-4 md:px-20 py-3 -mb-10 md:-mb-16 w-3/4 bg-gradient-to-r from-indigo-400 to-blue-400 text-gray-100 shadow-3xl">
        <h1 class=" font-light text-2xl md:text-5xl leading-none tracking-widest">SERVICE</h1>
        <p class=" mt-1 font-thin text-xs md:text-2xl tracking-widest">事業内容</p>
      </div>
    </section>

    <!-- SES -->
    <section id="ses" class="ses md:mt-6">
      <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto py-16">
        <h2 class=" text-2xl md:text-4xl mb-6 text-center tracking-widest"><span class="border-double border-b bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-500">SES事業</span></h2>
        <div class="flex justify-between flex-col md:flex-row">
          <div class=" w-56 md:w-64 flex-shrink-0 mx-auto">
            <div class="w-full h-full">
              <img src="~/assets/svg/ses.svg" alt="System Engineering Service">
            </div>
          </div>
          <p class=" w-full pl-2 md:pl-6 mt-6 md:mt-0 flex flex-shrink items-center justify-center text-sm md:text-base leading-relaxed xl:leading-loose">
            当社スタッフがお客さま企業内に常駐し、各種アプリケーションおよびシステム開発、パッケージのカスタマイズ等の企画からシステムの開発、
            運用保守までをトータルにサポートします。オープン系、web系、組込系のシステム開発を中心に、ご要望に適した高品質で信頼のあるサービスを提供。 
            お客さまの業務効率を図りながら、トラブル時の対応も含め利用される方が安心して使用できるシステムの維持に取り組んでいます。
          </p>
        </div>
      </div>
    </section>

    <!-- 受託開発 -->
    <section id="contracted-development" class="contracted-development bg-gray-100">
      <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto py-16">
        <h2 class=" text-2xl md:text-4xl mb-6 text-center tracking-widest"><span class="border-double border-b bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-500">受託開発</span></h2>
        <div class="flex justify-between flex-col md:flex-row">
          <div class=" w-56 md:w-64 flex-shrink-0 mx-auto">
            <div class="w-full h-full">
              <img src="~/assets/svg/contracted_development.svg" alt="Contracted Development">
            </div>
          </div>
          <p class=" w-full pl-2 md:pl-6 mt-6 md:mt-0 flex flex-shrink items-center justify-center text-sm md:text-base leading-relaxed xl:leading-loose">
            豊富な人材の中から、お客さま業務に精通したシステムエンジニアでプロジェクトを構成し、分析からサービス開始まで責任をもって開発します。金融・医療・公共等のシステムまで幅広く対応しています。
          </p>
        </div>
      </div>
    </section>

    <!-- オフショア開発 -->
    <section id="offshore" class="offshore">
      <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto py-16">
        <h2 class=" text-2xl md:text-4xl mb-6 text-center tracking-widest"><span class="border-double border-b bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-500">オフショア開発</span></h2>
        <div class="flex justify-between flex-col md:flex-row">
          <div class=" w-56 md:w-64 flex-shrink-0 mx-auto">
            <div class="w-full h-full">
              <img src="~/assets/svg/offshore.svg" alt="Offshore">
            </div>
          </div>
          <p class=" w-full pl-2 md:pl-6 mt-6 md:mt-0 flex flex-shrink items-center justify-center text-sm md:text-base leading-relaxed xl:leading-loose">
            弊社は中国やミャンマーにオフショア開発ができます。これまでの開発経験で培った管理方法やコミュニケーション手法により、お客様にとってはオフショアを意識する事なく、高品質でコストパフォーマンスの高いソフトウエア開発を提供いたします。
          </p>
        </div>
      </div>
    </section>

    <!-- 開発分野・技術者開発言語構成 -->
    <section class="area-developer-profile bg-gray-100">
      <div class="pb-20 px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">
        <!-- 開発分野 -->
        <div class="py-10 md:pt-16">
          <h2 class=" text-3xl md:text-4xl text-center tracking-widest bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-500">開発分野</h2>
          <p class=" text-center text-sm md:text-xl">ノウハウを活用しお客様に最適なサービスをご提供します</p>
        </div>
        <div class=" px-4 py-10 md:p-10 bg-white rounded">
          <div class="flex flex-col md:flex-row sm:items-center justify-evenly border-b-0 md:border-b md:border-gray-200">
            <div class="pb-10 flex mx-auto md:mx-0">
              <div>
                <img class="h-20 md:h-24" src="~/assets/svg/finance.svg" alt="Finance">
              </div>
              <span class=" ml-6 lg:ml-12 text-xl md:text-2xl tracking-wider flex items-center justify-center">金融</span>
            </div>
            <div class=" hidden md:flex pb-48 border-r border-gray-200"></div>
            <div class="pb-10 flex mx-auto md:mx-0">
              <div>
                <img class="h-20 md:h-24" src="~/assets/svg/public.svg" alt="Public">
              </div>
              <span class=" ml-6 lg:ml-12 text-xl md:text-2xl tracking-wider flex items-center justify-center">公共</span>
            </div>
          </div>
          <div class=" flex flex-col md:flex-row sm:items-center justify-evenly">
            <div class="pt-0 md:pt-10 flex mx-auto md:mx-0">
              <div>
                <img class="h-20 md:h-24" src="~/assets/svg/medical.svg" alt="Medical">
              </div>
              <span class=" ml-6 lg:ml-12 text-xl md:text-2xl tracking-wider flex items-center justify-center">医療</span>
            </div>
            <div class=" hidden md:flex pt-48 border-r border-gray-200"></div>
            <div class="pt-10 flex mx-auto md:mx-0">
              <div>
                <img class="h-20 md:h-24" src="~/assets/svg/logistic.svg" alt="Logistic">
              </div>
              <span class=" ml-6 lg:ml-12 text-xl md:text-2xl tracking-wider flex items-center justify-center">流通</span>
            </div>
          </div>
        </div>
  
        <!-- 技術者開発言語構成 -->
        <div class="py-10 md:pt-16">
          <h2 class=" text-2xl md:text-4xl text-center tracking-widest bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-500">技術者開発言語構成</h2>
        </div>
        <div class="px-4 py-10 md:p-16 md:py-12 bg-white rounded">
          <div class="">
            <div>Java</div>
            <div class="mt-2  bg-indigo-600 h-6 w-2/3"></div>
          </div>
          <div class=" my-3">
            <div>C#</div>
            <div class="mt-2  bg-indigo-600 h-6 w-1/3"></div>
          </div>
          <div class=" my-3">
            <div>C/C++</div>
            <div class="mt-2  bg-indigo-600 h-6 w-1/6"></div>
          </div>
          <div class=" my-3">
            <div>Javascript</div>
            <div class="mt-2  bg-indigo-600 h-6 w-2/5"></div>
          </div>
          <div class=" my-3">
            <div>PHP</div>
            <div class="mt-2  bg-indigo-600 h-6 w-1/4"></div>
          </div>
          <div class=" my-3">
            <div>Python</div>
            <div class="mt-2  bg-indigo-600 h-6 w-2/12"></div>
          </div>
          <div class=" my-3">
            <div>その他</div>
            <div class="mt-2  bg-indigo-600 h-6 w-1/12"></div>
          </div>
        </div>
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