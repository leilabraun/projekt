<!-- Startseite -->
<?php get_header(); ?>

<article id="intro" class="intro-article">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="intro-image">
        <?php 

          //  Titelbild
          $image = get_field('img');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
        <!-- Titel -->
        <div class="intro-text">
          <h1><?php the_title() ?></h1>
          <p><?php the_content(); ?></p>
        </div>
      </div>
</article>


<div class="anfang">
  <?php the_field('anfang'); ?>
</div>


<!-- Absatz 1 -->
<div id="magazinausschnitt-1">
  <div class="bild1-container">

    <?php echo esc_html( get_field('text1') ); ?>
  
      <?php 
        $image2 = get_field('bild1');
        if( !empty( $image2 ) ): ?>

        <div class="bild bild1">
          <img class="myImg" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
        </div>
  <?php endif; ?>


    <div class="name1">
      <?php the_field('name1'); ?>
    </div>
 </div>
</div>
<!-- Absatz 2 -->

<div id="magazinausschnitt-2">
  <div class="bild2-container">
    <?php 
      $image2 = get_field('bild2');
          if( !empty( $image2 ) ): ?>

          <div class="bild bild2">
            <img class="myImg" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
          </div>
          <?php endif; ?>

      <div class="text2">
        <?php the_field('text2'); ?>
      </div>
   </div>
</div>



<!-- Absatz 3 -->
<!-- Absatz 3 -->

<div class="bild3-container">
    <?php 
      $image3 = get_field('bild3');
      if( !empty( $image3 ) ): ?>
      <div class="bild bild3">
        <img class="myImg" src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
      </div>
      <?php endif; ?>
      <div class="text3">
        <?php the_field('text3'); ?>
      </div>
</div>  
 

  <!-- Absatz 4 -->
<div id="magazinausschnitt-3">
  <div class="bild4-container">

      <?php 
        $image4 = get_field('bild4'); // Richtig benennen
        if( !empty( $image4 ) ): ?>

    <div class="bild bild4">
      <img class="myImg" src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>" />
    </div>
    <?php endif; ?>

    <div class="text4">
      <?php the_field('text4'); ?>
    </div>
  </div>
</div>


<!-- Absatz 5 -->

<div class="bild5-container">

  <?php 
    $image5 = get_field('bild5'); // Richtig benennen
    if( !empty( $image5 ) ): ?>

    <div class="bild bild5">
      <img class="myImg" src="<?php echo esc_url($image5['url']); ?>" alt="<?php echo esc_attr($image5['alt']); ?>" />
    </div>
  <?php endif; ?>

  <div class="text5">
    <?php the_field('text5'); ?>
  </div>
</div>
  



<!-- Absatz 6 -->

   
<div class="bild6-container">
  <?php 
      $image6 = get_field('bild6'); // Richtig benennen
      if( !empty( $image6 ) ): ?>

        <div class="bild bild6">
          <img class="myImg" src="<?php echo esc_url($image6['url']); ?>" alt="<?php echo esc_attr($image6['alt']); ?>" />
        </div>
      <?php endif; ?>

    <div class="text6">
      <?php the_field('text6'); ?>
    </div>
</div>


<div id="magazinausschnitt-4">
  <div class="poetry-container">
    <div class="name2">
      <?php the_field('name2'); ?>

    </div>


    <div class="poetry">
      <?php the_field('poetry'); ?>
    </div>

    <div class="poetry2">
      <?php the_field('poetry2'); ?>
    </div>
  </div>

</div>



<!-- Absatz 7 -->
<div id="magazinausschnitt-5">
  <div class="bild7-container">

      <?php 
        $image7 = get_field('bild7'); 
        if( !empty( $image7 ) ): ?>

          <div class="bild bild7">
            <img class="myImg" src="<?php echo esc_url($image7['url']); ?>" alt="<?php echo esc_attr($image7['alt']); ?>" />
          </div>
        <?php endif; ?>

    <div class="text7">
      <?php the_field('text7'); ?>
    </div>
  </div>
</div>
  <!-- Absatz 8 -->
   
<div class="bild8-container">

    <?php 
      $image8 = get_field('bild8'); 
      if( !empty( $image8 ) ): ?>

        <div class="bild bild8">
          <img class="myImg" src="<?php echo esc_url($image8['url']); ?>" alt="<?php echo esc_attr($image8['alt']); ?>" />
        </div>
      <?php endif; ?>

</div>

  
  
    <!-- Absatz 9 -->
<div id="magazinausschnitt-6">
  <div class="bild9-container">

    <?php 
      $image9 = get_field('bild9'); 
      if( !empty( $image9 ) ): ?>

        <div class="bild bild9">
          <img class="myImg" src="<?php echo esc_url($image9['url']); ?>" alt="<?php echo esc_attr($image9['alt']); ?>" />
        </div>
    <?php endif; ?>

    <div class="text8">
      <?php the_field('text8'); ?>
    </div>
  </div>
</div>

  <!-- Absatz 10 -->
   
<div class="bild10-container">

  <?php 
    $image10 = get_field('bild10'); 
    if( !empty( $image9 ) ): ?>

    <div class="bild bild10">
      <img class="myImg" src="<?php echo esc_url($image10['url']); ?>" alt="<?php echo esc_attr($image10['alt']); ?>" />
    </div>
  <?php endif; ?>

</div>

<div id="magazinausschnitt-7">

  <div class="profile-container">

    <div class="profile">
      <?php the_field('profile'); ?>
    </div>
  </div>
</div>


<div id="magazinausschnitt-8">
  <div class="anhang">
    <?php the_field('anhang'); ?>
  </div>
</div>








<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

</div>




<!-- Wenn die Seite leer ist: -->
<?php endwhile; else : ?>
  <p>Aktuell gibt es keinen Inhalt auf dieser Seite.</p> 
<?php endif; ?>

<!-- Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<?php get_footer(); ?>