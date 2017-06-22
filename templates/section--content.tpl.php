<section <?php print $attributes; ?>>
    <?php $containerClass = $full_width?"sh-container":"container";?>
    <div class="<?php print $containerClass;?>">
        <div class="row">
            <?php var_dump($content); die(); ?>
        </div>
    </div>
</section>