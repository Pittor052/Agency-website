<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <?php if ($products && (is_array($products) || ($products) instanceof Traversable)) { ?>
            <?php foreach ($products as $product) { ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <span class="">
             <br>   <?php echo $product->getName(); ?>
            </span>
                <a href="/admin/products/delete/<?php echo $product->getId(); ?>" >
                    <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                            class="fa fa-trash-o"></i> Delete
                    </button>
                </a>
                <a href="/admin/products/edit/<?php echo $product->getId(); ?>" >
                    <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                            class="fa fa-edit"></i> Edit
                    </button>
                </a>
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
            <br> <?php echo $products->getName(); ?>
            <br><br>
            <img class="img-responsive" width="200" height="200"
                 src="<?php echo $products->getGallery()->getName(); ?>" alt="">
            <a href="/admin/products/delete/<?php echo $products->getId(); ?>" >
                <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                        class="fa fa-trash-o"></i> Delete
                </button>
            </a>
            <a href="/admin/products/edit/<?php echo $products->getId(); ?>" >
                <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                        class="fa fa-edit"></i> Edit
                </button>
            </a>
            <?php } else { ?>
           <br> <?php echo $products->getName(); ?>
            <img class="img-responsive" width="200" height="200"
                 src="/img/system/default_product.jpg" alt="">
            <a href="/admin/products/delete/<?php echo $products->getId(); ?>" >
                <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                        class="fa fa-trash-o"></i> Delete
                </button>
            </a>
            <a href="/admin/products/edit/<?php echo $products->getId(); ?>" >
                <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                        class="fa fa-edit"></i> Edit
                </button>
            </a>
            <?php } ?>
            <br>
            <p> <h4>Описание:</h4> <?php echo $products->getDescription(); ?> </p>
            <p> <h4>В наличност:</h4> <?php echo $products->getAvailable(); ?> </p>
            <p> <h4>Цена:</h4> <?php echo $products->getPrice(); ?> </p>
            <?php } ?>
        </div>
    </div>
</div>