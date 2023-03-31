<?php $thumb = get_the_post_thumbnail_url(); ?>

<div class=" overflow-hidden">
<div style="background-image: url('<?php echo $thumb; ?>'); " class="h-[500px] blur-sm bg-cover bg-full bg-banner-service ">
</div>
</div>

<div class="container mx-auto">

    <div style="background-image: url('<?php echo $thumb; ?>'); background-size: cover; background-position:center; overflow: hidden;"
        class="bg-blue-500 dark:bg-slate-800 text-slate-300 bg-banner-service-main -mt-[400px] rounded-sm relative z-50">


        <div class="flex flex-col w-full items-start justify-center h-[500px] mb-1 p-10 page-header rounded-sm">
            <h1 class="entry-title text-[50px] font-extrabold leading-tight mb-1 ">
                <? echo get_the_title(); ?>

            </h1>
            <div class="break-words w-full py-5">
                <? echo the_excerpt();?>
            </div>
            <button class="bg-red-500 px-5 py-3 text-white">Заказать</button>
        </div>

    </div>

</div>

