<!DOCTYPE html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<html class="no-js lt-ie9 lt-ie8">
<html class="no-js lt-ie9">
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BOLAR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    {{ assets.outputCss('header') }}

    <script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
        your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a>
    to
    improve your experience.</p>

<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="index.volt"> <img src="img/logos/logo.png"
                                                                    alt="BOLAR"></a>
                </li>
                <li class="active">
                    <a href="/index">Home</a>
                </li>
                <li>
                    <a href="/services">Services</a>
                </li>
                <li>
                    <a href="/products">Products</a>
                </li>
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    <a href="/contact">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
{{ content() }}
<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Navigate</h3>
                <ul class="no-list-style footer-navigate-section">
                    <li><a href="/index">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-footer col-md-4 col-xs-6">
                <h3>Contacts</h3>

                <p class="contact-us-details">
                    {% for obj in contentList %}
                        {% if obj.getSection() == 'footer'  and obj.getPosition() == 'center'  and obj.getElementType() == 'text_box' %}
                            {{ obj.getContent() }}
                        {% endif %}
                    {% endfor %}
                </p>
            </div>
            <div class="col-footer col-md-2 col-xs-6">
                <h3>Stay Connected</h3>
                <ul class="footer-stay-connected no-list-style">
                    <li>
                        {% for obj in contentList %}
                            {% if obj.getSection() == 'footer'  and obj.getPosition() == 'right' and obj.getElementType() == 'text_box' %}
                                {{ obj.getContent() }}
                            {% endif %}
                        {% endfor %}
                        <a href="https://www.facebook.com/pages/%D0%9F%D0%90-%D0%91%D0%BE%D0%BB%D0%B0%D1%80/1448085492170894?fref=ts"
                           class="facebook"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">&copy; 2015 Borderless-Professionals. All rights reserved.</div>
            </div>
        </div>
    </div>
</div>

<!-- Javascripts -->
{#<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>#}
<script>window.jQuery || document.write('<script src="/js/jquery-1.9.1.min.js"><\/script>')</script>
{{ assets.outputJs('footer') }}

</body>
</html>