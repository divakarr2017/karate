<?php
/**
template name: Youvideos
 */

get_header(); ?>
<div class="about-bg mt90"></div>
<!-- section one -->
<section class="container mt50 mb50">
    <div class="row">

            <div class="col-md-12 col-xs-12">
                <h1>
                    our <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Introduction</span>
                </h1>
            </div>

            <?php
            $args = array(
                'numberposts' =>3,
                'category' => 9,
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'draft, publish, future, pending, private',
                'category__not_in' => array( '4','1','5','7','8','6' ),
                'suppress_filters' => true
            );

            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
                /*  echo "<pre>";print_r($recent);echo "</pre>";*/
                $id=$recent["ID"];
                $title=$recent["post_title"];

                ;

                $video_url = get_post_meta( $id, 'video_url', false );
                $you_video_url=$video_url[0];




                echo "<div class='col-xs-4 text-center '><div class='thumbnail'>";
                echo '<iframe class="img-responsive"  src="' .$you_video_url. '" frameborder="0" allowfullscreen></iframe>';
                echo "<h2>".$title."</h2>";?>
                <?php
                echo "</div></div>";
            }
            wp_reset_query();
            ?>



        </div>
   </section>




<?php get_footer(); ?>
