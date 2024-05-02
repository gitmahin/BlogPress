<?php
get_header();
the_post();
?>
<section class="post_container_section">
    <div class="single_post_body_wrap">
        <div class="leftSide_section">
            <main class="left_content_box">
                <article>
                    <div class="post_title">
                        <h1>
                            <?php the_title() ?>
                        </h1>
                    </div>
                    <ul>
                        <?php $cate = get_the_category($post->ID);
                        foreach ($cate as $category) {
                            ?>
                            <li>
                                <?php echo $category->name; ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <article class="post_content">
                        <?php the_content() ?>
                    </article>
                </article>
            </main>
            <div class="comment_section">
                <h3 class="comment_title">
                    Comment
                </h3>
                <div class="comment_box">
                    <?php comments_template() ?>
                </div>
            </div>
        </div>
        <div class="rightSide_section">
            <?php get_sidebar() ?>
        </div>
    </div>
</section>
<?php get_footer() ?>