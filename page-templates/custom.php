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

 <!-- JUMBOTRON -->
 <div class="container">
 <div class="jumbotron text-center">
      <h1 class="display-4">Welcome To My Website!</h1>
      <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum necessitatibus perspiciatis cum vitae, modi hic?</p>
      <hr>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quibusdam.</p>
      <a class="btn btn-success" href="#" role="button">Read More</a>
    </div>


 <!-- owl sliding gallery -->
<div class="clients owl-carousel owl-theme">
    <div class="thumbnail">
        <img src="http://127.0.0.1/wordpress/wp-content/uploads/2018/08/holoNike.png" alt="nike">
    </div>

        <div class="thumbnail">
            <img src="img/holoAns.png" alt="Nature">
        </div>
       
</div>

</div>


 <!-- footer call -->
<?

get_footer();