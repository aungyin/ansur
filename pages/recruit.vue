<template>
  <main>

    <!-- HERO -->
    <section class="hero relative mb-0 md:mb-4">
      <div class="relative h-56 md:h-84 pb-1/3 md:pb-1/5">
        <img class="block md:hidden absolute h-full w-full object-cover bg-center" src="~/assets/img/recruit-sm.jpg" alt="Recruit">
        <img class="hidden md:block absolute h-full w-full object-cover bg-center" src="~/assets/img/recruit.jpg" alt="Recruit">
      </div>
      <div class=" absolute bottom-0 left-0 px-4 md:px-20 py-3 -mb-10 md:-mb-16 w-3/4 bg-gradient-to-r from-indigo-400 to-blue-400 text-gray-100 shadow-3xl">
        <h1 class=" font-light text-2xl md:text-5xl leading-none tracking-widest">RECRUIT</h1>
        <p class=" mt-1 font-thin text-base md:text-2xl tracking-widest">採用情報</p>
      </div>
    </section>

    <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto pb-10 md:pb-20 mt-16 md:mt-24">
      <!-- Links -->
      <section class="mb-10 py-3 bg-blue-100">
        <div class="flex flex-row justify-center space-x-5 md:space-x-10 text-xs md:text-base">
          <NuxtLink class="border-b hover:text-branding-light-blue border-gray-400 hover:border-branding-light-blue" to="#programming">技術職</NuxtLink>
          <span class=" text-branding-light-blue">/</span>
          <NuxtLink class="border-b hover:text-branding-light-blue border-gray-400 hover:border-branding-light-blue" to="#sales">営業職</NuxtLink>
          <span class=" text-branding-light-blue">/</span>
          <NuxtLink class="border-b hover:text-branding-light-blue border-gray-400 hover:border-branding-light-blue" to="#lecturer">IT教師職</NuxtLink>
        </div>
      </section>
  
      <!-- 技術職 -->
      <section id="programming" class="programming pt-24 -mt-24">
        <div class="pl-2 border-l-4 border-branding-light-blue">
            <h2 class=" text-2xl md:text-3xl tracking-widest">技術職</h2>
            <div class=" tracking-widest">フリー技術者 / 契約社員 / 正社員</div>
        </div>
  
        <div class=" mt-4 text-xs md:text-sm align-middle">
          <table class=" mx-auto w-full border-collapse border border-gray-200">
            <thead></thead>
            <tbody>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">採用職種</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">
                  ・プログラマー<br>
                  ・システムエンジニア<br>
                  ・ブリッジSE
                </td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">募集形態</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">フリー技術者 / 契約社員 / 正社員</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">応募資格</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">
                  <p>学歴 / 国籍 / 性別不問。</p><br>
                  <p>
                    【必須経験・知識】<br>
                    ・Java、C#、VB.NET、ASP.NET、C/C++、PHP、Salesforce、SAP、Python、Andriod、IOS（Swift等）、Javascriptのいずれかを理解し、構築できる方<br>
                    ・データベースSQLの知識
                  </p><br>
                  <p>
                    【あると望ましい経験・知識】<br>
                    ・システム開発のプロジェクトに携わり、円滑なコミュニケーションができる方<br>
                    ・中国におけるビジネス展開に関心の強い方
                  </p>
                </td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">給与待遇</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">経験・技術力を考慮し、相談の上決定いたします。</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">休日休暇</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">完全週休2日制(土・日)・祝日・年末年始・有給休暇・特別休暇</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">勤務時間</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">9:00～18:00</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">勤務地</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">東京都内及び近郊</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light text-white bg-blue-700">応募方法</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2">
                  Mail　:　info@ansurs.co.jp<br>
                  Tel　:　03-6222-8295
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
  
      <!-- 営業職 -->
      <section id="sales" class="sales pt-24 -mt-16">
        <div class="pl-2 border-l-4 border-branding-light-blue">
          <h2 class=" text-2xl md:text-3xl tracking-widest">営業職</h2>
        </div>
  
        <div class=" mt-4 text-xs md:text-sm align-middle">
          <table class=" mx-auto w-full border-collapse border border-gray-200">
            <thead></thead>
            <tbody>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">採用職種</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">営業</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">募集形態</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">契約社員 / 営業パートナー</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">応募資格</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">
                  学歴 / 国籍 / 性別不問。<br>営業経験者
                </td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">給与待遇</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">経験・技術力を考慮し、相談の上決定いたします。</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">休日休暇</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">完全週休2日制(土・日)・祝日・年末年始・有給休暇・特別休暇</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">勤務時間</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">9:00～18:00</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">勤務地</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">社内、社外</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light text-white bg-blue-700">応募方法</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2">
                  Mail　:　info@ansurs.co.jp<br>
                  Tel　:　03-6222-8295
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
  
      <!-- IT教師職 -->
      <section id="lecturer" class="lecturer pt-24 -mt-16">
        <div class="pl-2 border-l-4 border-branding-light-blue">
          <h2 class="text-2xl md:text-3xl tracking-widest">IT教師職</h2>
          <div class=" tracking-widest">※教員免許不要</div>
        </div>
  
        <div class=" mt-4 text-xs md:text-sm align-middle">
          <table class=" mx-auto w-full border-collapse border border-gray-200">
            <thead></thead>
            <tbody>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">採用職種</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">・IT教師（教員免許不要）</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">募集形態</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">フリー技術者 / 契約社員 / 正社員</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">応募資格</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">
                  <p>学歴 / 国籍 / 性別不問。</p><br>
                  <p>
                    【必須経験・知識】<br>
                    ・システム開発経験あり<br>
                    ・教師経験あり<br>
                    ・Java、Javascript、各フレームワークを理解し、構築できる方<br>
                    ・データベースSQLの知識
                  </p><br>
    
                  <p>
                    【あると望ましい経験・知識】<br>
                    ・中国籍、ミャンマー籍希望
                  </p>
                </td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">給与待遇</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">経験・技術力を考慮し、相談の上決定いたします。</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">休日休暇</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">不定期休暇、各クラス課程により</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">勤務時間</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">9:00～18:00、週末</td>
              </tr>
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light border border-gray-200 text-white bg-blue-700">勤務地</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2 border border-gray-200">東京本社</td>
              </tr>
              
              <tr>
                <th class=" px-2 md:px-10 w-24 md:w-56 lg:w-72 xl:w-96 font-light text-white bg-blue-700">応募方法</th>
                <td class=" px-2 md:px-4 lg:px-10 py-2">
                  Mail　:　info@ansurs.co.jp<br>
                  Tel　:　03-6222-8295
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>

  </main>
</template>

<style scoped>
  /* h2 {
    scroll-margin-top: 24;
  } */
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
          content: 'このページは株式会社アンスールの採用情報のページです。システムコンサルティングからソフトウェアの企画・設計・開発まで、アンスールにお任せ下さい'
        },
        {
          hid: 'keywords',
          name: 'keywords',
          content: '採用情報,システムコンサルティング,システム企画,システム開発,自社製品開発,ソフトウェア設計,ソフトウェア開発,ホームページ制作,SEO,幼児教育,国立小学校,私立小学校,お受験問題'
        }
      ]
    }
  },
  data() {
    return {
      title: '採用情報'
    }
  }
}
</script>