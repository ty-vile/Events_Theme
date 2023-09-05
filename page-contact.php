<!-- WORDPRESS TEMPLATE FOR BLOG PAGE -->
<?php

// postID
$postID = 12;
// featuredImageURL
$featured_image_url = get_the_post_thumbnail_url($postID);

get_header(); ?>


<section class="cobanner">
    <img class="cobanner-img" src="<?php echo $featured_image_url ?>" alt="Banner Image" />
    <div class="cobanner-overlay"></div>
    <div class="container">
        <div class="cobanner-inner">
            <div class="cobanner-inner__left">
                <h3 class="cobanner-inner__left-contact">CONTACT</h3>
                <h3 class="cobanner-inner__left-phone">Phone</h3>
                <div class="cobanner-inner__left-link">
                    <h5>Ali Badiei </h5>
                    <a href="tel:0402 555 005">0402 555 005</a>
                </div>
                <div class="cobanner-inner__left-link">
                    <h5>Matt Malyschko </h5>
                    <a href="0432 146 512">0432 146 512</a>
                </div>
                <h3 class="cobanner-inner__left-follow">Follow</h3>
                <div class="cobanner-inner__left-link">
                    <div class="cobanner-inner__left-link-social"><img
                            src="http://bcenew.local/wp-content/uploads/2023/09/foot-insta-icon.svg"
                            alt="Instagram Icon" /></div>
                    <div class="cobanner-inner__left-link-social"><img
                            src="http://bcenew.local/wp-content/uploads/2023/09/foot-fb-icon.svg" alt="Facebook Icon" />
                    </div>
                </div>
            </div>
            <div class="cobanner-inner__right">RIGHT</div>
        </div>
    </div>
</section>


<?php get_footer(); ?>