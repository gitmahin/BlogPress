<?php get_header() ?>
<div class="loop-post-d-wrapper">
    <div class="loop-post-container">
        <?php
        if (have_posts()) { ?>
            <?php
            while (have_posts()) {
                the_post()
                    ?>
                <div class="ca-post-box">
                    <div class="ca-post-thumbnail">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail() ?>
                        </a>
                    </div>
                    <div class="ca-post-content">
                        <ul>
                            <?php $cate = get_the_category($post->ID);
                            foreach ($cate as $category) {
                                ?>
                                <li>
                                    <?php echo $category->name; ?>
                                </li>
                            <?php } ?>
                        </ul>
                        <h2>
                            <?php the_title() ?>
                        </h2>
                        <p>
                            <?php the_excerpt() ?>
                        </p>
                        <p class="ca-post-date">
                            <?php echo get_the_date() ?>
                        </p>
                    </div>
                    <div class="ca-post-button">
                        <a href="<?php the_permalink() ?>"><button>
                                Read more
                            </button></a>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <h1 style="margin-bottom: 500px;">No Results For This Search😢</h1>
        <?php }
        ?>
    </div>
    <?php catin_pagination() ?>
</div>
<?php get_footer() ?>