<div class="container">

    <div class="row">

        <div align="center" class="col-lg-12">
            <h1 class="page-header">ЗА ПОГРЕБАЛНА АГЕНЦИЯ БОЛАР</h1>
            <?php foreach ($contentList as $obj) { ?>
            <?php if ($obj->getPageType() == 'about') { ?>
            <?php echo $obj->getContent(); ?>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
