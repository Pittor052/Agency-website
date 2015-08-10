<!-- Homepage Slider -->
<div class="homepage-slider">
    <div id="sequence">
        <ul class="sequence-canvas">
            <!-- Slide 1 -->
            {% if  contentList and contentList|length > 0 %}
                {{ partial("layouts/homeSlider") }}
            {% else %}
                {{ partial("layouts/defaultSlider") }}
                <!-- End Slide 3 -->
            {% endif %}
        </ul>
        <div class="sequence-pagination-wrapper">
            <ul class="sequence-pagination">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Press Coverage -->
<div class="section">
    <div class="container">
        <div class="row">
            {% if  contentList and contentList|length > 0 %}
                {% for key, obj in contentList %}
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            {% if obj.position == 'left' %}
                                <a href="#">obj.content</a>
                            {% endif %}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            {% if obj.position == 'center' %}
                                <a href="#">obj.content</a>
                            {% endif %}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            {% if obj.position == 'right' %}
                                <a href="#">obj.content</a>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
</div>
<div class="container">

    <div class="row">

        <div align="center" class="col-lg-12">
            <h1 class="page-header"></h1>
            {% for obj in contentList %}
                {% if obj.getPageType() == 'home' %}
                    {{ obj.getContent() }}
                {% endif %}
            {% endfor %}
        </div>
    </div>
</div>
<!-- Press Coverage -->

<!-- Services -->

