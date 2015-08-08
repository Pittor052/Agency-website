<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Thumbnail Gallery</h1>
        </div>


        <?php if ($products && (is_array($products) || ($products) instanceof Traversable)) { ?>
            <?php foreach ($products as $product) { ?>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <span class="">
                <?php echo $product->getName(); ?>
            </span>
                    <a class="thumbnail" href="">
                        <?php if ($product->getGallery()) { ?>
                            <img class="img-responsive" width="200" height="200"
                                 src="<?php echo $product->getGallery()->getName()?>" alt="">
                        <?php } else { ?>
                            <img class="img-responsive" width="200" height="200"
                                 src="/img/system/default_product.jpg" alt="">
                        <?php } ?>
                    </a>
            <span>
                <?php echo substr($product->getDescription(),0, 40); ?>
                <br><a href="http://store.dev/products/<?php echo $product->id; ?>">read more...</a>
            </span>
                </div>
                <br/>
                <br/>
            <?php } ?>
        <?php } else { ?>
            <?php if ($products->getGallery()) { ?>
                <img class="img-responsive" width="200" height="200"
                     src="<?php echo $products->getGallery()->getName(); ?>" alt="">
            <?php } else { ?>
                <img class="img-responsive" width="200" height="200"
                     src="/img/system/default_product.jpg" alt="">
            <?php } ?>
        <?php } ?>
    </div>
</div>