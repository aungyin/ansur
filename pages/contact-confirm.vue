<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="comm-hero-container">
        <img class="block md:hidden comm-hero-img" src="~/assets/img/contact-sm.jpg" alt="Contact">
        <img class="hidden md:block comm-hero-img" src="~/assets/img/contact.jpg" alt="Contact">
      </div>
      <div class="comm-hero-bar">
        <h1 class="comm-hero-title">CONFIRM</h1>
        <p class="comm-hero-subtitle">お問い合わせ内容確認画面</p>
      </div>
    </section>

    <!-- お問い合わせ内容確認 -->
    <div class="confirm-container">
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
              <table class=" confirm-table">
                <tbody>
                  <tr>
                    <th class=" confirm-table__header">お名前</th>
                    <td class=" confirm-table__data">{{ name }}</td>
                    <input type="hidden" name="お名前" v-model="name">
                  </tr>
                  <tr>
                    <th class=" confirm-table__header">ふりがな</th>
                    <td class=" confirm-table__data">{{ furigana }}</td>
                    <input type="hidden" name="ふりがな" v-model="furigana">
                  </tr>
                  <tr>
                    <th class=" confirm-table__header">御社名</th>
                    <td class=" confirm-table__data">{{ companyName }}</td>
                    <input type="hidden" name="御社名" v-model="companyName">
                  </tr>
                  <tr>
                    <th class=" confirm-table__header">部署名</th>
                    <td class=" confirm-table__data">{{ departmentName }}</td>
                    <input type="hidden" name="部署名" v-model="departmentName">
                  </tr>
                  <tr>
                    <th class=" confirm-table__header">電話番号</th>
                    <td class=" confirm-table__data">{{ phoneNum }}</td>
                    <input type="hidden" name="電話番号" v-model="phoneNum">
                  </tr>
                  <tr>
                    <th class=" confirm-table__header">メールアドレス</th>
                    <td class=" confirm-table__data">{{ email }}</td>
                    <input type="hidden" name="メールアドレス" v-model="email">
                  </tr>
                  <tr>
                    <th class=" confirm-table__header">お問合わせ対象</th>
                    <td class=" confirm-table__data">{{ inquryChoice }}</td>
                    <input type="hidden" name="お問合わせ対象" v-model="inquryChoice">
                </tr>
                  <tr>
                    <th class=" confirm-table__header">お問い合わせ内容</th>
                    <td class=" py-2 px-2 md:px-4 lg:px-10 whitespace-pre-line">{{ inquryDetail }}</td>
                    <input type="hidden" name="お問い合わせ" v-model="inquryDetail">
                  </tr>
                </tbody>
              </table>
  
              <div class="confirm-cta">
                  <a class="confirm-cta__back" id="back" @click="$router.go(-1)" value="前画面に戻る">前画面に戻る</a>
                  <input class="confirm-cta__submit" type="submit" id="send" value="送信する">
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>

  </main>
</template>

<style scoped>

  .confirm-container {
    @apply px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto mt-16 md:mt-24 pb-12 md:pb-20;
  }

  .confirm-table {
    @apply mx-auto w-full border-collapse shadow-2xl;
  }
  .confirm-table__header {
    @apply py-2 w-32 md:w-56 lg:w-72 xl:w-96 text-white font-light border-b border-gray-200 bg-blue-700;
  }
  .confirm-table__data {
    @apply px-2 md:px-4 lg:px-10 border-b border-gray-200;
  }

  .confirm-cta {
    @apply mt-10 md:mt-16 text-center;
  }
  .confirm-cta__back {
    @apply px-10 py-4 mx-2 bg-blue-light text-gray-100 rounded cursor-pointer;
  }
  .confirm-cta__submit {
    @apply px-10 py-4 mx-2 bg-orange-500 text-gray-100 rounded cursor-pointer;
  }

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

    // メール送信
    async sendMail() {
      this.submitting = true
      this.error = false

      const data = {
        name: this.name,
        furigana: this.furigana,
        companyName: this.companyName,
        departmentName: this.departmentName,
        phoneNum: this.phoneNum,
        email: this.email,
        inquryChoice: this.inquryChoice,
        inquryDetail: this.inquryDetail,
      }

      try {
        await this.$axios.$post('./mail.php', data);
        this.submitting = false
        this.isSubmitted = true
        await new Promise(resolve => setTimeout(resolve, 1000))
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