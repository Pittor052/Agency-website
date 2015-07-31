<!-- START ACCORDION & CAROUSEL-->
<h2 class="page-header">Bootstrap Carousel</h2>
<div class="row">
    <div class="col-sm-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Carousel</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php foreach ($gallery as $key => $img) { ?>
                        <?php if ($key == 0) { ?>
                        <div class="item active">
                            <img src="<?php echo $img->name; ?>" alt="">
                        </div>
                        <?php } else { ?>
                        <div class="item">
                            <img src="<?php echo $img->name; ?>" alt="">
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <!--<div class="item active">-->
                            <!--<img src="/img/products/3/aq213oR_700b_v1.jpg" alt="First slide">-->
                            <!--<div class="carousel-caption">-->
                                <!--First Slide-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="item">-->
                            <!--<img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">-->
                            <!--<div class="carousel-caption">-->
                                <!--Second Slide-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="item">-->
                            <!--<img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">-->
                            <!--<div class="carousel-caption">-->
                                <!--Third Slide-->
                            <!--</div>-->
                        <!--</div>-->
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
<!-- END ACCORDION & CAROUSEL-->