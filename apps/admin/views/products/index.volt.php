<div class="content-wrapper">
    <div class="container">
        <div class="row">
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
                <br><a href="http://store.dev/admin/products/<?php echo $product->id; ?>">read more...</a>
            </span>
                    </div>
                <?php } ?>

            <?php } elseif ($products) { ?>
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
</div>