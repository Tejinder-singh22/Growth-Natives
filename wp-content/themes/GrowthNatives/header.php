<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>~HomePage~</title>
    <!---fev icon-->
    <link rel="icon" href="assets\images\fav-icon.png" type="image/png">
    
    <?php wp_head(); ?>

</head>

<body>


<!-- header starts -->
<?php   
function yourprefix_get_menu_items($menu_name)
{
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);

        return wp_get_nav_menu_items($menu->term_id);
    }
}

$menu_array = yourprefix_get_menu_items('growth-natives-menu');

// echo '<pre>';
// print_r($menu_array);
// echo '</pre>';
?>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } 
                ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                    <?php
                            foreach ($menu_array as $menu_item) :
                                $custom_menu = get_fields($menu_item->ID);
                            ?>
                     
                        <li class="nav-item dropdown ">
                            <a class="nav-link <?php if($menu_item->title=='Home') : ?> active <?php endif; ?> <?php echo empty($custom_menu['mega_menu_flexible']) ? '' : 'dropdown-toggle' ?>" <?php if(isset($custom_menu['mega_menu_flexible'])){ ?>  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?php }?>aria-current="page"  href="#" >
                            <?php echo $menu_item->title ?>
                            </a>
                            <?php
                                    if (!empty($custom_menu['mega_menu_flexible'])) : ?>
                            <div class="dropdown-menu dropdown-large megamenu">
                                <div class="row">
                                 <?php
                                    if (have_rows('mega_menu_flexible', $menu_item->ID)) :
                                        while (have_rows('mega_menu_flexible', $menu_item->ID)) :
                                                the_row(); ?>
                                                    <?php
                                                        if (get_row_layout() == 'mega_menu_tab') :

                                                            $tab_rep =  get_sub_field('tab_repeater');

                                                            
                                                    ?>    
                                    <div class="col-4">
                                     
                                        <div class="list-group" id="list-tab" role="tablist">
                                        <?php
                                                       foreach($tab_rep as $key => $value):
                                                  $tab_name = $value['tab_name']
                                        ?>
                                            <a class="list-group-item list-group-item-action <?php echo $key == 0 ? 'active' : '' ?>"
                                               id="main-list-<?php echo $key+1 ?>" data-bs-toggle="list" href="#list-<?php echo $key+1 ?>"
                                               role="tab" aria-controls="list-<?php echo $key+1 ?>"><?php echo $tab_name ?></a>
                                           
                                               <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="nav-tabContent">
                                          <?php
                                                       foreach($tab_rep as $key => $value):
                                                  $tab_name = $value['tab_name']
                                         ?>
                                            <div class="tab-pane fade <?php echo $key == 0 ? 'active show' : '' ?>" id="list-<?php echo $key+1 ?>" role="tabpanel"
                                                 aria-labelledby="main-list-<?php echo $key+1 ?>">
                                                <div class="megamenu-list">
                                                    <div class="megamenu-row">
                                                        <div class="row">
                                                        <?php
                                                        if(isset($value['tab_item_repeater'])&&!empty($value['tab_item_repeater'])):
                                                        foreach($value['tab_item_repeater'] as $innerkey => $inner):
                                                            
                                                        ?>
                                                            <div class="col-md-6">
                                                            <a href="<?php echo $inner['item_name']['url'] ?>">
                                                                 
                                                                <div class="mega-menu-img">
                                                                    <img src="<?php echo $inner['item_icon']['url'] ?>" alt="<?php echo $inner['item_icon']['alt'] ?>">
                                                                </div>
                                                                <span><?php
                                                                 echo $inner['item_name']['title'] ?>
                                                                 </span>
                                                        </a>

                                                            </div>
                                                            

                                                        <?php endforeach; ?>   
                                                        <?php endif; ?>
                                                        </div>
                                                    </div>

                                                   
                                                    <?php
                                                    $audit =  get_sub_field('audit_field');
                                                    ?>
                                                    <div class="megmenu-right-content">
                                                        <?php if(isset($audit['image']['url'])&&!empty($audit['image']['url'])) : ?>
                                                        <div class="mega-menu-right-img">
                                                            <img src="<?php echo $audit['image']['url'] ?>"
                                                                 alt="<?php echo $audit['image']['alt'] ?>">
                                                        </div>
                                                        <?php endif;?>
                                                        <?php if(isset($audit['sub_title'])&&!empty($audit['sub_title'])) : ?>

                                                        <?php echo $audit['sub_title'] ?>
                                                        <?php endif; ?>
                                                        <?php 
                                                        $btn = $audit['button_button'];
                                                        
                                                        if(isset($btn)&&!empty($btn)): 
                                                            foreach($btn as $value) :
                                                        ?>
                                                            <div class="mega-btn">
                                                                <a href="<?php echo $value['url']['url'] ?>"><?php echo $value['text'] ?></a>
                                                            </div>
                                                            <?php 
                                                                endforeach;
                                                            endif;
                                                            ?>
                                                    </div>
                                                    
                                                </div>
                                            

                                            </div>
                                            <?php endforeach; ?>
                                            
                                        </div>
                                    </div>
                                       
                                     <?php
                                        endif; ?>
                                    <?php
                                      endwhile;
                                    endif; ?>
                                </div>

                            </div><!-- end row -->
                            <?php
                             endif; ?>
                        </li>
                       
                        <?php
                            endforeach;
                            ?>
                    </ul>

                </div>
            </div>
        </nav>
    </div>

</header>

<body>

<!-- header ends -->