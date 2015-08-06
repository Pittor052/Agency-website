<div class="container">

    <div class="row">

        <div align="center" class="col-lg-12">
            <h1 class="page-header">УСЛУГИ</h1>
            {% for obj in contentList %}
            {% if obj.getPageType() == 'services' %}
            {{ obj.getContent() }}
            {% endif %}
            {% endfor %}
        </div>
    </div>
</div>
