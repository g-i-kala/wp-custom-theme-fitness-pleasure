<!-- Section Brands -->

<?php 
$brand_image_1 = get_theme_mod('brand_image_1');
$brand_image_2 = get_theme_mod('brand_image_2');
$brand_image_3 = get_theme_mod('brand_image_3');
$brand_image_4 = get_theme_mod('brand_image_4');
?>

<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_post_meta($image_id, '_wp_attachment_image_alt', true)); ?>">


<div class="mx-auto">
    <h2 class="w-1/2 text-[2rem] font-bold text-sm/20">Sweat supporters</h2>
    <div class="brands__wrapper grid grid-cols-2 md:grid-cols-4 gap-4 ">
        <div class="w-full flex justify-center content-center p-8">
            <img src = "<?= $brand_image_1 ?>" alt="brand image 1" />
        </div>
        <div class="w-full flex justify-center content-center p-8">
            <img src = "<?= $brand_image_2 ?>" alt="brand image 2" />
        </div>
        <div class="w-full flex justify-center content-center p-8 ">
            <img src = "<?= $brand_image_3 ?>" alt="brand image 3" />
        </div>
        <div class="w-full flex justify-center content-center p-8">
            <img src = "<?= $brand_image_4 ?>" alt="brand image 4" />
        </div>
    </div>
</div>