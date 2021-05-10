<template>
  <div>
    <!-- MAIN -->
    <main>

      <!-- HERO -->
      <section class="relative pt-16 lg:h-screen w-full lg:overflow-hidden">
        <!-- PC -->
        <div class="hidden lg:block w-screen overflow-hidden">
          <div class="px-10 pt-12">
            <div class="absolute top-28 right-10 w-7/12 xl:w-6/12">
              <img src="~/assets/svg/hand_shake.svg" alt="Hand Shake">
            </div>
            <h1 class="relative pt-24 xl:pl-10 flex flex-col leading-tight space-y-3 text-5xl xl:text-6xl tracking-widest">
              <span class="hero-header__text">お客様の思い</span>
              <span class="hero-header__text">+α</span>
              <span class="hero-header__text">のITソリューション</span>
            </h1>
          </div>
          <div class="ocean">
            <div class="wave"></div>
            <div class="wave"></div>
          </div>
        </div>
        <!-- SP -->
        <div class="flex flex-col space-y-5 lg:hidden py-8 px-5 md:p-10 justify-center items-center">
          <h1 class="tracking-wider flex flex-col leading-tight space-y-3 text-3xl md:text-5xl">
            <span class="hero-header__text">お客様の思い</span>
            <span class="hero-header__text">+α</span>
            <span class="hero-header__text">のITソリューション</span>
          </h1>
          <div class="w-4/5">
            <img src="~/assets/svg/hand_shake.svg" alt="Hand Shake">
          </div>
        </div>
      </section>

      <hr class="lg:hidden w-16 md:w-24 mx-auto border-blue-medium transform rotate-90">

      <!-- SERVICE -->
      <section class="service py-16 px-2 md:px-10 mx-auto">
        <div class="text-center">
          <h2 class="section-title-en">SERVICE</h2>
          <p class="section-title-jp">事業内容</p>
        </div>
        <div class=" mt-10 flex justify-evenly flex-wrap">
          <div class=" mb-8 md:mb-0 ">
            <div class="service-item__wrapper">
              <div class="service-item__img">
                <img class="mx-auto" src="~/assets/svg/ses.svg" alt="System Engineering Service">
              </div>
            </div>
            <p class=" mt-2 text-center">SES事業</p>
          </div>
          <div class=" mb-8 md:mb-0 ">
            <div class="service-item__wrapper">
              <div class="service-item__img">
                <img class="mx-auto" src="~/assets/svg/contracted_development.svg" alt="Contracted Development">
              </div>
            </div>
            <p class=" mt-2 text-center">受託開発</p>
          </div>
          <div class="">
            <div class="service-item__wrapper">
              <div class="service-item__img">
                <img class="mx-auto" src="~/assets/svg/web_design.svg" alt="Web Design">
              </div>
            </div>
            <p class=" mt-2 text-center">Webサイト制作</p>
          </div>
        </div>
        <div class=" mt-16 text-center">
          <div class=" pb-3 px-3 border-b hover:border-gray-500 inline-block">
            <NuxtLink to="/service" class="view-more">
              <span class="text-lg">VIEW MORE</span>
              <svg class="h-6 pl-12 pt-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"/>
              </svg>
            </NuxtLink>
          </div>
        </div>
      </section>


      <!-- PRODUCT -->
      <section class="product bg-gray-100 text-gray-800">
        <div class="product-container">
          <div class="w-full lg:w-3/5 py-16 md:py-20">
            <div>
              <h2 class="section-title-en">PRODUCT</h2>
              <p class="section-title-jp">製品</p>
            </div>
            <h2 class="mt-10 text-2xl md:text-3xl">小学校受験サービス</h2>
            <p class="mt-4 pr-0 lg:pr-8 xl:pr-20 tracking-wide text-sm md:text-base leading-relaxed">
              本サービスは、お勉強や小学校受験向けのコンテンツを提供するサービスとして、練習図形問題16種類、問題数は12,000問以上あります。お勉強や公立・私立小学校お受験をする子供たちはもちろん、ご家族にどんどん情報発信してまいります。<br>
              試験のためだけではなく、子供たちに知識量を増やすこともでき、脳全体を活性化させる事もできます。
            </p>
          </div>
          <div class="relative w-full h-full lg:w-2/5 my-auto flex items-center justify-center">
            <div class="absolute w-11/12 md:w-full h-full rounded-lg bg-gray-400"  style="transform: rotate(5deg)"></div>
            <div class="relative w-11/12 md:w-full h-full rounded-lg bg-gradient-to-r from-indigo-400 to-blue-400">
              <div class="py-16 flex flex-wrap lg:flex-col justify-around items-center">
                <div class="w-5/6 md:w-1/2 lg:w-3/4 ">
                  <img src="~/assets/img/product.jpg" alt="Product">
                </div>
                <div class=" mt-10 md:mt-0 lg:mt-16">
                  <div class=" pb-3 px-3 border-b border-gray-900 hover:border-gray-600 inline-block">
                    <NuxtLink to="/product" class="view-more">
                      <span class="text-lg">VIEW MORE</span>
                      <svg class="h-6 pl-12 pt-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"/>
                      </svg>
                    </NuxtLink>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- NOTICE -->
      <section class="notice py-16 px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">
        <h2 class="section-title-en">NOTICE</h2>
        <p class="section-title-jp">お知らせ</p>
        <div class="mt-6 text-sm lg:text-base">
          <div class="notice-item">
            <span class="notice-item__date"><time datetime="2021-04-26">2021年04月</time></span>
            <span>ホームページリニューアル<span class="notice-item__new">NEW</span></span>
          </div>
          <div class="notice-item">
            <span class="notice-item__date"><time datetime="2019-07-23">2019年07月</time></span>
            <span>3100万円に増資</span>
          </div>
          <div class="notice-item">
            <span class="notice-item__date"><time datetime="2019-05-01">2019年05月</time></span>
            <span>事業拡大とそれに伴う人員増加のため、東京都中央区日本橋に事務所新設</span>
          </div>
          <div class="notice-item">
            <span class="notice-item__date"><time datetime="2018-08-01">2018年08月</time></span>
            <span>ホームページリニューアル</span>
          </div>
          <div class="notice-item">
            <span class="notice-item__date"><time datetime="2018-05-01">2018年05月</time></span>
            <span>2000万円に増資</span>
          </div>
          <div class="notice-item">
            <span class="notice-item__date"><time datetime="2012-08-27">2012年08月</time></span>
            <span>株式会社アンスール設立</span>
          </div>
        </div>
      </section>



      <!-- OTHERS -->
      <section class="other bg-gray-100">
        <div class="py-16 px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">
          <div>
            <h2 class="section-title-en">OTHERS</h2>
            <p class="section-title-jp">その他</p>
          </div>
          <div class=" md:mt-6 xl:mt-10 flex flex-col md:flex-row md:space-x-10 justify-between">
            <!-- 会社概要 -->
            <div class="group other-item">
              <NuxtLink to="/company" class="h-full">
                <div class=" other-item__bg">
                  <img class="other-item__img" src="~/assets/img/company.jpg" alt="Company">
                </div>
                <div class="other-item__overlay">
                  <div class="other-item__bar">
                    <span class="other-item__text">COMPANY
                    </span>
                    <svg class="other-item__arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"/>
                    </svg>
                  </div>
                </div>
              </NuxtLink>
            </div>
            <!-- 採用情報 -->
            <div class="group other-item">
              <NuxtLink to="/recruit" class="h-full">
                <div class=" other-item__bg">
                  <img class="other-item__img" src="~/assets/img/recruit-sm.jpg" alt="Recruit">
                </div>
                <div class="other-item__overlay">
                  <div class="other-item__bar">
                    <span class="other-item__text">RECRUIT</span>
                    <svg class="other-item__arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"/>
                    </svg>
                  </div>
                </div>
              </NuxtLink>
            </div>
          </div>
        </div>
      </section>

    </main>

  </div>
</template>

<script>
export default {
  head() {
    return {
      title: this.title
    }
  },
  data() {
    return {
      title: 'ホーム'
    }
  }
}
</script>

<style scoped>

  .hero-header__text {
    @apply px-3 text-white bg-blue-medium flex w-max;
  }

  .ocean {
    height: 5%;
    width:100%;
    position:absolute;
    bottom:0;
    left:0;
    background: #0069FF;
  }
  .wave {
    background: url(~/assets/svg/wave.svg) repeat-x; 
    position: absolute;
    top: -198px;
    width: 6400px;
    height: 198px;
    animation: wave 7s cubic-bezier( 0.36, 0.45, 0.63, 0.53) infinite;
    transform: translate3d(0, 0, 0);
  }
  .wave:nth-of-type(2) {
    top: -175px;
    animation: wave 7s cubic-bezier( 0.36, 0.45, 0.63, 0.53) -.125s infinite, swell 7s ease -1.25s infinite;
    opacity: 1;
  }
  @keyframes wave {
    0% {
      margin-left: 0;
    }
    100% {
      margin-left: -1600px;
    }
  }
  @keyframes swell {
    0%, 100% {
      transform: translate3d(0,-25px,0);
    }
    50% {
      transform: translate3d(0,5px,0);
    }
  }


  .section-title-en {
    @apply text-3xl md:text-4xl font-light tracking-widest;
  }
  .section-title-jp {
    @apply mt-2 tracking-wider text-gray-600 text-base;
  }


  .service-item__wrapper {
    @apply w-56 md:w-64 lg:w-72 flex text-center align-middle;
  }
  .service-item__img {
    @apply w-full md:h-56 flex justify-between items-center;
  }

  .view-more {
    @apply tracking-widest hover:text-gray-600 flex align-middle;
  }


  .product-container {
    @apply px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto flex flex-col lg:flex-row lg:relative;
  }


  .notice-item {
    @apply flex py-2 md:py-0 flex-col md:flex-row border-b border-gray-200 leading-loose md:leading-10;
  }
  .notice-item__date {
    @apply mr-16 lg:mr-24;
  }
  .notice-item__new {
    @apply ml-2 p-1 leading-none rounded-md bg-yellow-500 text-white text-sm;
  }


  .other-item {
    @apply w-full md:w-1/2 pt-10 md:pt-0 hover:shadow-2xl overflow-hidden;
  }
  .other-item__bg {
    @apply relative h-full pb-4/6;
  }
  .other-item__img {
    @apply absolute w-full h-full object-cover rounded transform transition delay-75 duration-300 group-hover:scale-110;
  }
  .other-item__overlay {
    @apply w-full pt-2 -mt-20 lg:pt-3 lg:-mt-24 xl:pt-8 xl:-mt-40 relative;
  }
  .other-item__bar {
    @apply p-5 lg:p-6 xl:p-10 flex justify-between bg-black bg-opacity-50 text-gray-100 rounded-b;
  }
  .other-item__text {
    @apply text-xl lg:text-2xl xl:text-3xl xl:leading-relaxed tracking-widest;
  }
  .other-item__arrow {
    @apply h-8 xl:h-10 pl-12 pt-1 fill-current;
  }
</style>
