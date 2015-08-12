<div class="row">
    <!-- /.col -->

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Read Mail</h3>

            <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool"
                   data-toggle="tooltip" title="Previous"><i
                        class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool"
                   data-toggle="tooltip" title="Next"><i
                        class="fa fa-chevron-right"></i></a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="mailbox-read-info ">
                <h3>Topic: {{contactList.getTopic()}}</h3>
                <h5>Name: {{contactList.getName()}}</h5>
                <h5>From: {{contactList.getEmail()}}</h5>


                <!-- /.mailbox-read-info -->
                <div class="mailbox-read-message">
                    <h3>Message: </h3><br><br><p>{{contactList.getMsg()}}</p>
                </div>


            </div>
        </div>
        <div class="box-footer">
            <div class="pull-right">
                <button class="btn btn-default"><i
                        class="fa fa-reply"></i> Reply
                </button>
                <button class="btn btn-default"><i
                        class="fa fa-share"></i> Forward
                </button>
            </div>
            <a href="/admin/mailbox/delete/contact/{{ contactList.getId() }}" >
            <button class="btn btn-default" data-toggle="tooltip" title="Delete"  method="POST"><i
                    class="fa fa-trash-o"></i> Delete
            </button>
                </a>
            <button class="btn btn-default"><i class="fa fa-print"></i>
                Print
            </button>
        </div>
        <!-- /.box-footer -->
    </div>
</div>
