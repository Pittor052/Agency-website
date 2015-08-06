<div class="container">

    <div class="row">

        <div class="col-lg-12" >
            <h1 class="page-header">Thumbnail Gallery</h1>
        </div>


        {% if products %}
        {% for product in products %}
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <span class="">
                <?php echo $product->getName(); ?>
            </span>
                <a class="thumbnail" href="#">
                    {% if product.getGallery() %}
                        <img class="img-responsive" width="200" height="200"
                             src="<?php echo $product->getGallery()->getName()?>" alt="">
                    {% else %}
                        <img class="img-responsive" width="200" height="200"
                             src="/img/system/default_product.jpg" alt="">
                    {% endif %}
                </a>
            <span>
                <?php echo substr($product->getDescription(),0, 40); ?>
            </span>
            </div>
            <br/>
            <br/>
        {% endfor %}
        {% endIf %}
    </div>
</div>