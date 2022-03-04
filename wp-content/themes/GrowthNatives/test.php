<?php
if (have_rows('growth_flexible_content')):
    while (have_rows('growth_flexible_content')):
        the_row();
        ?>
        <?php
        if (get_row_layout() == 'case_studies'):

            $heading = get_sub_field('button_button');
            echo '<pre>';
            print_r($heading);
            echo '</pre>';
        ?>
           
           

        <?php
        endif;
        ?>


    <?php
    endwhile;
endif;
?>