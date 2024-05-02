<?php get_header() ?>
<div class="page-wrapper">
    <div class="page-container">
        <main>
            <div class="page-title">
                <h1>
                    <?php the_title() ?>
                </h1>
            </div>
            <div>
                <article class="page-content">
                    <?php the_content() ?>
                </article>
            </div>

        </main>
    </div>
</div>
<?php get_footer() ?>