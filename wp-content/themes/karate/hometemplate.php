<?php
/**
template name: Home Template
 */
get_header();
?>
<!-- section one -->
<section class="section-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
             <?php    $post_287 = get_post( 8 );
                $idpage = $post_287->ID;
                $titlepage = $post_287->post_title;
                $excertpage = $post_287->post_content;
                $post_thumbnail_id = get_post_thumbnail_id( $idpage );
                $cover = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
                $feat_image_url=$cover[0];
                $About_Summary = get_post_meta( $idpage, 'about_summary', false );
                $About_Summary_option=$About_Summary[0];

             ?>
                <h1>
                    ABOUT <i class="fa fa-user-o" aria-hidden="true"></i>
                    <span>OUR SCHOOL!</span>
                </h1>
                <p><?php echo $About_Summary_option;?></p>
                    <a href="<?php echo get_page_link(8); ?>" class="btn btn-primary">Read More</a>
            </div>
            <div class="col-md-6 wow fadeInRight mt50">
                <img src="<?php echo $feat_image_url; ?>" class="img-responsive" />
            </div>
        </div>

    </div>
</section>

<!-- section two -->
<section class="bg-black" data-parallax="scroll">
    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
       <?php  $args = array(

        'category' => 4,
        'order' => 'ASC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'category__not_in' => array( '1','5','6','7','8','9','20'),
        'showposts' => 100,

        );?>
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
            <?php

            $c = 0;
            $class = '';
            query_posts($args);
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            $c++;


            if ( $c == 1 ) $class .= ' active';
            else $class = '';
            ?>
                <!-- Quote 1 -->
                <div class="item <?php echo $class; ?>">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <?php
            endwhile;endif;
            wp_reset_query();
            ?>

        </div>
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
            <?php

            $c = 0;
            $class = '';
            query_posts($args);
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            $c++;
            if ( $c == 1 ) $class .= ' active';
            else $class = '';
            ?>
                <li data-target="#quote-carousel" data-slide-to="<?php echo $c; ?>" <?php echo $class; ?>></li>
                <?php
            endwhile;endif;
            wp_reset_query();
            ?>

        </ol>
    </div>
</section>

<!-- section three -->
<section class="well section-three" >
    <div class="container">
        <div class="row">
  
            <div class="col-xs-12 ">

                <h1>
                    our <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    <span>events</span>
                </h1>
            </div>

            <?php
             $post_51 = get_post( 51 );
                $idpage = $post_51->ID;
                $titlepage = $post_51->post_title;
                $excertpage = $post_51->post_content;
                $post_thumbnail_id = get_post_thumbnail_id( $idpage );
                $cover = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
                $feat_image_url=$cover[0];

?>
           <div class="col-md-4 col-xs-12">
               <h3><?php echo $titlepage;?></h3>
               <img class="img responsive" src="<?php echo $feat_image_url; ?>">
               <p><?php echo  $excertpage ?></p>
               <a class="btn btn-primary mt20" href="<?php echo get_page_link(51); ?>">Read More</a> </div>
            <?php
            $post_49 = get_post( 49 );
            $idpage = $post_49->ID;
            $titlepage = $post_49->post_title;
            $excertpage = $post_49->post_content;
            $post_thumbnail_id = get_post_thumbnail_id( $idpage );
            $cover = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
            $feat_image_url=$cover[0];

            ?>
            <div class="col-md-4 col-xs-12">
                <h3><?php echo $titlepage;?></h3>
                <p><?php echo  $excertpage ?></p>
                <a class="btn btn-primary mt20" href="<?php echo get_page_link(49); ?>">Read More</a> </div>

       <?php
            $args = array(
                'numberposts' => 1,
                'category' => 8,
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'draft, publish, future, pending, private',
                'category__not_in' => array( '4','1','6','7','5','9','20' ),
                'suppress_filters' => true
            );

            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
                /*  echo "<pre>";print_r($recent);echo "</pre>";*/
                $id=$recent["ID"];
                $title=$recent["post_title"];
                $content=$recent["post_content"];
                $excert=substr($content, 100,250);
                $post_thumbnail_id = get_post_thumbnail_id( $id );
                $blogimg = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
                $imagesrc=$blogimg[0];
                echo "<div class='col-md-4 col-xs-12'>";
                echo "<h3>".$title."</h3>";
                echo "<p class='text-justify'>$excert</p>";
                echo '<a class="btn btn-primary mt20" href="' . get_permalink($recent["ID"]). '">Read More</a> ';
                echo "</div>";
            }
            wp_reset_query();
            ?>

        </div>
    </div>
</section>

<!-- section four -->
<section class="section-four">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
                <h1>
                    our <i class="fa fa-camera" aria-hidden="true"></i>
                    <span>Gallery</span>
                </h1>
            </div>
           <div class="clearfix"></div>
            <div class="col-xs-12 mt30 mb30 ">

                <?php echo do_shortcode('[wonderplugin_gridgallery id=1]'); ?>
            </div>


        </div>

    </div>
</section>




<div class=" well section-six mb50">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
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
                'category__not_in' => array( '4','1','5','7','8','6','20' ),
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




                echo "<div class='col-sm-4 col-xs-12 text-center '><div class='thumbnail'>";
                echo '<iframe class="img-responsive" style=" width: 100%;"  src="' .$you_video_url. '" frameborder="0" allowfullscreen></iframe>';
                echo "<h2>".$title."</h2>";?>
                <?php
                echo "</div></div>";
            }
            wp_reset_query();
            ?>





            <!--ass="col-xs-4 text-center ">
           <div class="thumbnail">
               <iframe  src="https://www.youtube.com/embed/DTT_9aAbHEc" frameborder="0" allowfullscreen></iframe>
               <h2>title</h2>
           </div>

       </div>
       <div class="col-xs-4 text-center ">
           <div class="thumbnail">
               <iframe  src="https://www.youtube.com/embed/DTT_9aAbHEc" frameborder="0" allowfullscreen></iframe>
               <h2>title</h2>
           </div>-->

            </div>
                 <div class="col-xs-12  text-center">
                    <a class="btn btn-primary  " href="http://universalmartialarts.in/videos/">More Views</a>
                </div>

        </div>
    </div>
</div>
<!-- section five -->
<section class=" section-five mt50">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <h1>
                    our <i class="fa fa-user" aria-hidden="true"></i>
                    <span>trainers</span>
                </h1>
            </div>

            <?php
            $args = array(
                'numberposts' =>3,
                'category' => 6,
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'draft, publish, future, pending, private',
                'category__not_in' => array( '4','1','5','7','9','20' ),
                'suppress_filters' => true
            );

            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
                /*  echo "<pre>";print_r($recent);echo "</pre>";*/
                $id=$recent["ID"];
                $title=$recent["post_title"];

                $post_thumbnail_id = get_post_thumbnail_id( $id );
                $blogimg = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
                $imagesrc=$blogimg[0];

                $fb = get_post_meta( $id, 'facebook_link', false );
                $fb_option=$fb[0];

                $twitt = get_post_meta( $id, 'twitter_link', false );
                $twitt_option=$twitt[0];

                $linkdin = get_post_meta( $id, 'linkedin_link', false );
                $linkdin_option=$linkdin[0];

                $mail = get_post_meta( $id, 'mail_link', false );
                $mail_option=$mail[0];


                echo "<div class='col-md-3 col-sm-4 col-xs-12 text-center'>";
                echo '<a class="" href="' . get_permalink($recent["ID"]). '"><img src = "'.$imagesrc.'" class = "img-circle"></a>';
                echo "<h3>".$title."</h3>";?>
                <ul class="nav navbar-nav trainer">
                    <li><a href="<?php echo $fb_option;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $twitt_option;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $linkdin_option;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $mail_option;?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                </ul>
                <?php
                echo "</div>";
            }
            wp_reset_query();
            ?>


        </div>
    </div>
</section>


<?php get_footer(); ?>



























