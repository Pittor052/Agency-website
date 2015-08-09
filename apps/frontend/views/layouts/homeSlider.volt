{% for key, obj in contentList %}
    <li class="bg{{ key }}">
        <h3 class="subtitle">{{ obj.content }}</h3>
        {% for keyGallery, gallery in obj.getGallery() %}
            {#<?php var_dump($gallery->getName());exit;?>#}
            <img class="slide-img" src="{{ gallery.getName() }}" alt="Slide {{ keyGallery }}"/>
        {% endfor %}
    </li>
{% endfor %}