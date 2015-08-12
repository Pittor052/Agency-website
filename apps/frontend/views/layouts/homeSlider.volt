{% for key, obj in contentList %}
    <li class="bg{{ key }}">
        {% if obj.getElementType() == 'slider' and obj.getContent() %}
            <h3 class="subtitle">{{ obj.getContent() }}</h3>
        {% endif %}
        {% for keyGallery, gallery in obj.getGallery() %}
            <img class="slide-img" src="{{ gallery.getName() }}" alt="Slide {{ keyGallery }}"/>
        {% endfor %}
    </li>
{% endfor %}