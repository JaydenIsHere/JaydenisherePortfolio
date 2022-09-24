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
<!-- hero-section -->
<section class="home" id='home'>
<div class='container flex'>
<div class="home-content">
<h4 style="color:white">Hi There,</h4>
<h1>I'm <span style="color:#00D2F2">Jayden</span></h1>
<h4 class="job-title">A Digital Creator & Web Designer</h4>
<a href="#" class="btn btn-blue">My Portfolio</a>
</div>

<div class="hero-image">
<img src="https://bit.ly/3A0rcFN" alt="">
</div>

<div className='gear'>
          <img src="https://bit.ly/3C8ujyl" class='gear1 rotating' alt='' />
          <img src="https://bit.ly/3C8ujyl" class='gear2 rotating' alt='' />
          <img src="https://bit.ly/3C8ujyl" class='gear3 rotating' alt='' />
</div>
</div>
</section>

<!-- about me-section -->
<section class="about-me" style="background-color:#00D2F2">

<div class="container flex">
<div class="about-me-wrapper flex" style="background-color:white">
<!-- ************** -->
<div class="about-content">
    <h2><span style="color:#00D2F2">About</span> Me</h2>
    <p>My name is Jayden. Currently I am a Digital Creator and a Web Designer. I have a great passion on using different technologies to express my creativity that leverage marketing strategies and solving problems for different niches and industries.</p>
    <div class="about-icon">
    <a href="https://st-warrior.com"><i class="fas fa-globe"></i></a>
    <a href="https://www.youtube.com/channel/UC-SxNLOm5L7vEcdUnH_nUAg/featured"><i class="fab fa-youtube"></i></a>
    <a href="https://github.com/JaydenIsHere"><i class="fab fa-github"></i></a>
    </div>
</div>
<!-- ************** -->
  <div class="about-image">
    <img name="slide" width="400" height="200">
  </div>

</div>
</div>

</section>

<!-- my skill-section -->
<section class="my-skill">
<h2 class="my-skill-title text-blue"><span style="color:white">My</span> Skill</h2>

<div class="skill-card-wraper container flex">

  <div class="skill-card card-1">
    <h3>Video <span class="text-blue">Creation</span></h3>
    <p class="text-white">I can create video that can help my client advertise their product or help them building branding image</p>
    <a href="" class="skill-btn">See Portfolio</a>
  </div>

  <div class="skill-card card-2">
    <h3>Graphic <span class="text-blue">Design</span></h3>
    <p class="text-white">Designed graphic is easier to catch reader's eyes and help them understand the message faster</p>
    <a href="" class="skill-btn">See Portfolio</a>
  </div>

  <div class="skill-card card-3">
    <h3>Web <span class="text-blue">Design</span></h3>
    <p class="text-white">I create interactive web design to help my client to deliver their business core value for their customers</p>
    <a href="" class="skill-btn">See Portfolio</a>
  </div>

</div>
</section>


<section class="contact-me" id="contact">
<h2 class="contact-title text-black"><span class="text-blue">Contact</span> Me</h2>
<p class="text-center text-black">Submit the form below so I can get back to you as soon as posible</p>
<div class="container">

<form action="https://formsubmit.co/your@email.com" method="POST">
  <input type="name" name="name" placeholder="Full Name" class="box">
  <input type="email" name="email" placeholder="Your Email" class="box">
  <textarea name="message" placeholder="Your Message" class="box"></textarea>
<input type="submit" value="Send"  class="btn"/>
</form>

</div>

</section>
<?php 
get_footer();
?>