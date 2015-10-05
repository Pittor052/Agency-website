<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Products Gallery</h1>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">

            <?php foreach ($contentList as $obj) { ?>
                <?php if ($obj->getSection() == 'body' && $obj->getPosition() == 'center' && $obj->getElementType() == 'slider') { ?>
                    <?php echo $obj->getContent(); ?>

                    <?php foreach ($obj->getGallery() as $gallery) { ?>

                        <img class="img-responsive" width="200" height="200"
                             src="<?php echo $gallery->getName(); ?>" alt="">
                    <?php } ?>

                <?php } ?>
            <?php } ?>

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
                                 src="<?php echo $product->getGallery()->getName(); ?>" alt="">
                        <?php } else { ?>
                            <img class="img-responsive" width="200" height="200"
                                 src="/public/img/system/default_product.jpg" alt="">
                        <?php } ?>
                    </a>
            <span>
                <?php echo substr( $product->getDescription(),0, 40); ?>
                <br><a href="http://store.dev/products/<?php echo $product->id; ?>">read more...</a>
            </span>
                </div>
                <br/>
                <br/>
            <?php } ?>
        <?php } elseif ($products) { ?>
            <?php if ($products->getGallery()) { ?>

                <img class="img-responsive" width="200" height="200"
                     src=" <?php echo $products->getGallery()->getName(); ?> " alt="">
            <?php } else { ?>
                <img class="img-responsive" width="200" height="200"
                     src="/public/img/system/default_product.jpg" alt="">
            <?php } ?>

            <p> <h4>Име: <?php echo $products->getName(); ?> </h4>

            <p>

            <p><h4>Описание: <?php echo $products->getDescription(); ?> </h4>
            <?php if ($products->getAvailable() == 1) { ?>
                <p><h4>В наличност: Да </h4>
            <?php } else { ?>
                <p> <h4>В наличност:Не </h4>
            <?php } ?>
            <p> <h4>Цена: <?php echo $products->getPrice(); ?> лв.</h4>
        <?php } ?>
    </div>
</div>