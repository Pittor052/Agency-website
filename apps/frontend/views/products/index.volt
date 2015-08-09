<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Thumbnail Gallery</h1>
        </div>


        {% if products and products is iterable %}
        {% for product in products %}
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <span class="">
                <?php echo $product->getName(); ?>
            </span>
            <a class="thumbnail" href="">
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
                <br><a href="http://store.dev/products/{{ product.id }}">read more...</a>
            </span>
        </div>
        <br/>
        <br/>
        {% endfor %}
        {% elseif products %}
        {% if products.getGallery() %}
        {{ products.getName() }}
        <img class="img-responsive" width="200" height="200"
             src="{{ products.getGallery().getName() }}" alt="">
        <p> <h4>Описание:</h4> {{ products.getDescription() }} </p>
        <p> <h4>В наличност:</h4>   {{ products.getAvailable() }} </p>
        <p> <h4>Цена:</h4> {{ products.getPrice() }} </p>
        {% else %}
        <img class="img-responsive" width="200" height="200"
             src="/img/system/default_product.jpg" alt="">
        {% endif %}
        {% endif %}
    </div>
</div>