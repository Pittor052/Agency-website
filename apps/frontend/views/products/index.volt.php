<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Thumbnail Gallery</h1>
        </div>


        <?php if ($products) { ?>
        <?php foreach($products as $product){ ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <span class="">
                <?php echo $product->getName(); ?>
            </span>
            <a class="thumbnail" href="#">

                <img class="img-responsive" width="200" height="200" src="<?php echo $product->getGallery()->getName()?>" alt="">
            </a>
            <span>
                <?php echo substr($product->getDescription(),0, 40); ?>
            </span>
        </div>
        <br/>
        <br/>
        <?php } ?>
        <?php } ?>


    </div>
</div>