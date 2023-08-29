<?php

$title = $args['title'];
$content = $args['content'];
$btnText = $args['btnText'];
$btnLink = $args['btnLink'];
$leftImage = $args['leftImage'];
$rightImage = $args['rightImage'];

?>

<section class="ar">
    <div class="ar-inner">
        <div class="ar-inner__left">
            <?php if (!empty($title)): ?>
                <h3>
                    <?php echo $title ?>
                </h3>
            <?php endif; ?>
            <?php if (!empty($content)): ?>
                <p>
                    <?php echo $content ?>
                </p>
            <?php endif; ?>
            <?php if (!empty($btnText)): ?>
                <?php get_template_part(
                    'template-parts/components/button',
                    null,
                    array(
                        'btnText' => $btnText,
                        'btnLink' => $btnLink,
                    )
                ); ?>
            <?php endif; ?>
        </div>
        <div class="ar-inner__right">
            <img alt="Description Image" src="<?php echo $rightImage ?>" />
        </div>
    </div>
</section>


<!-- WITHOUT BORDER -->

<!-- <section class="ar">
    <div class="ar-left">
        <?php if (!empty($title)): ?>
            <h3>
                <?php echo $title ?>
            </h3>
        <?php endif; ?>
        <?php if (!empty($content)): ?>
            <p>
                <?php echo $content ?>
            </p>
        <?php endif; ?>
        <?php if (!empty($btnText)): ?>
            <?php get_template_part(
                'template-parts/components/button',
                null,
                array(
                    'btnText' => $btnText,
                    'btnLink' => $btnLink,
                )
            ); ?>
        <?php endif; ?>
    </div>
    <div class="ar-right">
        <img alt="Description Image" src="<?php echo $rightImage ?>" />
    </div>
</section> -->