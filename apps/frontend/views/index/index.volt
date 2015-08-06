<!-- Homepage Slider -->
<div class="homepage-slider">
    <div id="sequence">
        <ul class="sequence-canvas">
            <!-- Slide 1 -->
            <li class="bg4">
                <!-- Slide Title -->
                <h2 class="title">Responsive</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">It looks great on desktops, laptops, tablets and smartphones</h3>
                <!-- Slide Image -->
                <img class="slide-img" src="img/homepage-slider/slide1.png" alt="Slide 1"/>
            </li>
            <!-- End Slide 1 -->
            <!-- Slide 2 -->
            <li class="bg3">
                <!-- Slide Title -->
                <h2 class="title">Color Schemes</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">Comes with 5 color schemes and it's easy to make your own!</h3>
                <!-- Slide Image -->
                <img class="slide-img" src="img/homepage-slider/slide2.png" alt="Slide 2"/>
            </li>
            <!-- End Slide 2 -->
            <!-- Slide 3 -->
            <li class="bg1">
                <!-- Slide Title -->
                <h2 class="title">Feature Rich</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">Huge amount of components and over 30 sample pages!</h3>
                <!-- Slide Image -->
                <img class="slide-img" src="img/homepage-slider/slide3.png" alt="Slide 3"/>
            </li>
            <!-- End Slide 3 -->
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
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <a href="#">info about the agency</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <a href="#">more info</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <a href="#">maby add links</a>
                </div>
            </div>
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

