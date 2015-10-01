<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Products Gallery</h1>
        </div>


        {% for product in products %}
        {% if product.getCat() == 1%}


        <br><a href="http://store.dev/products/{{ product.cat }}">Ковчези</a>


        {% elseif product.getCat() == 2%}


        <br><a href="http://store.dev/products/{{ product.cat }}">Некролози</a>

        {% elseif product.getCat() == 3%}


        <br><a href="http://store.dev/products/{{ product.cat }}">Паметници</a>

        {% elseif product.getCat() == 4%}


        <br><a href="http://store.dev/products/{{ product.cat }}">Гравири</a>

        {% elseif product.getCat() == 5%}


        <br><a href="http://store.dev/products/{{ product.cat }}">Кръстове и мюсюлмански надгробни знаци</a>

        {% elseif product.getCat() == 6%}

        <br><a href="http://store.dev/products/{{ product.cat }}">Венци</a>
        
        {% elseif product.getCat() == 7%}


        <br><a href="http://store.dev/products/{{ product.cat }}">Драперии</a>

        {% elseif product.getCat() == 8%}


        <br><a href="http://store.dev/products/{{ product.cat }}">Други</a>



        {% endif %}
        {% endfor %}


        {% if products and products is iterable %}
        {% for product in products %}
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <span class="">
                {{ product.getName() }}
            </span>
            <a class="thumbnail" href="">
                {% if product.getGallery() %}
                <img class="img-responsive" width="200" height="200"
                     src="{{ product.getGallery().getName() }}" alt="">
                {% else %}
                <img class="img-responsive" width="200" height="200"
                     src="/public/img/system/default_product.jpg" alt="">
                {% endif %}
            </a>
            <span>
                <?php echo substr( $product->getDescription(),0, 40); ?>
                <br><a href="http://store.dev/products/{{ product.id }}">read more...</a>
            </span>
        </div>
        <br/>
        <br/>
        {% endfor %}
        {% elseif products %}
        {% if products.getGallery() %}

        <img class="img-responsive" width="200" height="200"
             src=" {{ products.getGallery().getName() }} " alt="">
        {% else %}
        <img class="img-responsive" width="200" height="200"
             src="/public/img/system/default_product.jpg" alt="">
        {% endif %}

        <p> <h4>Име: {{ products.getName() }} </h4>

        <p>

        <p><h4>Описание: {{ products.getDescription() }} </h4>
        {% if products.getAvailable() == 1 %}
        <p><h4>В наличност: Да </h4>
        {% else %}
        <p> <h4>В наличност:Не </h4>
        {% endif %}
        <p> <h4>Цена: {{ products.getPrice() }} лв.</h4>
        {% endif %}
    </div>
</div>