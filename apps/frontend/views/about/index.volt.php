<div class="content-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                <?php foreach ($contentList as $obj) { ?>
                    <div class="row col-md-12 col-sm-12">
                        <div class="row">
                            <?php if ($obj->getPageType() == 'about' && $obj->getSection() !== 'footer') { ?>
                                <p class=""><?php echo $obj->getContent(); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>