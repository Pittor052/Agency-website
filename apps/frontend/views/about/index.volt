<div class="container">

    <div class="row">

        <div align="center" class="col-lg-12">
            <h1 class="page-header">ЗА ПОГРЕБАЛНА АГЕНЦИЯ БОЛАР</h1>
            {% for obj in contentList %}
            {% if obj.getPageType() == 'about' %}
            {{ obj.getContent() }}
            {% endif %}
            {% endfor %}
        </div>
    </div>
</div>
