<?php
$hero = get_fields('options');
// echo "<pre>";
// print_r($hero);
// echo "</pre>";
// die('dd');
?>

<?php
/*if (have_rows()):
    while (have_rows()):
    endwhile;
endif;*/
?>
<!-- footer starts -->

<div class="footer spacing">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows("footer_flexible",'option')):
                while (have_rows("footer_flexible", 'option')):
                    the_row();
                    ?>
                    <?php
                    if (get_row_layout() == 'about_growthnatives'):
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <?php 
                        $logoimg = get_sub_field('logo_image');
                         if(isset($logoimg)&&!empty($logoimg)) :
                           ?>
                            <div class="logo">
                             
                                <img src="<?php echo $logoimg['url'] ?>" alt="<?php echo $logoimg['alt'] ?>">
                            </div>
                            <?php endif; ?>
                            <?php
                            echo get_sub_field('text-content')
                            ?>
                            <?php
                            $contact_info = get_sub_field('contact_info');
                            if(isset($contact_info['address']['heading'])&&!empty($contact_info['address']['heading'])) :
                            ?>
                            <div class="address">
                                <h4 class="heading4"><?php echo $contact_info['address']['heading'] ?></h4>
                                <ul>
                                    <li>
                                    <a href="mailto:<?php echo $contact_info['address']['text_content'] ?>">
                                        <?php echo $contact_info['address']['text_content'] ?>
                                    </a>  
                                    </li>
                                </ul>
                            </div>
                            <?php  endif; ?>
                          <?php   if(isset($contact_info['careers']['heading'])&&!empty($contact_info['careers']['heading'])) : ?>
                            <div class="careers">
                                <h4 class="heading4"><?php echo $contact_info['careers']['heading'] ?></h4>
                                <ul>
                                    <li>
                                        <a href="mailto:<?php echo $contact_info['careers']['text_content'] ?>">
                                            <?php echo $contact_info['careers']['text_content'] ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <?php   if(isset($contact_info['sales']['heading'])&&!empty($contact_info['sales']['heading'])) : ?>
                            <div class="sales">
                                <h4 class="heading4"><?php echo $contact_info['sales']['heading'] ?></h4>
                                <ul>
                                    <li>
                                        <a href="mailto:<?php echo $contact_info['sales']['text_content'] ?>">
                                            <?php echo $contact_info['sales']['text_content'] ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <?php 
                           $image = get_sub_field('image');
                             if(isset($image)&&!empty($image)) :
                            ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                            <?php endif; ?>
                        </div>

                    <?php
                    endif;
                    ?>
                    <?php  if (get_row_layout() == 'footer_column'):  ?>
  
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            
                                <div class="services">
                                <?php 
                                    $service = get_sub_field('services');
                                    if(isset($service['heading'])&&!empty($service['heading'])) :
                              ?>
                                    <h4 class="heading4"><?php echo $service['heading'] ?></h4>
                                    <?php endif; ?>
                                    <ul>
                                        <?php
                                        if(isset($service['content'])&&!empty($service['content'])) :
                                        foreach($service['content'] as $value) :?>

                                        <li><a href="<?php echo $value['item']['url'] ?>"><?php echo $value['item']['title'] ?></a></li>
                                        

                                      <?php endforeach; ?>
                                      <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="platform">
                                <?php 
                                    $free_resources = get_sub_field('free_resources');
                                    if(isset($free_resources['heading'])&&!empty($free_resources['heading'])) :
                              ?>
                                    <h4 class="heading4"><?php echo $free_resources['heading'] ?></h4>
                                    <?php endif; ?>
                                    <ul>
                                    <?php
                                     if(isset($free_resources['content'])&&!empty($free_resources['content'])) :
                                    foreach($free_resources['content'] as $value) :?>
                                        <li><a href="<?php echo $value['item']['url'] ?>"><?php echo $value['item']['title'] ?></a></li>
                                        
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="quick-links">
                                <?php 
                                    $quick = get_sub_field('quick_links');
                                    if(isset($quick['heading'])&&!empty($quick['heading'])) :
                              ?>
                                    <h4 class="heading4"><?php echo $quick['heading'] ?></h4>
                                    <?php endif; ?>
                                    <ul>
                                    <?php
                                     if(isset($quick['content'])&&!empty($quick['content'])) :
                                     foreach($quick['content'] as $value) :?>
                                        <li><a href="<?php echo $value['item']['url'] ?>"><?php echo $value['item']['title'] ?></a></li>
                                        
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="use-cases">
                                <?php 
                                    $success_stories = get_sub_field('success_stories');
                                    if(isset($success_stories['heading'])&&!empty($success_stories['heading'])) :
                              ?>
                                    <h4 class="heading4"><?php echo $success_stories['heading'] ?></h4>
                                    <?php endif; ?>
                                    <ul>
                                    <?php 
                                     if(isset($success_stories['content'])&&!empty($success_stories['content'])) :
                                    foreach($success_stories['content'] as $value) :?>
                                        <li><a href="<?php echo $value['item']['url'] ?>"><?php echo $value['item']['title'] ?></a></li>
                                        
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                                <div class="company">
                                <?php 
                                    $company = get_sub_field('company');
                                    if(isset($company['heading'])&&!empty($company['heading'])) :
                              ?>
                                    <h4 class="heading4"><?php echo $company['heading'] ?></h4>
                                    <?php endif; ?>
                                    <ul>
                                    <?php
                                      if(isset($company['content'])&&!empty($company['content'])) :
                                    foreach($company['content'] as $value) :?>
                                        <li><a href="<?php echo $value['item']['url'] ?>"><?php echo $value['item']['title'] ?></a></li>
                                     
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="resources">
                                <?php 
                                    $best_practice = get_sub_field('best_practice');
                                    if(isset($best_practice['heading'])&&!empty($best_practice['heading'])) :
                              ?>
                                    <h4 class="heading4"><?php echo $best_practice['heading'] ?></h4>
                                <?php endif; ?>
                                    <ul>
                                    <?php 
                                    if(isset($best_practice['content'])&&!empty($best_practice['content'])) :
                                    foreach($best_practice['content'] as $value) :
                                    ?>
                                        <li><a href="<?php echo $value['item']['url'] ?>"><?php echo $value['item']['title'] ?></a></li>
                                        
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
        </div>
    </div>
</div>
                        <?php endif ?>

                        <?php
                    if (get_row_layout() == 'bottom_bar'):
                        ?>
                        <!-- bottom-bar starts -->

                        <div class="bottom-bar">
                            <div class="container">
                                <div class="row">
                                    <ul>
                                        <?php
                                        $items = get_sub_field('items_repeater');
                                        foreach ($items as $value):
                                            ?>
                                            <li>
                                                <a href="<?php echo !empty($value['item_link']['url']) ? $value['item_link']['url'] : 'javascript:void(0)' ?>">
                                                    <?php echo $value['item_name'] ?>
                                                </a>
                                            </li>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        $image = get_sub_field('image');
                                        ?>
                                        <li>
                                            <img src="<?php echo $image['url'] ?>"
                                                 alt="<?php echo $image['alt'] ?>">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- bottom-bar ends -->
                    <?php
                    endif;
                    ?>

                    <?php
                    if (get_row_layout() == 'copyright_and_follow_us'):
                        ?>
                        <!-- copyright starts -->
                        <div class="copyright">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-xs-12">
                                        <?php
                                        echo get_sub_field('copyright_text')
                                        ?>
                                        <!-- <p>Copyright © 2022 All Rights Reserved </p> -->
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <?php
                                        $follow_us = get_sub_field('follow_us');
                                        ?>
                                        <ul>
                                            <li>Follow Us:</li>
                                            <?php
                                            foreach ($follow_us as $value):
                                                ?>
                                                <li>
                                                    <a target="<?php echo !empty($value['item_link']['target']) ? $value['item_link']['target'] : 'self' ?>"
                                                       href="<?php echo !empty($value['item_link']['url']) ? $value['item_link']['url'] : 'javascript:void(0)' ?>">
                                                        <?php echo $value['item_icon'] ?>
                                                    </a>
                                                </li>
                                            <?php
                                            endforeach;
                                            ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- copyright ends -->
                    <?php
                    endif;
                    ?>
                   
                <?php
                endwhile;
            endif;
            ?>

          
            
       

<!-- footer ends -->

<?php wp_footer(); ?>

</body>

</html>