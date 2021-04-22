<template>
  <main>

    <!-- HERO -->
    <section class="hero relative">
      <div class="relative h-56 md:h-84 pb-1/3 md:pb-1/5">
        <img class="block md:hidden absolute h-full w-full object-cover bg-center" src="~/assets/img/contact-sm.jpg" alt="Contact">
        <img class="hidden md:block absolute h-full w-full object-cover bg-center" src="~/assets/img/contact.jpg" alt="Contact">
      </div>
      <div class=" absolute bottom-0 left-0 px-4 md:px-20 py-3 -mb-10 md:-mb-16 w-3/4 bg-gradient-to-r from-indigo-400 to-blue-400 text-gray-100 shadow-3xl">
        <h1 class=" font-light text-2xl md:text-5xl leading-none tracking-widest">COMPLETE</h1>
        <p class=" mt-1 font-extralight text-base md:text-2xl tracking-widest">お問い合わせ完了画面</p>
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