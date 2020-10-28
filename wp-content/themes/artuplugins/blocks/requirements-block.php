<section class="requirements <?= esc_attr($block['className'])?>">
    <div class="container">
        <div class="requirements-inner" style="background-color: <?= get_field('main_color')?>; background-image: url(<?= get_theme_file_uri( '/img/requirements/bg-blue.svg' )?>)">
            <h2 class="requirements-title title"><?= get_field('title');?></h2>
            <div class="requirements-grid">
                <?php foreach (get_field('blocks') as $block):?>
                    <div class="requirements-item">
                        <div class="requirements-item__ic-container">
                            <div class="requirements-item__ic-wrapper">
                                <div class="requirements-item__ic"><img src="<?= $block['image']?>"></div>
                            </div>
                        </div>
                        <div class="requirements-item__text"><?= $block['text']?></div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>