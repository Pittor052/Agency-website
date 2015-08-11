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
<!-- End Homepage Slider -->

<!-- Press Coverage -->
<div class="section">
    <div class="container">
        <div class="row">
            <?php if ($contentList && $this->length($contentList) > 0) { ?>
                <?php foreach ($contentList as $key => $obj) { ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <?php if ($obj->position == 'left') { ?>
                                <a href="#">obj.content</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <?php if ($obj->position == 'center') { ?>
                                <a href="#">obj.content</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <?php if ($obj->position == 'right') { ?>
                                <a href="#">obj.content</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">

        <div align="center" class="col-lg-12">
            <h1 class="page-header"></h1>
            <?php foreach ($contentList as $obj) { ?>
                <?php if ($obj->getPageType() == 'home') { ?>
                    <?php echo $obj->getContent(); ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>

