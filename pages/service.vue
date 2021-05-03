<template>
  <main>
    <!-- HERO -->
    <section class="hero relative">
      <div class="comm-hero-container">
        <img class="block md:hidden comm-hero-img" src="~/assets/img/service-sm.jpg" alt="Service">
        <img class="hidden md:block comm-hero-img" src="~/assets/img/service.jpg" alt="Service">
      </div>
      <div class="comm-hero-bar">
        <h1 class="comm-hero-title">SERVICE</h1>
        <p class="comm-hero-subtitle">事業内容</p>
      </div>
    </section>

    <!-- SES -->
    <section id="ses" class="ses md:mt-6">
      <div class="section-container">
        <h2 class="section-header">
          <span class="section-header__style">SES事業</span>
        </h2>
        <div class="section-content">
          <div class="section-content__wrapper">
            <img class="section-content__img" src="~/assets/svg/ses.svg" alt="System Engineering Service">
          </div>
          <p class="section-content__text">
            Ansurエンジニアがお客さま企業内に常駐し、各種アプリケーションおよびシステム開発、パッケージのカスタマイズ等の企画からシステムの開発、
            運用保守までをトータルにサポートします。オープン系、web系、組込系のシステム開発を中心に、ご要望に適した高品質で信頼のあるサービスを提供。 
            お客さまの業務効率を図りながら、トラブル時の対応も含め利用される方が安心して使用できるシステムの維持に取り組んでいます。
          </p>
        </div>
      </div>
    </section>

    <!-- 受託開発 -->
    <section id="contracted-development" class="contracted-development bg-gray-100">
      <div class="section-container">
        <h2 class="section-header">
          <span class="section-header__style">受託開発</span>
        </h2>
        <div class="section-content">
          <div class="section-content__wrapper">
            <img class="section-content__img" src="~/assets/svg/contracted_development.svg" alt="Contracted Development">
          </div>
          <p class="section-content__text">
            豊富な人材の中から、お客さま業務に精通したシステムエンジニアでプロジェクトを構成し、分析からサービス開始まで責任をもって開発します。金融・医療・公共等のシステムまで幅広く対応しています。
          </p>
        </div>
      </div>
    </section>

    <!-- Webサイト制作 -->
    <section id="offshore" class="offshore">
      <div class="section-container">
        <h2 class="section-header">
          <span class="section-header__style">Webサイト制作</span>
        </h2>
        <div class="section-content">
          <div class="section-content__wrapper">
            <img class="section-content__img" src="~/assets/svg/web_design.svg" alt="Web Design">
          </div>
          <p class="section-content__text">
            個性のないホームページは、つまらない！！<br>
            すぐに忘れてしまいますよね。 <br>
            せっかく作るなら、その中でも記憶に残るホームページにしたいと思いませんか？<br>
            お客様に適した企画、提案を行い、お客様の意図に沿った、効果的なWebサイトを制作致します。<br><br>

            ■Webサイト制作<br>
            新規サイト制作、リニューアルといった大規模開発から、ランディングページなど比較的小規模な開発まで幅広く行っています。 クライアント様のニーズに応じてWebサイトの企画から制作、システム運用までトータルでサポートし、売上アップ、ブランディング等目的に応じたサイト制作を行います。<br><br>

            ■モバイル/スマートフォンサイト制作<br>
            携帯サイト・スマートフォンサイトをメイン事業にし、公式課金サイトや新規スマートフォンサイト構築から既存サイトのスマートフォン対応まで制作全般を行っています。<br><br>

            ■SEO対策<br>
            一般的には人が検索エンジンを使い情報を探す際、上位20件くらいまでから必要な情報を見つけだそうとするといわれます。自社のホームページ・作成したホームページが検索エンジンの上位に表示されれば、それだけユーザーの目にとまる機会を増大させることができます。 検索エンジン(Yahoo!・googleなど)の検索結果の上位に表示されるということは、必要な情報を集めているユーザー、顧客に自社のウェブサイトを見てもらうことができるために、有効なマーケティング戦略になる事が出来るはずです。<br>
            弊社はコンテンツ内容が検索エンジンに最適に評価されるように内部施策を施し、お客様のWebサイトの上位表示へ貢献します。<br><br>
          </p>
        </div>
      </div>
    </section>

    <!-- 開発分野・技術者開発言語構成 -->
    <section class="area-skill bg-gray-100">
      <div class="pb-20 px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">

        <!-- 開発分野 -->
        <div class="area py-10 md:pt-16">
          <h2 class="section-header">
            <span class="section-header__style">開発分野</span>
          </h2>
          <p class=" text-center text-sm md:text-xl">ノウハウを活用しお客様に最適なサービスをご提供します</p>
          <div class="mt-10 p-10 bg-white rounded">
            <table class="w-full border-collapse">
              <thead></thead>
              <tbody>
                <tr>
                  <td class="area-item md:border-r md:border-b md:border-gray-200">
                    <div class="area-item__wrapper">
                      <div>
                        <img class="area-item__img" src="~/assets/svg/finance.svg" alt="Finance">
                      </div>
                      <span class="area-item__label">金融</span>
                    </div>
                  </td>
                  <td class="area-item md:border-b md:border-gray-200">
                    <div class="area-item__wrapper">
                      <div>
                        <img class="area-item__img" src="~/assets/svg/public.svg" alt="Public">
                      </div>
                      <span class="area-item__label">公共</span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="area-item md:border-r md:border-gray-200">
                    <div class="area-item__wrapper">
                      <div>
                        <img class="area-item__img" src="~/assets/svg/medical.svg" alt="Medical">
                      </div>
                      <span class="area-item__label">医療</span>
                    </div>
                  </td>
                  <td class="area-item">
                    <div class="area-item__wrapper">
                      <div>
                        <img class="area-item__img" src="~/assets/svg/logistic.svg" alt="Logistic">
                      </div>
                      <span class="area-item__label">流通</span>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
  
        <!-- 技術者開発言語構成 -->
        <div class="skill">
          <h2 class="section-header">
            <span class="section-header__style">技術者開発言語構成</span>
          </h2>
          <div class="skill-container">
            <div>
              <div>Java</div>
              <div class="skill-bar w-2/3"></div>
            </div>
            <div>
              <div>C#</div>
              <div class="skill-bar w-1/3"></div>
            </div>
            <div>
              <div>C/C++</div>
              <div class="skill-bar w-1/6"></div>
            </div>
            <div>
              <div>Javascript</div>
              <div class="skill-bar w-2/5"></div>
            </div>
            <div>
              <div>PHP</div>
              <div class="skill-bar w-1/4"></div>
            </div>
            <div>
              <div>Python</div>
              <div class="skill-bar w-2/12"></div>
            </div>
            <div>
              <div>その他</div>
              <div class="skill-bar w-1/12"></div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>
</template>

<style scoped>
  .section-container {
    @apply px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto py-16;
  }
  .section-header {
    @apply text-2xl md:text-4xl text-center tracking-widest;
  }
  .section-header__style {
    @apply border-double border-b bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-500;
  }
  .section-content {
    @apply mt-6 flex justify-between flex-col lg:flex-row;
  }
  .section-content__wrapper {
    @apply w-56 lg:w-1/2 mx-auto;
  }
  .section-content__img {
    @apply w-full h-32 md:h-56 mx-auto;
  }
  .section-content__text {
    @apply w-full pl-2 md:pl-6 mt-6 md:mt-0 flex flex-shrink items-center justify-center text-sm md:text-base leading-relaxed xl:leading-loose;
  }


  .area-row {
    @apply flex flex-col md:flex-row sm:items-center justify-evenly;
  }
  .area-item {
    @apply p-6 md:p-10 flex justify-center items-center md:table-cell;
  }
  .area-item__wrapper {
    @apply flex items-center justify-center;
  }
  .area-item__img {
    @apply h-20 md:h-24;
  }
  .area-item__label {
    @apply ml-6 lg:ml-12 text-xl md:text-2xl tracking-wider flex items-center justify-center;
  }


  .skill-container {
    @apply mt-10 px-4 py-10 md:p-16 md:py-12 bg-white rounded flex-col space-y-4;
  }
  .skill-bar {
    @apply mt-2  bg-indigo-600 h-2 rounded-md;
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
          content: 'このページは株式会社アンスールのサービスのページです。システムコンサルティングからソフトウェアの企画・設計・開発まで、アンスールにお任せ下さい'
        },
        {
          hid: 'keywords',
          name: 'keywords',
          content: 'サービス,システムコンサルティング,システム企画,システム開発,自社製品開発,ソフトウェア設計,ソフトウェア開発,ホームページ制作,SEO,幼児教育,国立小学校,私立小学校,お受験問題'
        }
      ]
    }
  },
  data() {
    return {
      title: 'サービス'
    }
  }
}
</script>