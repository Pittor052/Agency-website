<!-- Homepage Slider -->
<div class="homepage-slider">
    <div id="sequence">
        <ul class="sequence-canvas">
            <!-- Slide 1 -->
            <?php if ($contentList && $this->length($contentList) > 0) { ?>
                <?php echo $this->partial('layouts/homeSlider'); ?>
            <?php } else { ?>
                <?php echo $this->partial('layouts/defaultSlider'); ?>
                <!-- End Slide 3 -->
            <?php } ?>
        </ul>
        <div class="sequence-pagination-wrapper">
            <ul class="sequence-pagination">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Homepage Slider -->git pull

<!-- Press Coverage -->
<div class="section">
    <div class="container">
        <div class="row">
            <?php if ($contentList && $this->length($contentList) > 0) { ?>
                <?php foreach ($contentList as $key => $obj) { ?>
                    <?php if ($obj->getPosition() == 'left' && $obj->getElementType() == 'text_box' && $obj->getPageType() !== 'All') { ?>
                        <div class="row col-md-3 col-sm-6">
                            <div class="row">
                                <a href="#"><?php echo $obj->getContent(); ?></a>
                            </div>
                        </div>
                    <?php } elseif ($obj->getPosition() == 'center' && $obj->getElementType() == 'text_box' && $obj->getPageType() !== 'All') { ?>
                        <div class="row col-md-3 col-sm-6 col-sm-offset-1">
                            <div class="row">
                                <a href="#"><?php echo $obj->getContent(); ?></a>
                            </div>
                        </div>
                    <?php } elseif ($obj->getPosition() == 'right' && $obj->getElementType() == 'text_box' && $obj->getPageType() !== 'All') { ?>
                        <div class="row col-md-3 col-sm-6 col-sm-offset-1">
                            <div class="row">
                                <a href="#"><?php echo $obj->getContent(); ?>t</a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>

