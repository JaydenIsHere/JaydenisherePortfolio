<?php 
/**
* custom page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jaydenishere

 */

 get_header();
?>

<section class="web-landing">

<div class="web-main" id="web-main">
<h2 id="landing-text"><span class="text-blue">Web Design</span> Portfolio</h2> 
<img src="https://lh3.googleusercontent.com/BtQPTvfged7Sx6AuAjHBd_lsAqkQBtkWYamj2hcoUfC6MMcuEItOyArrFlvzuinLaQcdc7q4-FrU0X_J8T5utBBjtpsPM1J4m9zrDI2PXQrihyT_gRje_F-T7nKgl121DvxBza8NfQ=w2400" alt="" id="bg">
<img src="https://lh3.googleusercontent.com/8B9TvZMhBdveibvlDxcWoM0vKXIJ51hEZSvgJv6YxWdq_kbnddcHTnwmbNucOVEXk6oS5yKUQvv9ObttUHi9hZOKYVQUOpDN4Qi5iK4iizbAy5REkzKHnyoBHcQzE_548_3p-dQCRA=w2400" alt="" id="moon">
<img src="https://lh3.googleusercontent.com/LmlXnHorHET0qBQLmR5NiIpTfKq93_X9UP1VHIXIiX2euyTf0THSMnhzip-kcyEvJ_qRJyxtmfA_6_02zAaB1YXla4mtPSnTDrhF54kG5kv-gl2rFShaiV1sukPzhGE0Y55XwqsfBg=w2400" alt="" id="mountain">
<img src="https://lh3.googleusercontent.com/GeGVkoWMXRbkoirQK_Td1iFWUXku8vNkZCH9EnvDLwPsQZJNCU8qXowJWiAVaqIftTwir1KKZDIloRQNCw_yyMdpVcIZMlr6SnJSmqpIanzSnoiM5Uk_SiB07G86KK0nQ5BRlFciXw=w2400" alt="" id="road">
</div>

</section>

<section class="web-section" id="web-section">
<div class="container">
    <div class="landing-message text-white">

<div class="web-photo">
<img src="https://lh3.googleusercontent.com/xyLRAX6PkVsCxlCHU5UH2HNjmPgR5E6tZThzDpQ9qFi6CpQroGoOCSIGFcYjsBcZOB8c1WiXZSnTdFFZWJy73c1y1iwklWk_GguGsYb386TmC2N_fyLjheTEvZJIJMshafmsGuvC0g=w2400" alt="">
</div>
    <h2 class="landing-message-text1">I am a <br><span class="text-blue">Front-end Developer</span></h2>
    <h2 class="landing-message-text2"> with experience in building<span class="text-black"> front-end websites </span>for small and medium sized businesses.</h2>
</div>
</div>
<!-- bottom of container is here -->
</section>

<!-- web working tool section -->
<section class="web-working-tool-section" id="web-working-tool-section">

<div class="container">
<h2 class="web-working-tool-title white-color"><span class="text-black">Working</span> Tools</h2>
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="http://xinran.sg/wp-content/uploads/2020/04/xinran-957x1030-1.png" alt=""></div>
    <div class="swiper-slide"><img src="https://bit.ly/3ds5Fi1" alt=""></div>
    <div class="swiper-slide"><img src="https://bit.ly/3qRlkuh" alt=""></div>
    <div class="swiper-slide"><img src="https://bit.ly/3UkOGiv" alt=""></div>
    <div class="swiper-slide"><img src="https://bit.ly/3dhdGGJ" alt=""></div>
    <div class="swiper-slide"><img src="https://bit.ly/3BN6HhW" alt=""></div>
    <div class="swiper-slide"><img src="https://bit.ly/3UfR6ii" alt=""></div>
    <div class="swiper-slide"><img src="https://bit.ly/3LjjY5f" alt=""></div>
  </div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
</div>

</section>



<?php 
get_footer();
?>