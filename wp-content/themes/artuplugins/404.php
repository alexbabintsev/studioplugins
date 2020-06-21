<?php
get_header();
?>
<main>
    <section class="unknown-page">
        <div class="container">
            <div class="unknown-page__content"><img src="<?= get_theme_file_uri( '/img/404.svg' )?>" alt="unknown-page">
                <p>Page not found</p><a href="<?= home_url( '/' ) ?>">Back to home page</a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
