<template>
  <div>
    <!-- MAIN -->
    <main>

      <!-- HERO -->
      <section class="relative overflow-hidden">
        <div class="hidden lg:block">
          <div class="px-10 pt-12 relative lg:flex w-screen">
            <div class="absolute top-0 right-0 mt-8 mr-10 w-7/12 z-10">
              <img src="~/assets/svg/hand_shake.svg" alt="Hand Shake">
            </div>
            <h1 class=" pt-20 pb-20 xl:pl-10 text-5xl xl:text-6xl tracking-widest">
              お客様の想い<span class=" text-branding-light-blue text-6xl font-light">+</span>αのIT<br>ソリューション
            </h1>
          </div>
          <div class="w-full">
            <img src="~/assets/svg/wave.svg" alt="Waves">
          </div>
        </div>

        <div class="flex flex-col lg:hidden py-8 px-5 md:p-10 text-center">
          <h1 class="tracking-wider text-3xl md:text-5xl">
            お客様の想い<span class="text-branding-light-blue font-light">+</span>αのITソリューション
          </h1>
          <div class="mt-5 md:mt-0 w-full">
            <img src="~/assets/svg/hand_shake.svg" alt="Hand Shake">
          </div>
        </div>
      </section>


      <!-- SERVICE -->
      <section class="service py-16 md:px-20 ">
        <div class="text-center">
          <h2 class=" text-3xl md:text-4xl font-light tracking-widest">SERVICE</h2>
          <p class=" mt-2 tracking-wider text-gray-600 text-md">事業内容</p>
        </div>
        <div class=" mt-10 flex justify-evenly flex-wrap lg:flex-row">
          <div class=" mb-8 md:mb-0 ">
            <div class="w-56 md:w-64 lg:w-72 flex text-center align-middle">
              <div class="w-full h-full">
                <img src="~/assets/svg/ses.svg" alt="System Engineering Service">
              </div>
            </div>
            <p class=" mt-2 text-md text-center">SES事業</p>
          </div>
          <div class=" mb-8 md:mb-0 ">
            <div class="w-56 md:w-64 lg:w-72 flex text-center align-middle">
              <div class="w-full h-full">
                <img src="~/assets/svg/contracted_development.svg" alt="Contracted Development">
              </div>
            </div>
            <p class=" mt-2 text-md text-center">受託開発</p>
          </div>
          <div class="">
            <div class="w-56 md:w-64 lg:w-72 flex text-center align-middle">
              <div class="w-full h-full">
                <img src="~/assets/svg/offshore.svg" alt="Offshore">
              </div>
            </div>
            <p class=" mt-2 text-md text-center">オフショア</p>
          </div>
        </div>
        <div class=" mt-16 text-center">
          <div class=" pb-3 px-3 border-b border-gray-900 hover:border-gray-600 inline-block">
            <NuxtLink to="/service" class=" tracking-widest hover:text-gray-600 flex align-middle">
              <span class="text-lg">VIEW MORE</span>
              <svg class="h-6 pl-12 pt-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"/>
              </svg>
            </NuxtLink>
          </div>
        </div>
      </section>


      <!-- PRODUCT -->
      <section class="product flex flex-col lg:flex-row overflow-hidden relative">
        <div class=" w-full h-56 xl:h-72 mt-48 xl:mt-24 -mr-16  bg-gray-100 hidden lg:block absolute top-0 right-0 transform skew-y-12 xl:skew-y-16 rotate-90"></div>
        <div class=" xl:w-1/2 lg:w-3/5 w-full  bg-gray-100 relative">
          <div class="py-16 md:py-20 px-10 md:px-20 relative z-10">
            <div>
              <h2 class=" text-3xl md:text-4xl font-light tracking-widest">PRODUCT</h2>
              <p class=" mt-2 tracking-wider text-gray-600 text-md">製品</p>
            </div>
            <div class=" mt-10 flex justify-between">
              <div class="">
                <h2 class=" text-2xl md:text-3xl">小学校受験サービス</h2>
                <p class="mt-4 pr-0 xl:pr-20 tracking-wide text-sm md:text-base leading-relaxed">
                  幼児教育、国立小学校、私立小学校受験ポータルサイトです。
                  鏡図形、変換図形、回転図形、点図形、重ね図形、回転重ね図形、移動図形、季節問題、塗り絵、ちぎり、模試問題、ブログ、塾、偏差値、東京、掲示板、家庭学習、筑波大学附属小学校、お受験スーツ、学費、制服、服装等の記事があります。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="xl:w-1/2 lg:w-2/5 w-full  bg-indigo-300">
          <div class="py-16 px-10 md:px-20 flex flex-wrap lg:flex-col justify-around items-center lg:items-end">
            <div class=" w-48">
              <img src="~/assets/svg/product.svg" alt="Product">
            </div>
            <div class=" mt-10 md:mt-0 lg:mt-16">
              <div class=" pb-3 px-3 border-b border-gray-900 hover:border-gray-600 inline-block">
                <NuxtLink to="/product" class=" tracking-widest hover:text-gray-600 flex align-middle">
                  <span class="text-lg">VIEW MORE</span>
                  <svg class="h-6 pl-12 pt-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"/>
                  </svg>
                </NuxtLink>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- NOTICE -->
      <section class="notice py-16 px-10 md:px-20">
        <h2 class=" text-3xl md:text-4xl font-light tracking-widest">NOTICE</h2>
        <p class=" mt-2 tracking-wider text-gray-600 text-md">お知らせ</p>
        <div class="mt-6 text-sm lg:text-base">
          <div class="flex py-2 md:py-0 flex-col md:flex-row border-b border-gray-200 leading-loose md:leading-10">
            <span class=" mr-16 lg:mr-24"><time datetime="2019-07-23">2019年07月</time></span>
            <span class="">3100万円に増資</span>
          </div>
          <div class="flex py-2 md:py-0 flex-col md:flex-row border-b border-gray-200 leading-loose md:leading-10">
            <span class=" mr-16 lg:mr-24"><time datetime="2019-05-01">2019年05月</time></span>
            <span class="">事業拡大とそれに伴う人員増加のため、東京都中央区日本橋に事務所新設</span>
          </div>
          <div class="flex py-2 md:py-0 flex-col md:flex-row border-b border-gray-200 leading-loose md:leading-10">
            <span class=" mr-16 lg:mr-24"><time datetime="2018-08-01">2018年08月</time></span>
            <span class="">ホームページリニューアル</span>
          </div>
          <div class="flex py-2 md:py-0 flex-col md:flex-row border-b border-gray-200 leading-loose md:leading-10">
            <span class=" mr-16 lg:mr-24"><time datetime="2018-05-01">2018年05月</time></span>
            <span class="">2000万円に増資</span>
          </div>
          <div class="flex py-2 md:py-0 flex-col md:flex-row border-b border-gray-200 leading-loose md:leading-10">
            <span class=" mr-16 lg:mr-24"><time datetime="2012-08-27">2012年08月</time></span>
            <span class="">株式会社アンスール設立</span>
          </div>
        </div>
      </section>



      <!-- OTHERS -->
      <section class="other py-16 px-10 md:px-20 bg-gray-100">
        <div class="">
          <h2 class=" text-3xl md:text-4xl font-light tracking-widest">OTHERS</h2>
          <p class=" mt-2 tracking-wider text-gray-600 text-md">その他</p>
        </div>
        <div class=" md:mt-6 xl:mt-10 flex flex-col md:flex-row md:space-x-10 justify-between">
          <!-- 会社概要 -->
          <div class=" w-full md:w-1/2 pt-10 md:pt-0 hover:shadow-2xl">
            <NuxtLink to="/company" class="h-full">
              <div class=" relative h-full pb-4/6">
                <img class="absolute w-full h-full object-cover bg-center rounded" src="~/assets/img/company-sm.jpg" alt="Company">
                <!-- <img class="block md:hidden absolute w-full h-full object-cover bg-center rounded shadow-2xl" src="~/assets/img/company-sm.jpg" alt="Company">
                <img class="hidden md:block absolute w-full h-full object-cover bg-center rounded shadow-2xl" src="~/assets/img/company.jpg" alt="Company"> -->
              </div>
              <div class=" w-full pt-2 -mt-20 lg:pt-3 lg:-mt-24 xl:pt-8 xl:-mt-40 relative">
                <div class=" p-5 lg:p-6 xl:p-10 flex justify-between bg-black bg-opacity-50 text-gray-100 rounded-b">
                  <span class="text-xl lg:text-2xl xl:text-3xl xl:leading-relaxed tracking-widest">COMPANY
                  </span>
                  <svg class="h-8 xl:h-10 pl-12 pt-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"/>
                  </svg>
                </div>
              </div>
            </NuxtLink>
          </div>
          <!-- 採用情報 -->
          <div class=" w-full md:w-1/2 pt-10 md:pt-0 hover:shadow-2xl">
            <NuxtLink to="/recruit" class="h-full">
              <div class=" relative h-full pb-4/6">
                <img class="absolute w-full h-full object-cover rounded" src="~/assets/img/recruit-sm.jpg" alt="Recruit">
                <!-- <img class="block md:hidden absolute w-full h-full object-cover rounded shadow-2xl" src="~/assets/img/recruit-sm.jpg" alt="Recruit">
                <img class="hidden md:block absolute w-full h-full object-cover rounded shadow-2xl" src="~/assets/img/recruit.jpg" alt="Recruit"> -->
              </div>
              <div class=" w-full pt-2 -mt-20 lg:pt-3 lg:-mt-24 xl:pt-8 xl:-mt-40 relative">
                <div class=" p-5 lg:p-6 xl:p-10 flex justify-between bg-black bg-opacity-50 text-gray-100 rounded-b">
                  <span class="text-xl lg:text-2xl xl:text-3xl xl:leading-relaxed tracking-widest">RECRUIT</span>
                  <svg class="h-8 xl:h-10 pl-12 pt-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"/>
                  </svg>
                </div>
              </div>
            </NuxtLink>
          </div>
        </div>
      </section>

    </main>

  </div>
</template>

<script>
export default {
}
</script>

<style>
/* Sample `apply` at-rules with Tailwind CSS
.container {
@apply min-h-screen flex justify-center items-center text-center mx-auto;
}
*/
</style>
