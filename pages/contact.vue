<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="relative h-56 md:h-84 pb-1/3 md:pb-1/5">
        <img class="block md:hidden absolute h-full w-full object-cover bg-center" src="~/assets/img/contact-sm.jpg" alt="Contact">
        <img class="hidden md:block absolute h-full w-full object-cover bg-center" src="~/assets/img/contact.jpg" alt="Contact">
      </div>
      <div class=" absolute bottom-0 left-0 px-4 md:px-20 py-3 -mb-10 md:-mb-16 w-3/4 bg-gradient-to-r from-indigo-400 to-blue-400 text-gray-100 shadow-3xl">
        <h1 class=" font-light text-2xl md:text-5xl leading-none tracking-widest">CONTACT</h1>
        <p class=" mt-1 font-extralight text-base md:text-2xl tracking-widest">お問い合わせ</p>
      </div>
    </section>

    <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto mt-16 md:mt-24 pb-12 md:pb-20">
      <!-- お問い合わせ -->
      <section class="contact">
        <div class=" text-xs md:text-sm align-middle">
          <p>
            この度は株式会社アンスールのサイトをご訪問くださいまして、誠に有難うございます。<br>
            お問い合わせにつきましては、後日、メールまたはお電話でご連絡させていただきます。
          </p>
  
          <form action="/contact-confirm" method="GET">
            <table class=" mt-8 mx-auto w-full border-collapse shadow-2xl">
              <thead></thead>
              <tbody>
                <tr>
                  <th class=" w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">お名前<span class="px-1 ml-1 text-xs font-light bg-orange-500 text-gray-100 align-baseline">必須</span></th>
                  <td class=" px-2 md:px-6 py-1 border-b border-gray-200">
                    <input required class="px-2 py-1 md:px-3 w-full bg-gray-200 rounded text-gray-800 focus:outline-none focus:border-indigo-500" type="text" name="name" v-model.trim="$v.name.$model" id="name" maxlength="48">
                    <p class="error text-red-700" v-if="$v.name.$dirty && !$v.name.required">お名前を入力してください。</p>
                    <p class="error text-red-700" v-if="$v.name.$dirty && !$v.name.minLength">お名前を2桁以上入力してください。</p>
                  </td>
                </tr>
                <tr>
                  <th class=" w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">ふりがな<span class="px-1 ml-1 text-xs font-light bg-orange-500 text-gray-100 align-baseline">必須</span></th>
                  <td class=" px-2 md:px-6 py-1 border-b border-gray-200">
                    <input required class="px-2 py-1 md:px-3 w-full bg-gray-200 rounded text-gray-800 focus:outline-none focus:border-indigo-500" type="text" name="furigana" v-model.trim="$v.furigana.$model" id="furigana" maxlength="48">
                    <p class="error text-red-700" v-if="$v.furigana.$dirty && !$v.furigana.required">ふりがなを入力してください。</p>
                    <p class="error text-red-700" v-if="$v.furigana.$dirty && !$v.furigana.minLength">ふりがなを2桁以上入力してください。</p>
                  </td>
                </tr>
                <tr>
                  <th class=" w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">御社名</th>
                  <td class=" px-2 md:px-6 py-1 border-b border-gray-200">
                    <input class="px-2 py-1 md:px-3 w-full bg-gray-200 rounded text-gray-800 focus:outline-none focus:border-indigo-500" type="text" name="companyName" id="company-name" maxlength="255">
                  </td>
                </tr>
                <tr>
                  <th class=" w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">部署名</th>
                  <td class=" px-2 md:px-6 py-1 border-b border-gray-200">
                    <input class="px-2 py-1 md:px-3 w-full bg-gray-200 rounded text-gray-800 focus:outline-none focus:border-indigo-500" type="text" name="departmentName" id="department-name" maxlength="48">
                  </td>
                </tr>
                <tr>
                  <th class=" w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">電話番号</th>
                  <td class=" px-2 md:px-6 py-1 border-b border-gray-200">
                    <input class="px-2 py-1 md:px-3 w-full bg-gray-200 rounded text-gray-800 focus:outline-none focus:border-indigo-500" type="tel" name="phoneNum" v-model.trim="$v.phoneNum.$model" id="phone-num" maxlength="255">
                    <p class="error text-red-700" v-if="$v.phoneNum.$dirty && !$v.phoneNum.numeric">電話番号を入力してください。</p>
                    <p class="error text-red-700" v-if="$v.phoneNum.$dirty && !$v.phoneNum.minLength">10桁か11桁の電話番号を入力してください。</p>
                    <p class="error text-red-700" v-if="$v.phoneNum.$dirty && !$v.phoneNum.maxLength">10桁か11桁の電話番号を入力してください。</p>
                  </td>
                </tr>
                <tr>
                  <th class=" w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">メールアドレス<br class="block lg:hidden"><span class="px-1 ml-1 text-xs font-light bg-orange-500 text-gray-100 align-baseline">必須</span></th>
                  <td class=" px-2 md:px-6 py-1 border-b border-gray-200">
                    <input required class="px-2 py-1 md:px-3 w-full bg-gray-200 rounded text-gray-800 focus:outline-none focus:border-indigo-500" 
                      type="email" 
                      title="有効なメールアドレスを入力してください" 
                      name="email" v-model.trim="$v.email.$model" 
                      id="email" 
                      maxlength="255">
                      <p class="error text-red-700" v-if="$v.email.$dirty && !$v.email.required">メールアドレスを入力してください。</p>
                    <p class="error text-red-700" v-if="$v.email.$dirty && !$v.email.email">メールアドレスを正しく入力してください。</p>
                  </td>
                </tr>
                <tr>
                  <th class=" w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light bg-blue-700">お問い合わせ内容<br class="block lg:hidden"><span class="px-1 ml-1 text-xs font-light bg-orange-500 text-gray-100 align-baseline">必須</span></th>
                  <td class=" px-2 md:px-6 py-1 md:py-6">
                    <div class="flex items-center justify-left">
                      <input required class="h-4 w-4 md:h-6 md:w-6" type="radio" name="inquryChoice" v-model.trim="$v.inquryChoice.$model" value="ビジネスパートナー" id="business-partner" checked>
                      <label class="ml-2" for="business-partner">ビジネスパートナー</label>
                    </div>
                    <div class="mt-2 flex items-center justify-left">
                      <input required class="mt-2 h-4 w-4 md:h-6 md:w-6" type="radio" name="inquryChoice" v-model.trim="$v.inquryChoice.$model" value="製品・サービス" id="product-service">
                      <label class="ml-2" for="product-service">製品・サービス</label>
                    </div>
                    <div class="mt-2 flex items-center justify-left">
                      <input required class="mt-2 h-4 w-4 md:h-6 md:w-6" type="radio" name="inquryChoice" v-model.trim="$v.inquryChoice.$model" value="その他" id="others">
                      <label class="ml-2" for="others">その他</label>
                    </div>
                    <textarea required class="mt-2 md:mt-4 px-3 py-4 w-full bg-gray-200 rounded text-gray-800 focus:outline-none focus:border-indigo-500" 
                      name="inquryDetail" v-model.trim="$v.inquryDetail.$model" id="inqury-detail" cols="72" rows="5" maxlength="600"></textarea>

                    <p class="error text-red-700" v-if="$v.inquryChoice.$dirty && !$v.inquryChoice.required">お問い合わせ内容を入力してください。</p>
                    <p class="error text-red-700" v-if="$v.inquryDetail.$dirty && !$v.inquryDetail.required">お問い合わせ内容を入力してください。</p>
                    <p class="error text-red-700" v-if="$v.inquryDetail.$dirty && !$v.inquryDetail.minLength">お問い合わせ内容を10桁以上入力してください。</p>
                  </td>
                </tr>
              </tbody>
            </table>
  
            <div>
              <textarea readonly class=" mt-10 py-4 border w-full text-gray-800 text-xs focus:outline-none focus:border-indigo-500" name="" id="" cols="72" rows="10">
              このフォームで頂戴する個人情報の取り扱いについて
  
              1. 事業者の氏名又は名称
                    　株式会社アンスール
                    　
              2. 個人情報保護管理者（若しくはその代理人）の氏名又は職名、
              　　所属及び連絡先
                    　管理者職名：澤田 旺
                    　役職：代表取締役
                    　連絡先：TEL：03-6222-8295
                    　
              3. 個人情報の利用目的
                    ・お問い合わせ対応（本人への連絡を含む）のため
                    
              4. 個人情報取扱いの委託　
                  当社は事業運営上、前項利用目的の範囲に限って個人情報を外部に委託することがあります。この場合、個人情報保護水準の高い委託先を選定し、個人　情報の適正管理・機密保持についての契約を交わし、適切な管理を実施させます。
                  
              5. 個人情報の開示等の請求
                  ご本人様は、当社に対してご自身の個人情報の開示等（利用目的の通知、開示、内容の訂正・追加・削除、利用の停止または消去、第三者への提供の停止）に関して、下記の当社問合わせ窓口に申し出ることができます。その際、当社はお客様ご本人を確認させていただいたうえで、合理的な期間内に対応いたします。
                  【お問合せ窓口】
              　　　　〒103-0006　東京都中央区日本橋富沢町3-18　サンウォールビル4階
              　　　　TEL：03-6222-8295　　FAX：03-6222-8296　　MAIL：info@ansurs.co.jp
              　　　　受付時間：9:00～18:00  （土・日曜日、祝日、年末年始は除く）
  
              6. 個人情報を提供されることの任意性について　
                  ご本人様が当社に個人情報を提供されるかどうかは任意によるものです。 ただし、必要な項目をいただけない場合、適切な対応ができない場合があります。
              </textarea>
              <div class="mt-4 flex items-center justify-center">
                <input v-model="isActive" type="checkbox" name="agreement" id="agreement" class="h-4 w-4 md:h-6 md:w-6 rounded border border-gray-200">
                <label class="ml-2" for="agreement">個人情報の取り扱いについて同意する</label>
              </div>
              <div class="mt-10 md:mt-16 text-center">
                <input :disabled="!isActive" class="px-10 py-4 cursor-pointer  rounded" :class="isActive ? 'bg-blue-medium text-gray-100 hover:bg-blue-dark' : 'bg-gray-400'" type="submit" id="confirm" value="内容を確認する">
              </div>
            </div>
          </form>
        </div>
  
      </section>
    </div>

  </main>
</template>

<style scoped>

</style>

<script>
import { required, minLength, maxLength, email, numeric } from 'vuelidate/lib/validators'

export default {
  data() {
    return {
      title: 'お問い合わせ',
      isActive: false,
      name: '',
      furigana: '',
      companyName: '',
      departmentName: '',
      phoneNum: '',
      email: '',
      inquryChoice: '',
      inquryDetail: '',
    }
  },
  validations: {
    name: {
      required,
      minLength: minLength(2)
    },
    furigana: {
      required,
      minLength: minLength(2)
    },
    phoneNum: {
      numeric,
      minLength: minLength(10),
      maxLength: maxLength(11)
    },
    email: {
      required,
      email
    },
    inquryChoice: {
      required
    },
    inquryDetail: {
      required,
      minLength: minLength(10),
    }
  },
  methods: {
  },
  computed: {
    toggleButton: function(){
    	return !this.isActive;
    }
  },
  head() {
    return {
      title: this.title,
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: 'このページは株式会社アンスールのお問い合わせのページです。システムコンサルティングからソフトウェアの企画・設計・開発まで、アンスールにお任せ下さい'
        },
        {
          hid: 'keywords',
          name: 'keywords',
          content: 'お問い合わせ,システムコンサルティング,システム企画,システム開発,自社製品開発,ソフトウェア設計,ソフトウェア開発,ホームページ制作,SEO,幼児教育,国立小学校,私立小学校,お受験問題'
        }
      ]
    }
  }
}
</script>