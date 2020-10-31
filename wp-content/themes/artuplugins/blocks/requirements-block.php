<section class="requirements <?= esc_attr($block['className'])?>">
    <div class="container">
        <div class="requirements-inner" style="background-color: <?= get_field('main_color')?>; background-image: url(<?= get_field('background_image')?>)">
            <h2 class="requirements-title title"><?= get_field('title');?></h2>
            <div class="requirements-grid">
                <?php foreach (get_field('blocks') as $block):?>
                    <div class="requirements-item">
                        <div class="requirements-item__ic-container">
                            <div class="requirements-item__ic-wrapper">
                                <?php foreach ($block['images'] as $image):?>
                                <div class="requirements-item__ic"><img src="<?= $image['image']?>"></div>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <div class="requirements-item__text"><?= $block['text']?></div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>