<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="relative h-56 md:h-84 pb-1/3 md:pb-1/5">
        <img class="absolute h-full w-full object-cover bg-center" src="~/assets/img/company.jpg" alt="Company">
      </div>
      <div class=" absolute bottom-0 left-0 px-4 md:px-20 py-3 -mb-10 md:-mb-16 w-3/4 bg-gradient-to-r from-indigo-400 to-blue-400 text-gray-100 shadow-3xl">
        <h1 class=" font-light text-2xl md:text-5xl leading-none tracking-widest">COMPANY</h1>
        <p class=" mt-1 font-extralight text-base md:text-2xl tracking-widest">会社概要</p>
      </div>
    </section>

    <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto">
      <!-- 企業情報 -->
      <section class="overview py-10 md:p-20">
        <div class=" mt-4 md:mt-10 text-xs md:text-sm align-middle">
          <table class="table-fixed w-full mx-auto border-collapse border border-gray-200">
            <thead></thead>
            <tbody>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">社名</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">株式会社アンスール</td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">英語表記</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">Ansur Inc.</td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">設立</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">2012年8月</td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">資本金</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">3100万円</td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">役員</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">代表取締役  澤田 旺</td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">東京事務所</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">〒103-0006　東京都中央区日本橋富沢町3-18<br>サンウォールビル　4階 　<NuxtLink class="border-b hover:text-blue-medium border-gray-400 hover:border-blue-medium" to="#access-tokyo">＜アクセス＞</NuxtLink></td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">大阪事務所</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">〒541-0053　大阪市中央区本町4丁目2番12号<br>野村不動産御堂筋本町ビル　8階 　<NuxtLink class="border-b hover:text-blue-medium border-gray-400 hover:border-blue-medium" to="#access-osaka">＜アクセス＞</NuxtLink></td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">事業認可</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">
                  一般労働者派遣事業：派13-314658<br>
                  有料職業紹介番号：13-ユ-311868
                </td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">プライバシーマーク</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2 flex flex-wrap items-center">
                  <img class="h-auto w-20" src="~/assets/img/privacy_mark.jpg" alt="Privacy Mark">
                  <div class="mt-2 ml-2">プライバシーマーク番号：17003937</div>
                </td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">加盟団体</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">
                  一般社団法人日本情報システム・ユーザー協会（JUAS）<br>
                  IoT推進コンソーシアム
                </td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">事業概要</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">
                  ・ソフトウェア企画、開発、サポート支援、保守<br>
                  ・インフラ設計構築・保守サービス<br>
                  ・Salesforce導入開発支援、人材育成業務<br>
                  ・ホームページの制作、更新、保守、SEO<br>
                  ・小学校受験に関するシステム上での情報提供、運営<br>
                  <!-- ・小学校受験に関する情報誌発行、教室運営<br> -->
                  ・海外進出コンサルティング業務
                </td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">決算期</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">7月</td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">取引銀行</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">
                  みずほ銀行<br>
                  三菱東京UFJ銀行
                </td>
              </tr>
              <tr>
                <th class="border border-gray-200 bg-blue-700 text-white text-center font-light w-1/3">お問い合わせ先</th>
                <td class="border border-gray-200 pl-2 md:pl-10 py-2">TEL：03-6222-8295　/　FAX：03-6222-8296<br>または <NuxtLink class="border-b hover:text-branding-light-blue border-gray-400 hover:border-branding-light-blue" to="/contact">お問い合わせ</NuxtLink></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
  
      <!-- アクセス -->
      <section class="access mb-10 md:mb-20">
        <!-- 住所 -->
        <div class="pl-2 border-l-4 border-blue-medium">
          <h2 class=" text-2xl md:text-3xl tracking-widest">ACCESS</h2>
          <div class="tracking-widest">アクセス</div>
        </div>
        <div id="access-tokyo" class="leading-loose text-xs md:text-sm pt-32 -mt-32 md:pt-40 md:-mt-40">
          <p class="mt-6">■東京本社所在地</p>
          <p class="pl-4">・東京都中央区日本橋富沢町3-18　サンウォールビル　4階</p>
          <p>■交通アクセス</p>
          <p class="pl-4">
            ・東京メトロ日比谷線｜都営浅草線：人形町駅・A4出口・徒歩３分<br>
            ・都営新宿線：浜町駅・A1出口・徒歩７分<br>
            ・都営新宿線：馬喰横山駅・A2出口・徒歩７分<br>
            ・東京メトロ半蔵門線：水天宮前駅・7番出口・徒歩８分
          </p>
        </div>
        <!-- Google Map -->
        <div class="google-map mt-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.56803695979!2d139.78085231449907!3d35.68763683722958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188951fd4aeffd%3A0x936199132c35050f!2z44CSMTAzLTAwMDYg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL5a-M5rKi55S677yT4oiS77yR77yYIOOCteODs-OCpuOCqeODvOODq-ODk-ODqzTpmo4!5e0!3m2!1sja!2sjp!4v1557149451896!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
  
        <hr class="my-6">
        <div id="access-osaka" class="leading-loose text-xs md:text-sm pt-20 -mt-20 md:pt-24 md:-mt-24">
          <p>■大阪営業所所在地</p>
          <p class="pl-4">・大阪市中央区本町4丁目2番12号　野村不動産御堂筋本町ビル　8階</p>
          <p>■交通アクセス</p>
          <p class="pl-4">・大阪メトロ御堂筋線｜中央線｜四つ橋線：本町駅・徒歩1分</p>
        </div>
        <div class="google-map mt-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.8639233622807!2d135.4980320499214!3d34.6833836915588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e71d8c225e97%3A0x3a692373bf543a7f!2z44CSNTQxLTAwNTMg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy65pys55S677yU5LiB55uu77yS4oiS77yR77ySIOadseiKneWkp-mYquODk-ODqzjpmo4!5e0!3m2!1sja!2sjp!4v1558017394259!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </section>
    </div>

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
          content: 'このページは株式会社アンスールの会社概要のページです。システムコンサルティングからソフトウェアの企画・設計・開発まで、アンスールにお任せ下さい'
        },
        {
          hid: 'keywords',
          name: 'keywords',
          content: '会社概要,システムコンサルティング,システム企画,システム開発,自社製品開発,ソフトウェア設計,ソフトウェア開発,ホームページ制作,SEO,幼児教育,国立小学校,私立小学校,お受験問題'
        }
      ]
    }
  },
  data() {
    return {
      title: '会社概要'
    }
  }
}
</script>