<div class="content-wrapper">
    <div class="container">
        <div class="row">
            {% if products and products is iterable %}
            {% for product in products %}
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <span class="">
             <br>   <?php echo $product->getName(); ?>
            </span>

                <a href="/admin/products/delete/{{product.getId()}}" >
                    <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                            class="fa fa-trash-o"></i> Delete
                    </button>
                </a>
                <a href="/admin/products/edit/{{product.getId()}}" >
                    <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                            class="fa fa-edit"></i> Edit
                    </button>
                </a>
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
                <br><a href="http://store.dev/admin/products/{{ product.id }}">read more...</a>
                 <p class="pull-right">
                  <a href="/admin/products/delete/{{product.getId()}}" >
                    <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                            class="fa fa-trash-o"></i> Delete
                    </button>
                 </a>
                </p>
            </span>
            </div>
            {% endfor %}

            {% elseif products %}
            {% if products.getGallery() %}
            <br> {{products.getName()}}
            <br><br>
            <img class="img-responsive" width="200" height="200"
                 src="{{ products.getGallery().getName()}}" alt="">
            <a href="/admin/products/delete/{{products.getId()}}" >
                <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                        class="fa fa-trash-o"></i> Delete
                </button>
            </a>
            <a href="/admin/products/edit/{{products.getId()}}" >
                <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                        class="fa fa-edit"></i> Edit
                </button>
            </a>
            {% else %}
           <br> {{products.getName()}}
            <img class="img-responsive" width="200" height="200"
                 src="/img/system/default_product.jpg" alt="">
            <a href="/admin/products/delete/{{products.getId()}}" >
                <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                        class="fa fa-trash-o"></i> Delete
                </button>
            </a>
            <a href="/admin/products/edit/{{products.getId()}}" >
                <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                        class="fa fa-edit"></i> Edit
                </button>
            </a>
            {% endif %}
            <br>
            <p> <h4>Описание:</h4> {{ products.getDescription() }} </p>
            <p> <h4>В наличност:</h4> {{ products.getAvailable() }} </p>
            <p> <h4>Цена:</h4> {{ products.getPrice() }} </p>
            {% endif %}
        </div>
    </div>
</div>