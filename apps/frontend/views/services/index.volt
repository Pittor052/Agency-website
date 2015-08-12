<div class="content-wrapper">
    <div class="section">
        <div class="container">
            <div class="row">
                {% for obj in contentList %}
                    <div class="row col-md-12 col-sm-12">
                        <div class="row">
                            {% if obj.getPageType() == 'services' %}
                                <p class="glyphicon-font">{{ obj.getContent() }}</p>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>