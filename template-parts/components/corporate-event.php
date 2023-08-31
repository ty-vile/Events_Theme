<?php

$title = $args['title'];
$content = $args['content'];
$image = $args['image'];

?>

<div class="fpcorporate__box">
    <img src="<?php echo $image ?>" alt="Corporate Events Image" />
    <div class="fpcorporate__box-content">
        <h3>
            <?php echo $title ?>
        </h3>
        <h5>
            <?php echo $content ?>
        </h5>
        <div class="fppackages-inner__right">
            <?php get_template_part(
                'template-parts/components/button',
                null,
                array(
                    'btnText' => 'LEARN MORE',
                    'btnLink' => '',
                )
            ); ?>
        </div>
    </div>
</div>