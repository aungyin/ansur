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
        <p class=" mt-1 font-thin text-base md:text-2xl tracking-widest">お問い合わせ</p>
      </div>
    </section>

    <!-- お問い合わせ -->
    <section class="contact px-4 pt-10 md:pb-20 md:p-20">
      <div class="pl-2 border-l-4 border-branding-light-blue">
          <h2 class=" text-2xl md:text-3xl tracking-widest">CONTACT</h2>
          <div class=" tracking-widest">お問い合わせ-確認画面</div>
      </div>

      <div class=" mt-4 md:mt-10 text-xs md:text-base lg:text-xl align-middle">
        <p>
          以下の内容で間違いがなければ、「送信する」ボタンを押してください。
        </p>

        <div class=" mt-4 md:mt-10 text-xs md:text-base lg:text-xl align-middle">
          <form action="mail.php" method="POST">
            <table class=" mx-auto w-full border-collapse shadow-2xl">
              <tbody>
                <tr>
                  <th class=" px-2 md:px-10 py-2 md:py-6 w-32 md:w-56 lg:w-72 xl:w-96 text-left border-b border-gray-100 bg-gray-300">お名前</th>
                  <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200"></td>
                </tr>
                <tr>
                  <th class=" px-2 md:px-10 py-2 md:py-6 w-32 md:w-56 lg:w-72 xl:w-96 text-left border-b border-gray-100 bg-gray-300">ふりがな</th>
                  <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200"></td>
                </tr>
                <tr>
                  <th class=" px-2 md:px-10 py-2 md:py-6 w-32 md:w-56 lg:w-72 xl:w-96 text-left border-b border-gray-100 bg-gray-300">御社名</th>
                  <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200"></td>
                </tr>
                <tr>
                  <th class=" px-2 md:px-10 py-2 md:py-6 w-32 md:w-56 lg:w-72 xl:w-96 text-left border-b border-gray-200 bg-gray-300">部署名</th>
                  <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200"></td>
                </tr>
                <tr>
                  <th class=" px-2 md:px-10 py-2 md:py-6 w-32 md:w-56 lg:w-72 xl:w-96 text-left border-b border-gray-200 bg-gray-300">電話番号</th>
                  <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200"></td>
                </tr>
                <tr>
                  <th class=" px-2 md:px-10 py-2 md:py-6 w-32 md:w-56 lg:w-72 xl:w-96 text-left border-b border-gray-200 bg-gray-300">メールアドレス</th>
                  <td class=" px-2 md:px-4 lg:px-10 border-b border-gray-200"></td>
                </tr>
                <tr>
                  <th class=" px-2 md:px-10 py-2 md:py-6 w-32 md:w-56 lg:w-72 xl:w-96 text-left bg-gray-300">お問い合わせ内容</th>
                  <td class=" px-2 md:px-4 lg:px-10"></td>
                </tr>
              </tbody>
            </table>

            <div class="my-10 md:mt-16 text-center">
                <input class="px-10 py-4 mx-2 bg-teal-400 text-gray-100 rounded" type="submit" id="send" disabled="" value="送信する">
                <input class="px-10 py-4 mx-2 bg-teal-400 text-gray-100 rounded" type="submit" id="back" disabled="" value="前画面に戻る">
            </div>
          </form>
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