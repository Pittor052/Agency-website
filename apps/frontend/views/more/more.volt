<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Thumbnail Gallery</h1>
        </div>
        {% if more %}
        {% for more in product_model%}
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <span class="">
               {{ more.getName() }}
            </span>
            <a class="thumbnail" href="">
                {% if more.getGallery() %}
                <img class="img-responsive" width="200" height="200"
                     src="<?php echo $product_model->getGallery()->getName()?>" alt="">
                {% else %}
                <img class="img-responsive" width="200" height="200"
                     src="/img/system/default_product.jpg" alt="">
                {% endif %}
            </a>
            <span>
                {{ more.getDescription() }}
            </span>
        </div>
        <br/>
        <br/>
        {% endfor %}
        {% endIf %}
    </div>
</div>