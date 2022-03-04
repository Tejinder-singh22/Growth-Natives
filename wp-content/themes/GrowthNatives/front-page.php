<?php
/**
 *Template Name: home-page
 */

get_header();

$hero = get_fields();

$banner = $hero['banner'];

?>


<!-- banner starts -->
<?php if(isset($banner['background']['url'])||!empty($banner['background']['url'])) : ?>
<section class="banner" style="background-image: url(<?php echo $banner['background']['url'] ?>);" >
    <div class="container">
        <div class="banner-content">
            <div class="banner-top-content">
            <?php
            
             if(isset($banner['sub_1'])&&!empty($banner['sub_1'])||isset($banner['title'])&&!empty($banner['title'])) :  
          ?>
                <h4><?php echo $banner['sub_1'] ?></h4>
                <div class="topbar_text_slider">
                    <ul class="bxslider text">
                    <?php
           
            foreach ($banner['title'] as $key => $value) :
    ?> 
                        <li><h2><?php echo $value['item'] ?></h2></li>
                        
<?php 
endforeach;
 ?>
                    </ul>
                </div>
                <h4><?php echo $banner['sub_2'] ?></h4>
            <?php endif ?>
            </div>
            <ul class="banner-bottom-content">
            <?php
           
           foreach ($banner['image_repeater'] as $key => $value) :
   ?>  
                <li>
                    <a href="<?php echo $value['redirect']['url'] ?>">
                        <div class="team-img">
                            <img src="<?php echo $value['image']['url'] ?>" alt="">
                        </div>
                    </a>
                </li>
                
  <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<?php endif ?>

<!-- banner ends -->

<!-- services starts -->
<?php
if (have_rows('growth_flexible_content')):
    while (have_rows('growth_flexible_content')):
        the_row();
        ?>

<?php
if (get_row_layout() == 'accordian_section'):
    ?>
    <!-- services starts -->

    <section class="services spacing">
        <div class="container">
            <?php

            $heading = get_sub_field('heading');
            $sub_heading = get_sub_field('sub_heading');
            if (isset($heading) && !empty($heading) || isset($sub_heading) && !empty($sub_heading)) :
                ?>
                <div class="content">

                    <h3 class="heading"><?php echo $heading ?></h3>
                    <h5 class="paragraph"><?php echo $sub_heading ?></h5>

                </div>
            <?php endif; ?>
            <div class="service-tabs">
                <div class="service-flex">
                    <div class="nav  nav-pills" id="parent-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <?php
                        $accordion = get_sub_field('accordion_repeater');
                        foreach ($accordion as $key => $value):
                            ?>
                            <button class="nav-link <?php echo $key == 0 ? 'active' : '' ?>"
                                    id="parent-tab-<?php echo $key + 1 ?>"
                                    data-bs-toggle="pill"
                                    data-bs-target="#tab-content-<?php echo $key + 1 ?>" type="button"
                                    role="tab"
                                    aria-controls="tab-content-<?php echo $key + 1 ?>"
                                    aria-selected="true">
                                    <?php     if (isset( $value['accordian_icon']['url']) && !empty( $value['accordian_icon']['url'])) : ?>
                            <span class="nav-logo">
                                <img src="<?php echo $value['accordian_icon']['url'] ?>"
                                     alt="<?php echo $value['accordian_icon']['alt'] ?>">
                            </span>
                            <?php endif ?>
                                <h5><?php echo $value['accordion_item'] ?></h5>
                            </button>
                        <?php
                        endforeach;
                        ?>

                    </div>

                    <div class="tab-content" id="parent-tab-content">
                        <?php
                        $num = 0;
                        foreach ($accordion as $key => $value):
                            ?>
                            <div class="tab-pane fade <?php echo $key == 0 ? 'show active' : '' ?>"
                                 id="tab-content-<?php echo $key + 1 ?>" role="tabpanel"
                                 aria-labelledby="parent-tab-<?php echo $key + 1 ?>">

                                <div class="nav nav-pills upper-child "
                                     id="child-pills-tab-<?php echo $key + 1 ?>" role="tablist"
                                     aria-orientation="vertical">
                                    <?php
                                    $childAccordion = $value['accordion_content'];
                                    foreach ($childAccordion as $childKey => $childValue):
                                        ?>
                                        <button class="nav-link <?php echo $childKey == 0 ? 'active' : '' ?>"
                                                id="child-tab-<?php echo $childKey + 1 + $num ?>"
                                                data-bs-toggle="pill"
                                                data-bs-target="#child-tab-content-<?php echo $childKey + 1 + $num ?>"
                                                type="button" role="tab"
                                                aria-controls="child-tab-content-<?php echo $childKey + 1 + $num ?>"
                                                aria-selected="true">
                                            <?php
                                            echo $childValue['item_name']
                                            ?>
                                        </button>
                                    <?php
                                    endforeach;
                                    ?>
                                </div>
                                <div class="tab-content "
                                     id="child-tab-content-wrapper-<?php echo $key + 1 ?>">
                                    <?php
                                    foreach ($childAccordion as $childKey => $childValue):
                                        ?>
                                        <div class="tab-pane fade <?php echo $childKey == 0 ? 'show active' : '' ?>"
                                             id="child-tab-content-<?php echo $childKey + 1 + $num ?>"
                                             role="tabpanel"
                                             aria-labelledby="child-tab-<?php echo $childKey + 1 + $num ?>">
                                            <?php echo $childValue['description'] ?>
                                            <div class="tab-link">
                                                <a href="<?php echo !empty($childValue['read_more']) ? $childValue['read_more']['url'] : 'javascript:void(0)' ?>">
                                                   <?php echo $childValue['read_more']['title'] ?></a>
                                            </div>
                                        </div>
                                    <?php
                                    endforeach;
                                    $num += $childKey + 1;

                                    ?>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- services ends -->

<?php
endif;
?>
<!-- services ends -->

<!-- award starts -->
<?php
        if (get_row_layout() == 'award_section'):

        ?>
<section class="awards spacing">
    <div class="container">
        <a href="#">
            <div class="row">
                <div class="col-md-6">
                <?php 
                  $heading = get_sub_field('heading');
                  $sub_heading = get_sub_field('sub_heading');
                  if(isset($heading)&&!empty($heading)||isset($sub_heading)&&!empty($sub_heading)) : 
                ?>
                    <div class="content">
                        <h3><?php echo $heading ?></h3>
                        <h5><?php echo $sub_heading ?></h5>
                    </div>
                    <?php
                   endif;
                    ?>
                </div>
                <div class="offset-md-1 col-md-5">
                    <?php 
                      $image = get_sub_field('image');
                      if(isset($image)&&!empty($image)) :
                     ?>
                    <div class="awards-img">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>
                    <?php
                      endif;
                    ?>
                </div>
            </div>
        </a>
    </div>
</section>
       <?php
        endif;
        ?>


<!-- award ends -->

<!-- partner starts -->
<?php
        if (get_row_layout() == 'partners_section'):

        ?>
<section class="partners spacing">
    <div class="container">
                <?php 
                  $heading = get_sub_field('heading');
                  $sub_heading = get_sub_field('sub_heading');
                  if(isset($heading)&&!empty($heading)||isset($sub_heading)&&!empty($sub_heading)) : 
                ?>
        <div class="content">
            <h3 class="heading"><?php echo $heading ?></h3>
            <h5 class="paragraph"><?php echo $sub_heading ?></h5>
                <?php
                endif;
                ?>
            <div class="owl-carousel owl-theme partners-carousel">
                <?php 
                 $images = get_sub_field('image_repeater');
                 foreach ($images as $key => $value) :
                    if(isset($value['image']['url']) && !empty($value['image']['url'])) :
                ?>
                <div class="item">
                    <div class="image">
                        <img src="<?php echo $value['image']['url']?>" alt="<?php echo $value['image']['alt']?>">
                    </div>
                </div>
                <?php
                endif;
                ?>
                
                <?php
                 endforeach;
                 ?>

            </div>
        </div>
    </div>
</section>

      <?php
        endif;
        ?>




<!-- partner ends -->

<!-- our technical starts -->
<?php
        if (get_row_layout() == 'left_right_section'):

        ?>
<section class="technical spacing">
<?php 
                  $heading = get_sub_field('heading');
                   
                  if(isset($heading)&&!empty($heading) ) : 
                ?>
    <div class="sticky-heading">
        <h3 class="heading-bg-black"><?php echo $heading ?></h3>
    </div>
    <?php
        endif;
        ?>
    <!--    <div class="container">-->
    <div class="expertise">
    <?php 
                 $content = get_sub_field('content');
                 foreach ($content as $key => $value) :
                    
                ?>
        <div class="marketing spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                   <?php if(isset($value['title']) && !empty($value['title'] )||isset($value['subtitle']) && !empty($value['subtitle'] )) : ?>
                        <div class="content">
                            <h4><?php echo $value['title'] ?></h4>
                            <h5><?php echo $value['subtitle'] ?></h5>
                        </div>
                    <?php    endif; ?>
                    </div>
                    <div class="col-md-4">
                    <?php 
                  if(isset($value['image']['url'])&&!empty($value['image']['url']) ) : 
                ?>
                        <div class="img">
                            <img src="<?php echo $value['image']['url'] ?>" alt="<?php echo $value['image']['alt'] ?>">
                        </div>
                   <?php  endif; ?>      
                    </div>
                </div>
            </div>

        </div>

        <?php
                 endforeach;
                 ?>
    </div>
</section>

        <?php
        endif;
        ?>
       
<!-- our technical ends -->
<?php
        if (get_row_layout() == 'testimonial'):

        ?>
<div class="happy-client spacing">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
            <?php 
                  $heading = get_sub_field('heading');
                   
                  if(isset($heading)&&!empty($heading) ) : 
                ?>
                <div class="happy-client-heading text-center text-white">
                    <h3><?php echo $heading ?></h3>
                
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="quote-img">
            <svg xmlns="http://www.w3.org/2000/svg" width="97.457" height="83.536" viewBox="0 0 97.457 83.536">
                <path id="Union_10" data-name="Union 10"
                      d="M-12116.312-7288.6a27.878,27.878,0,0,0,27.849-27.843h-27.849v-41.767h41.77v41.767a41.814,41.814,0,0,1-41.77,41.77Zm-55.687,0a27.872,27.872,0,0,0,27.843-27.843H-12172v-41.767h41.766v41.767a41.813,41.813,0,0,1-41.766,41.77Z"
                      transform="translate(12172 7358.21)" fill="#444446"/>
            </svg>

        </div>

        <div class="happy-client-carousel">
            <div class="owl-carousel owl-theme" id="happy-client-carousel">
            <?php 
                 $content = get_sub_field('info');

                 if(isset($content)&&!empty($content) ) : 
                 foreach ($content as $key => $value) :
                    
                ?>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="client-img">
                                <img src="<?php echo $value['profile_image']['url'] ?>" alt="Happy Client">
                                <div class="play-button">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#youtube-modal" dataYoutube="<?php echo $value['video_link']['url'] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             width="146" height="146" viewBox="0 0 146 146">
                                            <defs>
                                                <filter id="Ellipse_12" x="0" y="0" width="146" height="146"
                                                        filterUnits="userSpaceOnUse">
                                                    <feOffset dy="10" input="SourceAlpha"/>
                                                    <feGaussianBlur stdDeviation="10" result="blur"/>
                                                    <feFlood flood-color="#2a2a2a" flood-opacity="0.161"/>
                                                    <feComposite operator="in" in2="blur"/>
                                                    <feComposite in="SourceGraphic"/>
                                                </filter>
                                            </defs>
                                            <g id="Vid-Icon" transform="translate(30 20)">
                                                <g transform="matrix(1, 0, 0, 1, -30, -20)" filter="url(#Ellipse_12)">
                                                    <circle id="Ellipse_12-2" data-name="Ellipse 12" cx="43" cy="43"
                                                            r="43"
                                                            transform="translate(30 20)" fill="#fff"
                                                            style="opacity: 0.4;"/>
                                                </g>
                                                <path id="Polygon_1" data-name="Polygon 1"
                                                      d="M17.177,7.44a5,5,0,0,1,8.646,0L38.635,29.488A5,5,0,0,1,34.312,37H8.688a5,5,0,0,1-4.323-7.512Z"
                                                      transform="translate(68 22) rotate(90)" fill="#000000"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                      <?php   if(isset($value['name'])&&!empty($value['name']) ) : ?>

                            <div class="client-text">

                                <p><?php echo $value['details'] ?></p>
                                <h5><?php echo $value['name'] ?></h5>
                                <a href="<?php echo $value['more']['url'] ?>"><?php echo $value['more']['title'] ?></a>
            
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php  endforeach;  ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- modals -->
<div class="modal fade" id="youtube-modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="youtube-modal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="1104" height="621" src=""
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
       <?php
        endif;
        ?>

<!-- case studies starts -->
<?php
        if (get_row_layout() == 'case_studies'):

        ?>
<section class="case-study spacing">
    <div class="container">
    <?php 
                  $heading = get_sub_field('heading');
                   
                  if(isset($heading)&&!empty($heading) ) : 
                ?>
        <div class="content">
            <h3 class="heading-img"><?php echo $heading ?></h3>
        </div>
        <?php
        endif;
        ?>
        <div class="row">
            <div class="col-md-5">
                <div class="case-study-img">
                <?php 
                  $image_text = get_sub_field('image_text');
                  $image = get_sub_field('image');

                 if(isset($image_text)&&!empty($image_text)||isset($image['url'])&&!empty($image['url'])) : 
                ?>
                    <div class="percentage">
                    <h4><?php echo $image_text['percentage'] ?><span><?php echo $image_text['text'] ?></span></h4>
                    </div>
                    <div class="study-img">
                        <img src="<?php echo $image['url'] ?>" alt="">
                    </div>
                <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="study-content">
                <?php 
                $title = get_sub_field('title');
                if(isset($title)&&!empty($title)): 
                 ?>
                    <h4><?php echo $title ?></h4>
                    <ul>

                    <?php 
                 $content = get_sub_field('content');
                 foreach ($content as $key => $value) :
                    
                ?>
                        <li>
                        <?php echo $value['list'] ?>
                        </li>
                       

                    <?php endforeach ?>
                    </ul>
                <?php  endif; ?>

                <?php 
                $btn = get_sub_field('button_button');
                if(isset($btn)&&!empty($btn)): 
                    foreach($btn as $value) :
                ?>
                    <div class="study-button">
                        <a href="<?php echo $value['url']['url'] ?>"> <?php echo $value['text'] ?></a>
                    </div>
                <?php 
                    endforeach;
                endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
        endif;
        ?>

<!-- case studies ends  -->

<!-- best-practices starts -->
<?php
        if (get_row_layout() == 'best_practices'):

        ?>
<section class="best-practices spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-section">
                <?php 
                  $heading = get_sub_field('heading');
                  $sub_heading = get_sub_field('sub_heading');
                  if(isset($heading)&&!empty($heading)||isset($sub_heading)&&!empty($sub_heading)) : 
                ?>
                    <div class="heading">
                        <h2 class="heading"><?php echo $heading ?></h2>
                    </div>
                    <div class="sub-heading">
                        <p><?php echo $sub_heading ?></p>
                    </div>
                    <?php
                    endif;
                    ?>
                </div>
                <!---card section -->
                <div class="practices-card-outer">

                <?php $count = 0; ?>
        
            <?php
    
    $wpb_all_query = new WP_Query(array('post_type'=>'practices', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby' => 'publish_time',
    'order' => 'ASC'));
    
    $myCount = $wpb_all_query->found_posts;
    ?>
    <?php if ( $wpb_all_query->have_posts() ) : ?>
    <!-- loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
            $count++;
            $id = get_the_id();
                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
                        
                        $image_id = get_post_thumbnail_id($id);
                        $image_title = get_the_title($image_id);
                        $category = get_the_category($id);
                        $excerpt = get_the_excerpt($id);
                        $date =  get_the_date($id);			
                        
    ?>

               <?php if($count<=3) : ?>
                    <div class="practices-card">
                        <a href="javascript:;">
                            <div class="card-feature-image">
                                <img src="<?=esc_url($thumbnail[0])?>" class="card-img-top" alt="card-image">
                            </div>
                            <div class="card-body">
                                <h4><?=esc_html(get_the_title())?></h4>
                                <p class="card-text"><?=esc_html($excerpt) ?></p>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

                    <?php
      endwhile;
   endif;
   ?>
                </div>
                <!---card section end -->
                <?php 
                $btn = get_sub_field('button_button');
                if(isset($btn)&&!empty($btn)): 
                    foreach($btn as $value) :
                ?>
                <div class="explor-cta">
                    <a href="javascript:;" class="custom-outline-btn btn"><?php echo $value['text']?></a>
                </div>
                <?php 
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata() ?>
</section>
    <?php
        endif;
    ?>
 
  
<!-- best-practices ends -->

<!-- scale-brand starts -->
<?php
   
        if(get_row_layout() == 'scales_section1'):
?>

<div class="scale-brand">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-10 col-md-12 col-sm-12 col-12">
            <?php 
                  $heading = get_sub_field('heading');
                  $sub_heading = get_sub_field('sub_heading');
                  if(isset($heading)&&!empty($heading)||isset($sub_heading)&&!empty($sub_heading)) : 
                ?>
                <div class="scale-brand-text">
                    <h3><?php echo $heading ?></h3>
                    <p><?php echo $sub_heading ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 col-12">
            <?php 
                $btn = get_sub_field('button_button');
                if(isset($btn)&&!empty($btn)): 
                    foreach($btn as $value) :
                ?>
                <div class="scale-brand-button">
                    <a href="<?php echo $value['url']['url'] ?>"> <?php echo $value['text'] ?></a>
                </div>
                <?php 
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

    <?php
        endif;
    ?>
  <?php
    endwhile;
endif;
?>
<!-- scale-brand ends -->

<?php

get_footer();
?>












