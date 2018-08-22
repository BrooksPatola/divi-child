<?php
/*
 * Template Name: custom 
 * description: >-
  HomePage template
 */

get_header();


?>
 <!-- close header -->

<!-- **************************HTML GOES HERE ************-->

  <!-- Video for fullscreen intro with fallback video formats for different browsers -->
  <div class="customContainer">
  <section id= "introVideo">
  <div>
      <!-- muted for autoplay to work in Chrome -->
      <video muted autoplay="true" loop="true">
          <source src="http://127.0.0.1/wordpress/wp-content/uploads/2018/08/MOMU-SHORT.mp4" type="video/mp4">
          <source src="video/holoVid.webm" type="video/webm">
          <source src="video/holoVid.ogv" type="video/ogg">
          <!-- Provide user message if their browser doesn't support html5 video -->
          your browser doesn't support HTML5 video.
      </video>
  </div>
  </section>
  


  <!-- ABOUT US BLURB  -->
<section id="aboutUs">
    <h1>LOREM IPSUM</h1>

    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione, reprehenderit illum, quasi, alias consequatur deleniti culpa qui eaque nemo voluptatem modi tempora aliquid quidem nostrum accusamus ducimus veritatis dolorem vitae. </p>
</section>


<br><br>


 <!-- owl sliding gallery -->
<div class="clients owl-carousel">
    <div class="thumbnail">
        <img src ="http://127.0.0.1/wordpress/wp-content/uploads/2018/08/holoNike.png" alt="nike">
    </div>

        <div class="thumbnail">
            <img src="img/holoAns.png" alt="Nature">
        </div> 
       
</div>

</div>
<!--end container -->

 <!-- footer call -->
<?

get_footer();