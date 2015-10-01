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
                    {% if obj.getPosition() == 'left' and obj.getElementType() =='text_box' and obj.getPageType() !== 'All' %}
                        <div class="row col-md-3 col-sm-6">
                            <div class="row">
                                <a href="#">{{ obj.getContent() }}</a>
                            </div>
                        </div>
                    {% elseif obj.getPosition() == 'center' and obj.getElementType() =='text_box' and  obj.getPageType() !== 'All' and obj.getSection() !=='footer' %}
                        <div class="row col-md-3 col-sm-6 col-sm-offset-1">
                            <div class="row">
                                <a href="#">{{ obj.getContent() }}</a>
                            </div>
                        </div>
                    {% elseif  obj.getPosition() == 'right' and obj.getElementType() =='text_box' and obj.getPageType() !== 'All' %}
                        <div class="row col-md-3 col-sm-6 col-sm-offset-1">
                            <div class="row">
                                <a href="#">{{ obj.getContent() }}</a>
                            </div>
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}
        </div>
    </div>
</div>

