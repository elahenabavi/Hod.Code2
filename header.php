<?php 
session_start();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
    @font-face {
    font-family: 'Vazirmatn';
    src: url('<?php echo get_template_directory_uri();?>/fonts/webfonts/Vazirmatn-Regular.woff2') format('woff2');
    
}
    @font-face {
    font-family: 'Vazirmatn-bold';
    src: url('<?php echo get_template_directory_uri();?>/fonts/webfonts/Vazirmatn-SemiBold.woff2') format('woff2');
    }
    
*{
    font-family: 'Vazirmatn';
}
.vazir-bold{
    font-family: 'Vazirmatn-bold';
}
</style>
<body <?php body_class("bg-gray-100"); ?>>
    <?php if($_SESSION['header']=="yes") {?>
    <header class="bg-white border-b-1 border-slate-300">
    <div class="max-w-screen-lg mx-auto flex py-2 justify-between">
        <div class="flex">
        <div class="w-13 ">
        <?php 
        if(function_exists("the_custom_logo")){
            the_custom_logo();
        }
        ?>
        </div>
        <ul class="flex my-auto text-md text-gray-500 ">
            <li class="mr-4">خانه</li>
            <li class="mr-6">محصولات</li>
        <ul>
        </div>
        <div class="flex">
            <ul class="flex my-auto text-md text-gray-500">
            <li class="ml-5">ارتباط با ما</li>
            <li class=" text-red-300">
              <img src="<?php echo get_template_directory_uri();?>/img/trolleygray1.png" alt="shop" class="w-6 absolute">
              <span class="relative bg-red-500 w-4.5 h-4.5 rounded-full text-[10px] text-gray-100 grid bottom-2.5 left-2"><p class="place-self-center">1</p></span>
            </li>
        </ul>
        </div>
    </div>
    </header>
<?php }
else{  ?>
    <header class="bg-white border-b-1 border-slate-300">
    <div class="max-w-screen-lg mx-auto flex py-2 justify-between">
        <div class="flex">
        <div class="w-13 ">
        <?php 
        if(function_exists("the_custom_logo")){
            the_custom_logo();
        }
        ?>
        </div>
        <ul class="flex my-auto text-md text-gray-500 ">
            <li class="mr-4">خانه</li>
            <li class="mr-6">محصولات</li>
        <ul>
        </div>
        <div class="flex">
            <ul class="flex my-auto text-md text-gray-500">
            <li class="ml-5">ارتباط با ما</li>
            <li class=" text-red-300 ml-5.5">
              <img src="<?php echo get_template_directory_uri();?>/img/trolleygray1.png" alt="shop" class="w-6 absolute">
         <!--      <span class="relative bg-red-500 w-4.5 h-4.5 rounded-full text-[10px] text-gray-100 grid bottom-2.5 left-2"><p class="place-self-center">1</p></span> -->
            </li>
        </ul>
        </div>
    </div>
    </header>
    <?php } ?>
<!-- هدر رو میتوان به دو صورت نوشت فکر کنم کدی که کامنت کردم چون با اضافه کردن یک ایتم به هم میخوره ممکنه جالب نباشه اما در کل تعداد خط کدهاش خیلی کمتره چون فقط از مارجین استفاده کرده -->
<!--     <header class="bg-white border-b-1 border-slate-300">
    <div class="max-w-screen-lg mx-auto flex py-2">
        <div class="w-13 ">
        <?php 
        if(function_exists("the_custom_logo")){
            the_custom_logo();
        }
        ?>
        </div>
        <ul class="flex my-auto text-md text-gray-500 ">
            <li class="mr-4">خانه</li>
            <li class="mr-6">محصولات</li>
            <li class="mr-182">ارتباط با ما</li>
            <li class="mr-6 text-red-300 ">
              <img src="<?php echo get_template_directory_uri();?>/img/trolleygray1.png" alt="shop" class="w-6 absolute">
              <span class="relative bg-red-500 w-4.5 h-4.5 rounded-full text-[10px] text-gray-100 grid bottom-2.5 left-2"><p class="place-self-center">1</p></span>
            </li>
        </ul>
    </div>
    </header> -->