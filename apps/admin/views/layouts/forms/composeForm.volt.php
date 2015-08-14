<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Compose New Message</h3>
    </div>
    <form role="form" action="/admin/mailbox/send" method="POST" enctype="multipart/form-data">
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <input class="form-control" name="email" placeholder="From:"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="sendTo" placeholder="To:"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="subject" placeholder="Subject:"/>
            </div>
            <div class="form-group">
                    <textarea id="#compose-textarea" name="body" class="form-control" style="height: 300px">

                    </textarea>
            </div>
            <div class="form-group">
                <div class="btn btn-default btn-file">
                    <i class="fa fa-paperclip"></i> Attachment
                    <input type="file" name="attachment"/>
                </div>
                <p class="help-block">Max. 32MB</p>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="pull-right">
                <button class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send
                </button>
            </div>
            <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>