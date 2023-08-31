<?php

$image = $args['image'];
$title = $args['title'];

?>

<div class="hover-card__item">
    <a href="#" class="hover-card__item-link" data-cursor="hover-card__item-link">
        <div class="hover-card__item-bg"></div>
        <div class="hover-card__item-title">
            <img src="<?php echo $image ?>" alt="Card Image" class="hover-card__item-img dark-icon" />
            <h4>
                <?php echo $title ?>
            </h4>
        </div>
    </a>
</div>