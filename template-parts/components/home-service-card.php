<?php

$title = $args['title'];
$content = $args['content'];
$image = $args['image'];

?>

<div class="fppackages__box">
    <h3>
        <?php echo $title ?>
    </h3>
    <img src="<?php echo $image ?>" alt="Service Image" />
    <div class="fppackages__box-inclusions">

        <h5>
            <?php echo $content ?>
        </h5>
        <div class="fppackages-inner__right">
            <?php get_template_part(
                'template-parts/components/button',
                null,
                array(
                    'btnText' => 'BOOK NOW',
                    'btnLink' => '',
                )
            ); ?>
        </div>
    </div>
</div>