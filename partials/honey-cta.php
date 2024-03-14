<?php

if( have_rows('honey_call_to_action') ):
    while ( have_rows('honey_call_to_action') ) : the_row();

if( get_row_layout() == 'call_to_action' ):
  $backgroundType = get_sub_field('background_type')['value'] ;
  $solidBackgroundColor = get_sub_field('solid_background_color');
  $backgroundImage = get_sub_field('background_image');
  $text = get_sub_field('text_content');
  $textColor = get_sub_field('text_color');
  $buttonText = get_sub_field('button_text');
  $buttonUrl = get_sub_field('button_url');
  $buttonColor = get_sub_field('button_color');
  $buttonTextColor = get_sub_field('button_text_color');
  $contentPosition = get_sub_field('content_position');

  ?>

<section class="honey-cta position-<?php echo $contentPosition ;?>" style="
  <?php if($backgroundType=="solid") {
    echo 'background-color:'. $solidBackgroundColor .';';
  }

  elseif($backgroundType=="image") {
    echo '
    background-image: url('. $backgroundImage['url'] . ');
    background-position: center center;
    background-size: cover;
    ';
  }

  ?>">

  <div class="content" style="  <?php if($textColor) {
    echo 'color:'. $textColor .';';
    }?>">

    <?php if($text): ?>
    <div class="copy">
      <p>
        <?php echo $text;?>
      </p>
    </div>
    <?php endif;?>

    <?php if($buttonText): ?>
    <div class="cta-button">
      <a class="button" style="  <?php if($buttonColor) {
    echo 'background-color:'. $buttonColor . ';';
  }

  if($buttonTextColor) {
    echo 'color:'. $buttonTextColor . ';';
  }

  ?>" href="<?php echo $buttonUrl;?>"><?php echo $buttonText;?></a>
    </div>
    <?php endif;?>
  </div>
</section>

<?php endif ?>

<?php 
  endwhile;
  endif; 
?>

<style>
.honey-cta {
  padding: 15px;
  width: 100%;
  height: 400px;
  display: flex;
  align-items: center;
}

.honey-cta.position-right {
  justify-content: flex-end;
  text-align: right;
}

.honey-cta.position-center {
  justify-content: center;
  text-align: center;
}

.honey-cta.position-left {
  justify-content: flex-start;
  text-align: left;
}

.honey-cta .content {
  display: flex;
  flex-direction: column;
  font-size: 18px;
  font-weight: bold;
  color: #fff;
  max-width: 60%;
}

.honey-cta .copy {
  margin-top: 10px;
  margin-bottom: 10px;
}

@media screen and (max-width: 767px) {
  .honey-cta .content {
    max-width: 100%;
  }
}
</style>