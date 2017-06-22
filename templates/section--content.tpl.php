<section <?php print $attributes; ?>>
	<?php $containerClass = $full_width?"sh-container":"container";?>
	<div class="<?php print $containerClass;?>">
		<div class="row">
            <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
                <div class="region region-content col-xs--12 col-sm--12 col-md-8 col-lg-8 contextual-links-region jobs-tabs">
                    <?php print render($page['content']); ?>
                </div>
                <div class="col-xs--12 col-sm--12 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <?php print render($page['jir_horizontal_sidebar']); ?>
                        </div>
                        <div class="region region-sidebar-first col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <?php print render($page['sidebar_first']); ?>
                        </div>
                        <div class="region region-sidebar-second col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <?php print render($page['sidebar_second']); ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="region region-content col-xs--12 col-sm--12 col-md-12 col-lg-12 contextual-links-region jobs-tabs">
                    <?php print render($page['content']); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>