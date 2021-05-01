<template>
  
  <!-- FOOTER -->
  <footer class=" bg-blue-700 text-gray-100">

    <div class="px-2 md:px-10 max-w-screen-lg xl:max-w-screen-xl mx-auto py-12 flex items-start md:flex-row md:flex-nowrap flex-wrap flex-col">

      <!-- Company Info -->
      <div class="md:w-2/4 lg:w-1/3 flex-shrink-0 pl-4 md:pr-10 md:mx-0 text-left text-xs md:border-r md:border-gray-500">
        <div>
          <p class="text-2xl lg:text-4xl text-blue-100 tracking-wider leading-none">Ansur</p>
          <p class="font-light">株式会社アンスール</p>
        </div>
        <address class=" sm:mb-4 mb-0 not-italic">
          <div class="font-light">
            <div class="mt-4">
              <p class="text-sm">東京事業所</p>
              <p class="px-4 md:pl-4 md:pr-0 mt-2 leading-tight">〒103-0006　東京都中央区日本橋富沢町3-18　サンウォールビル　4階</p>
            </div>
            <div class="mt-4">
              <p class="text-sm">大阪事業所</p>
              <p class="px-4 md:pl-4 md:pr-0 mt-2 leading-tight">〒541-0053　大阪市中央区本町4丁目2番12号　野村不動産御堂筋本町ビル　8階</p>
            </div>
          </div>
          <div class="mt-2">
            <span class="">TEL.</span><span> 030-6222-8295</span>
          </div>
        </address>

        <!-- PRIVACY MARK -->
        <div class="privacy-mark hidden lg:hidden pt-4 md:flex items-center justify-center md:justify-start">
          <div class="bg-gray-100 mr-2 lg:mr-4"><img class="h-auto w-20 mx-auto md:mx-0" src="~/assets/img/privacy_mark.jpg" alt="Privacy Mark"></div>
          <div class=" mt-2">
            一般派遣番号：派13-314658<br>
            有料職業紹介番号：13-ユ-311868<br>
            プライバシーマーク番号：17003937
          </div>
        </div><!-- ./PRIVACY MARK -->
      </div><!-- ./Company Info -->

      <div class="mt-4 md:mt-0 border-t border-gray-100 md:border-none w-full">
        <!-- Site Map -->
        <div class="flex-grow flex flex-wrap md:pl-8 mt-4 md:mt-0 text-left font-light text-sm">
          <div class="lg:w-1/5 md:w-1/2 w-1/2 px-4">
            <h2 class="title-font font-medium tracking-widest md:border-b md:border-gray-100 text-sm mb-1">サービス</h2>
            <nav class="list-none mb-4 sm:mb-2">
              <ul>
                <li class=" leading-relexed">
                  <NuxtLink to="/service#ses" class="text-xs hover:text-gray-400">SES事業</NuxtLink>
                </li>
                <li class=" leading-relexed">
                  <NuxtLink to="/service#contracted-development" class="text-xs hover:text-gray-400">受託開発</NuxtLink>
                </li>
                <li class=" leading-relexed">
                  <NuxtLink to="/service#offshore" class="text-xs hover:text-gray-400">Webサイト制作</NuxtLink>
                </li>
              </ul>
            </nav>
          </div>
          <div class="lg:w-1/5 md:w-1/2 w-1/2 px-4">
            <h2 class="title-font font-medium tracking-widest md:border-b md:border-gray-100 text-sm mb-1">製品</h2>
            <nav class="list-none mb-4 sm:mb-2">
              <ul>
                <li class=" leading-relexed">
                  <NuxtLink to="/product" class="text-xs hover:text-gray-400">小学校受験サービス</NuxtLink>
                </li>
              </ul>
            </nav>
          </div>
          <div class="lg:w-1/5 md:w-1/2 w-1/2 px-4">
            <h2 class="title-font font-medium tracking-widest md:border-b md:border-gray-100 text-sm mb-1">会社情報</h2>
            <nav class="list-none mb-4 sm:mb-2">
              <ul>
                <li class=" leading-relexed">
                  <NuxtLink to="/company" class="text-xs hover:text-gray-400">会社概要</NuxtLink>
                </li>
                <li class=" leading-relexed">
                  <NuxtLink to="/philosophy" class="text-xs hover:text-gray-400">経営理念</NuxtLink>
                </li>
                <li class=" leading-relexed">
                  <NuxtLink to="/organization" class="text-xs hover:text-gray-400">組織構成</NuxtLink>
                </li>
              </ul>
            </nav>
          </div>
          <div class="lg:w-1/5 md:w-1/2 w-1/2 px-4">
            <h2 class="title-font font-medium tracking-widest md:border-b md:border-gray-100 text-sm mb-1">採用情報</h2>
            <nav class="list-none mb-4 sm:mb-2">
              <ul>
                <li class=" leading-relexed">
                  <NuxtLink to="/recruit#programming" class="text-xs hover:text-gray-400">技術職(正社員 / 契約社員)</NuxtLink>
                </li>
                <li class=" leading-relexed">
                  <NuxtLink to="/recruit#self-employed" class="text-xs hover:text-gray-400">技術職(個人事業主)</NuxtLink>
                </li>
                <li class=" leading-relexed">
                  <NuxtLink to="/recruit#sales" class="text-xs hover:text-gray-400">営業</NuxtLink>
                </li>
              </ul>
            </nav>
          </div>
          <div class="lg:w-1/5 md:w-1/2 w-1/2 pl-4">
            <h2 class="title-font font-medium tracking-widest md:border-b md:border-gray-100 text-sm mb-1">その他</h2>
            <nav class="list-none mb-4 sm:mb-2">
              <ul>
                <li class=" leading-relexed">
                  <NuxtLink to="/contact" class="text-xs hover:text-gray-400">お問い合わせ</NuxtLink>
                </li>
                <li class=" leading-relexed">
                  <NuxtLink to="/privacy" class="text-xs hover:text-gray-400">プライバシー</NuxtLink>
                </li>
                <li class=" leading-relexed">
                  <NuxtLink to="/privacy-policy" class="text-xs hover:text-gray-400">個人情報保護方針</NuxtLink>
                </li>
              </ul>
            </nav>
          </div>
        </div><!-- .site map -->

        <!-- PRIVACY MARK -->
        <div class="privacy-mark md:hidden lg:flex pl-4 md:pl-12 mt-2 md:mt-10 flex items-center justify-start">
          <div class="bg-gray-100 mr-2 lg:mr-4"><img class="h-auto w-20 mx-auto md:mx-0" src="~/assets/img/privacy_mark.jpg" alt="Privacy Mark"></div>
          <div class=" mt-2 text-xs">
            一般派遣番号：派13-314658<br>
            有料職業紹介番号：13-ユ-311868<br>
            プライバシーマーク番号：17003937
          </div>
        </div><!-- PRIVACY MARK -->
      </div>

    </div>

    <!-- PRIVACY MARK -->
    <!-- <div class="privacy-mark md:px-20 py-4 flex flex-wrap justify-center md:justify-start">
      <div class="bg-gray-100"><img class="h-auto w-20 mx-auto md:mx-0" src="~/assets/img/privacy_mark.jpg" alt="Privacy Mark"></div>
      <div class=" ml-4 mt-2 text-sm">
        一般派遣番号：派13-314658<br>
        有料職業紹介番号：13-ユ-311868<br>
        プライバシーマーク番号：17003937
      </div>
    </div> -->


    <!-- Copyright -->
    <div class="bg-blue-900 mx-auto py-6 text-center">
      <p class="text-gray-300 text-sm">Copyright© 2020 株式会社アンスール<br class="md:hidden"> All Rights Reserved.</p>
    </div>
  </footer>

</template>