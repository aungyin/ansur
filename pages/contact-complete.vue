<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="hero-container">
        <img class="block md:hidden hero-img" src="~/assets/img/contact-sm.jpg" alt="Contact">
        <img class="hidden md:block hero-img" src="~/assets/img/contact.jpg" alt="Contact">
      </div>
      <div class="hero-bar">
        <h1 class="hero-title">COMPLETE</h1>
        <p class="hero-subtitle">お問い合わせ完了画面</p>
      </div>
    </section>

     <!-- お問い合わせ完了 -->
    <div class="px-2 md:px-20 max-w-screen-xl mx-auto mt-16 md:mt-24 pb-12 md:pb-20">
      <section class="content">
        <h2 class="text-xl md:text-3xl bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-500 leading-loose">お問い合わせが完了しました。</h2>
        <div class="mt-4 tracking-wider text-xs md:text-sm">
          <p>お問い合わせいただきありがとうございました。<br>
          お問い合わせを受け付けました。</p>
          <p class="my-3">折り返し、担当者よりご連絡いたしますので、<br>
          恐れ入りますが、しばらくお待ちください。</p>
          <NuxtLink class=" text-blue-medium hover:underline" to="/">ホーム</NuxtLink>に戻る
        </div>
      </section>
    </div>
  </main>
</template>

<style>
  
</style>
<script>
export default {
  
}
</script>