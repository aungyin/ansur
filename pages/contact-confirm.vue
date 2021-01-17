<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="relative h-56 md:h-84 pb-1/3 md:pb-1/5">
        <img class="block md:hidden absolute h-full w-full object-cover bg-center" src="~/assets/img/contact-sm.jpg" alt="Contact">
        <img class="hidden md:block absolute h-full w-full object-cover bg-center" src="~/assets/img/contact.jpg" alt="Contact">
      </div>
      <div class=" absolute bottom-0 left-0 px-4 md:px-20 py-3 -mb-10 md:-mb-16 w-3/4 bg-gradient-to-r from-indigo-400 to-blue-400 text-gray-100 shadow-3xl">
        <h1 class=" font-light text-2xl md:text-5xl leading-none tracking-widest">CONFIRM</h1>
        <p class=" mt-1 font-thin text-base md:text-2xl tracking-widest">お問い合わせ内容確認画面</p>
      </div>
    </section>

    <!-- お問い合わせ内容確認 -->
    <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto mt-16 md:mt-24 pb-12 md:pb-20">
      <section class="contact">
        <div class="text-xs md:text-sm align-middle">
          <div
            v-if="error"
            class="text-2xl text-red-700 leading-loose">
            送信処理でエラーが発生しました。
          </div>
          <p>以下の内容で間違いがなければ、「送信する」ボタンを押してください。</p>
  
          <div class=" mt-4 md:mt-8">
            <form @submit.prevent="submitForm">
              <table class=" mx-auto w-full border-collapse shadow-2xl">
                <tbody>
                  <tr>
                    <th class=" py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-100 bg-blue-700">お名前</th>
                    <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200">{{ name }}</td>
                    <input type="hidden" name="お名前" v-model="name">
                  </tr>
                  <tr>
                    <th class=" py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-100 bg-blue-700">ふりがな</th>
                    <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200">{{ furigana }}</td>
                    <input type="hidden" name="ふりがな" v-model="furigana">
                  </tr>
                  <tr>
                    <th class=" py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-100 bg-blue-700">御社名</th>
                    <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200">{{ companyName }}</td>
                    <input type="hidden" name="御社名" v-model="companyName">
                  </tr>
                  <tr>
                    <th class=" py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">部署名</th>
                    <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200">{{ departmentName }}</td>
                    <input type="hidden" name="部署名" v-model="departmentName">
                  </tr>
                  <tr>
                    <th class=" py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">電話番号</th>
                    <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200">{{ phoneNum }}</td>
                    <input type="hidden" name="電話番号" v-model="phoneNum">
                  </tr>
                  <tr>
                    <th class=" py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700">メールアドレス</th>
                    <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200">{{ email }}</td>
                    <input type="hidden" name="メールアドレス" v-model="email">
                  </tr>
                  <tr>
                    <th class=" py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b bg-blue-700">お問合わせ対象</th>
                    <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200">{{ inquryChoice }}</td>
                    <input type="hidden" name="お問合わせ対象" v-model="inquryChoice">
                </tr>
                  <tr>
                    <th class=" py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light bg-blue-700">お問い合わせ内容</th>
                    <td class=" py-2 px-2 md:px-4 lg:px-10 whitespace-pre-line">{{ inquryDetail }}</td>
                    <input type="hidden" name="お問い合わせ" v-model="inquryDetail">
                  </tr>
                </tbody>
              </table>
  
              <div class="mt-10 md:mt-16 text-center">
                  <a class="px-10 py-4 mx-2 bg-branding-lighter-blue text-gray-100 rounded cursor-pointer" id="back" @click="$router.go(-1)" value="前画面に戻る">前画面に戻る</a>
                  <input class="px-10 py-4 mx-2 bg-orange-500 text-gray-100 rounded cursor-pointer" type="submit" id="send" value="送信する">
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>

  </main>
</template>

<style scoped>

</style>

<script>
export default {
  mounted() {
    console.log(this.$route.query)
  },
  data() {
    return {
      title: 'お問い合わせ内容確認画面',
      name: this.$route.query.name,
      furigana: this.$route.query.furigana,
      companyName: this.$route.query['companyName'],
      departmentName: this.$route.query['departmentName'],
      phoneNum: this.$route.query['phoneNum'],
      email: this.$route.query.email,
      inquryChoice: this.$route.query['inquryChoice'],
      inquryDetail: this.$route.query['inquryDetail'],
      submitting: false,
      isSubmitted: false,
      error: false
    }
  },
  methods: {
    submitForm () {
      this.sendMail()
    },
    async sendMail() {
      this.submitting = true
      this.error = false

      const subject = [this.inquryChoice, 'のお問い合わせ']
      const text = ['=========================================\n',
                    'お名前', ':', this.name, '\n',
                    'ふりがな', ':', this.furigana, '\n',
                    '御社名', ':', this.companyName, '\n',
                    '部署名', ':', this.departmentName, '\n',
                    '電話番号', ':', this.phoneNum, '\n',
                    'メールアドレス', ':', this.email, '\n',
                    '=========================================\n\n',
                    '■お問い合わせ内容', '\n\n', this.inquryDetail]

      try {
        await this.$axios.$post('', {
          email: this.email,
          subject: "".concat(...subject),
          text: "".concat(...text)
        })
        this.submitting = false
        this.isSubmitted = true
        await new Promise(resolve => setTimeout(resolve, 2000))
        window.location.href = "/contact-complete"
        } catch (e) {
          this.submitting = false
          this.error = true
          console.error(e)
        }
    }
  },
  head() {
    return {
      title: this.title,
      meta: [
        {
          hid: 'description',
          name: 'description',
          content: 'このページは株式会社アンスールのお問い合わせ内容確認のページです。システムコンサルティングからソフトウェアの企画・設計・開発まで、アンスールにお任せ下さい'
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