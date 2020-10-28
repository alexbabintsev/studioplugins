<section class="nitrozime <?= esc_attr($block['className'])?>">
    <div class="container nitrozime__container">
        <div class="nitrozime__titles">
            <h2 class="title nitrozime__title"><?= get_field('title');?></h2>
            <h3 class="nitrozime__subtitle"><?= get_field('subtitle');?></h3>
        </div>
        <div class="nitrozime-cards">
            <?php $i = 0;foreach (get_field('blocks') as $block):$i++;?>
                <div class="nitrozime-cards__item nitrozime-cards__item-<?=$i?>">
                    <div class="nitrozime-cards__item-top">
                        <?= $block['top_text']?>
                    </div>
                    <div class="nitrozime-cards__item-bottom">
                        <?= $block['bottom_text']?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>