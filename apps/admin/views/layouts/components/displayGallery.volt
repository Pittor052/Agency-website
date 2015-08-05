<!-- START ACCORDION & CAROUSEL-->
<h2 class="page-header">Bootstrap Carousel</h2>
<div class="row">
    <div class="col-sm-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Carousel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        {% for key,img in gallery%}

                        {%if key==0%}
                        <div class="item active">
                            <img src="{{img.name}}" alt="">
                        </div>
                        {%else%}
                        <div class="item">
                            <img src="{{img.name}}" alt="">
                        </div>
                        {%endif%}
                        {%endfor%}
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>
            </div>
            <div class="btn-group">
                <a href="/admin/delete/gallery/{{ img.id }}">
                    <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete" value="id"  method="POST">
                        <i class="fa fa-trash-o"></i></button>
                </a>
            </div>

            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div><!-- /.row -->
<!-- END ACCORDION & CAROUSEL-->