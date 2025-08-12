
<?php 
session_start();
$_SESSION['header']="yes";
get_header();
?>
  <div id="page" class="site">
    <main id="main" class="site-main">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_title( '<h2>', '</h2>' );
          the_content();
        }
      } else {
        echo '<p>No content found.</p>';
      }
      ?>
    
    </main>
  
  </div>
  <div class="max-w-screen-lg mx-auto text-gray-500 mt-10">
     <ul class=" flex *:rounded-full  *:px-4 *:py-1 *:ml-3 text-sm">
    <li class="text-white border border-blue-500 bg-blue-500 ">همه محصولات</li>
    <li class=" border border-gray-400 bg-white  ">دوربین</li>
    <li class=" border border-gray-400 bg-white ">کنسول بازی</li>
    <li class=" border border-gray-400 bg-white ">هدفون</li>
    <li class=" border border-gray-400 bg-white">وسایل گیمینگ</li>
    <li class=" border border-gray-400 bg-white">هدست</li>
  </ul>
  </div>

  <div class="grid lg:grid-cols-3 gap-6 max-w-screen-lg mx-auto sm:grid-cols-2 mt-6  ">
    <div class=" w-82 h-109">
      <div class="bg-gray-300 w-82 h-60 rounded-t-lg grid">
        <img src="<?php echo get_template_directory_uri();?>/img/camera1.png" alt="camera" class="w-60 place-self-center">
      </div>
      <div class="bg-zinc-50 w-82 h-49 rounded-b-lg ">
        <p class="Vazirmatn-bold font-semibold pt-3 pr-3">دوربین دیجیتال اکسون مدل AX6062</p>
        <p class="font-thin text-sm pt-3 pr-3 text-sky-700">دوربین</p>
        <div class="flex mt-5"dir="ltr">
        <sub class="text-xs text-sky-700 ml-2">تومان</sub>
        <p class="mx-3 ">27,399,000</p>
        <p class="text-gray-400 line-through">28,440,000</p>
        <span class="text-white bg-red-500 rounded-lg px-2 ml-auto mr-3 pt-0.5">4%</span>
        </div>
        <div class=" flex flex-row mt-7 text-sm">
          <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-2.5 ml-1 mr-2.5">افزودن به سبد</button>
                    <button class="basis-xs bg-gray-200 hover:bg-gray-300 text-sky-600 rounded-lg py-2.5 ml-2.5">مشاهده جزئیات</button>
        </div>
      </div>
    </div>

       <div class=" w-82 h-109">
      <div class="bg-gray-300 w-82 h-60 rounded-t-lg grid ">
        <img src="<?php echo get_template_directory_uri();?>/img/camera2.png" alt="camera" class="w-60 place-self-center">
      </div>
      <div class="bg-zinc-50 w-82 h-49 rounded-b-lg ">
        <p class="Vazirmatn-bold font-semibold pt-3 pr-3">دوربین دیجیتال کانن مدل EOS 250D</p>
        <p class="font-thin text-sm pt-3 pr-3 text-sky-700">دوربین</p>
        <div class="flex mt-5"dir="ltr">
        <sub class="text-xs text-sky-700 ml-2">تومان</sub>
        <p class="mx-3 ">27,399,000</p>
        <p class="text-gray-400 line-through">28,440,000</p>
        <span class="text-white bg-red-500 rounded-lg px-2 ml-auto mr-3 pt-0.5">4%</span>
        </div>
        <div class=" flex flex-row mt-7 text-sm">
          <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-2.5 ml-1 mr-2.5">افزودن به سبد</button>
            <button class="basis-xs bg-gray-200 hover:bg-gray-300 text-sky-600 rounded-lg py-2.5 ml-2.5">مشاهده جزئیات</button>
        </div>
      </div>
    </div>
       <div class=" w-82 h-109">
      <div class="bg-gray-300 w-82 h-60 rounded-t-lg grid">
        <img src="<?php echo get_template_directory_uri();?>/img/airpod2.png" alt="airpods" class="w-60 place-self-center">
      </div>
      <div class="bg-zinc-50 w-82 h-49 rounded-b-lg ">
        <p class="Vazirmatn-bold font-semibold pt-3 pr-3">هدفون بولوتوثی هایلو مدل X1 2023</p>
        <p class="font-thin text-sm pt-3 pr-3 text-sky-700">هدفون</p>
        <div class="flex mt-5"dir="ltr">
        <sub class="text-xs text-sky-700 ml-2">تومان</sub>
        <p class="mx-3 ">27,399,000</p>
        <p class="text-gray-400 line-through">28,440,000</p>
        <span class="text-white bg-red-500 rounded-lg px-2 ml-auto mr-3 pt-0.5">4%</span>
        </div>
        <div class=" flex flex-row mt-7 text-sm">
          <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-2.5 ml-1 mr-2.5">افزودن به سبد</button>
          <button class="basis-xs bg-gray-200 hover:bg-gray-300 text-sky-600 rounded-lg py-2.5 ml-2.5">مشاهده جزئیات</button>
        </div>
      </div>
    </div>
 <div class=" w-82 h-109">
      <div class="bg-gray-300 w-82 h-60 rounded-t-lg grid">
        <img src="<?php echo get_template_directory_uri();?>/img/headphone3.png" alt="headphone" class="w-68 place-self-center">
      </div>
      <div class="bg-zinc-50 w-82 h-49 rounded-b-lg ">
        <p class="Vazirmatn-bold font-semibold pt-3 pr-3">هدست بولوتوثی سونی مدل WH-CH720N</p>
        <p class="font-thin text-sm pt-3 pr-3 text-sky-700">هدفون</p>
        <div class="flex mt-5"dir="ltr">
        <sub class="text-xs text-sky-700 ml-2">تومان</sub>
        <p class="mx-3 ">27,399,000</p>
        <p class="text-gray-400 line-through">28,440,000</p>
        <span class="text-white bg-red-500 rounded-lg px-2 ml-auto mr-3 pt-0.5">4%</span>
        </div>
        <div class=" flex flex-row mt-7 text-sm">
          <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-2.5 ml-1 mr-2.5">افزودن به سبد</button>
          <button class="basis-xs bg-gray-200 hover:bg-gray-300 text-sky-600 rounded-lg py-2.5 ml-2.5">مشاهده جزئیات</button>
        </div>
      </div>
    </div>
     <div class=" w-82 h-109">
      <div class="bg-gray-300 w-82 h-60 rounded-t-lg grid">
        <img src="<?php echo get_template_directory_uri();?>/img/headphone2.png" alt="headphone" class="w-60 place-self-center">
      </div>
      <div class="bg-zinc-50 w-82 h-49 rounded-b-lg ">
        <p class="Vazirmatn-bold font-semibold pt-3 px-3">هدست گیمینگ بولوتوثی سونی مدل lnZone H9</p>
        <p class="font-thin text-sm pt-3 pr-3 text-sky-700">هدفون</p>
        <div class="flex mt-5"dir="ltr">
        <sub class="text-xs text-sky-700 ml-2">تومان</sub>
        <p class="mx-3 ">27,399,000</p>
        <p class="text-gray-400 line-through">28,440,000</p>
        <span class="text-white bg-red-500 rounded-lg px-2 ml-auto mr-3 pt-0.5">4%</span>
        </div>
        <div class=" flex flex-row mt-7 text-sm">
          <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-2.5 ml-1 mr-2.5">افزودن به سبد</button>
          <button class="basis-xs bg-gray-200 hover:bg-gray-300 text-sky-600 rounded-lg py-2.5 ml-2.5">مشاهده جزئیات</button>
        </div>
      </div>
    </div>
     <div class=" w-82 h-109">
      <div class="bg-gray-300 w-82 h-60 rounded-t-lg grid">
        <img src="<?php echo get_template_directory_uri();?>/img/headset1.png" alt="airpods" class="w-60 place-self-center">
      </div>
      <div class="bg-zinc-50 w-82 h-49 rounded-b-lg ">
        <p class="Vazirmatn-bold font-semibold pt-3 pr-3">هدست بولوتوث استریو مدل SBH54</p>
        <p class="font-thin text-sm pt-3 pr-3 text-sky-700">هدفون</p>
        <div class="flex mt-5"dir="ltr">
        <sub class="text-xs text-sky-700 ml-2">تومان</sub>
        <p class="mx-3 ">27,399,000</p>
        <p class="text-gray-400 line-through">28,440,000</p>
        <span class="text-white bg-red-500 rounded-lg px-2 ml-auto mr-3 pt-0.5">4%</span>
        </div>
        <div class=" flex flex-row mt-7 text-sm">
          <button class=" basis-xs bg-sky-600 hover:bg-sky-700 text-gray-200 rounded-lg py-2.5 ml-1 mr-2.5">افزودن به سبد</button>
          <button class="basis-xs bg-gray-200 hover:bg-gray-300 text-sky-600 rounded-lg py-2.5 ml-2.5">مشاهده جزئیات</button>
        </div>
      </div>
    </div>


  </div>

  <div class="flex justify-center *:rounded-lg *:text-center *:mx-2 *:text-sm mt-9 ">
      <button disabled class="border border-gray-400 text-gray-400 bg-zinc-50 disabled py-2 px-3.5   disabled:opacity-50">قبلی</button>
      <button class="border border-blue-500 bg-blue-500 text-white py-2 px-4.5">1</button>
      <button class="border border-gray-400 text-gray-400 bg-zinc-50 py-2 px-4.5">2</button>
      <button class="border border-gray-400 bg-zinc-50 text-gray-400 py-2 px-3">بعدی</button>
  </div>

<div class="mb-100"></div>  
  
<?php 
get_footer();
?>
