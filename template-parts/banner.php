<?php $thumb = get_the_post_thumbnail_url(); ?>


<div class="">


    <div style="<?php if (is_category()) {
        echo "background-image: url('$thumb'); background-size: cover;";
    } ?>" class="<?php if (is_front_page()) {
         echo "bg-red-500 dark:bg-slate-800 text-white ";
     } elseif (is_category()) {
         echo "bg-blue-600 dark:bg-slate-800 text-white ";
     } else {
         echo "bg-blue-500 dark:bg-slate-800 text-white ";
     }

     ?> ">




        <div class="container mx-auto">
            <div class="h-[300px] flex flex-col items-center justify-center">
                <h1 class="w-full entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1">

                    <?php
                    if (is_category()) {

                        echo get_queried_object()->name;
                    } 
                    
                                
                    else {
                        echo get_the_title();
                       
                    }

                    ?>

                </h1>

                <p class="break-words w-full py-5">


                    <?php if (is_category()) {
                        echo the_archive_description();
                    } ?>



                </p>
            </div>

        </div>

    </div>