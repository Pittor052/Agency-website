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
        <?php } elseif ($products) { ?>
              <?php echo $products->getName(); ?>
        <?php if ($products->getGallery()) { ?>

        <img class="img-responsive" width="200" height="200"
             src="<?php echo $products->getGallery()->getName(); ?>" alt="">
        <?php } else { ?>
        <img class="img-responsive" width="200" height="200"
             src="/img/system/default_product.jpg" alt="">
        <?php } ?>
              <p> <h4>Описание:</h4> <?php echo $products->getDescription(); ?> </p>
        <p> <h4>В наличност:</h4>   <?php echo $products->getAvailable(); ?> </p>
        <p> <h4>Цена:</h4> <?php echo $products->getPrice(); ?> </p>
        <?php } ?>
    </div>
</div>