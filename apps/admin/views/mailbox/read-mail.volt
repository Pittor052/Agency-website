<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Read Mail</h3>

                        <div class="box-tools pull-right">
                            <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i
                                    class="fa fa-chevron-left"></i></a>
                            <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i
                                    class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="mailbox-read-info">
                            {%if contactList%}
                            {% if obj.getId() %}
                            {% for obj in contactList%}
                            <h3>{{obj.getTopic()}}</h3>
                            <h5>Name: {{obj.getName()}}</h5>
                            <h5>From: {{obj.getEmail()}}</h5>
                        </div>
                        <!-- /.mailbox-read-info -->
                        <div class="mailbox-controls with-border text-center">
                            <div class="btn-group">
                                <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i
                                        class="fa fa-trash-o"></i></button>
                                <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply"><i
                                        class="fa fa-reply"></i></button>
                                <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Forward"><i
                                        class="fa fa-share"></i></button>
                            </div>
                            <!-- /.btn-group -->
                            <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Print"><i
                                    class="fa fa-print"></i></button>
                        </div>
                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            <p>{{obj.getMsg()}}</p>


                        </div>
                        {%endfor%}
                        {%endif%}
                        {%endif%}
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    <div class="pull-right">
                        <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                        <button class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                    </div>
                    <button class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                    <button class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- ./wrapper -->



