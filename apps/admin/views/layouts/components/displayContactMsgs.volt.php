<div class="content-wrapper">
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
            <!-- /.mailbox-read-message -->
            <div class="box-body no-padding">
                <div class="mailbox-read-info" >
                    <?php foreach ($contactList as $obj) { ?>
                    <?php echo $obj->getId; ?>
                    <h4>*Topic:  <?php echo $obj->getTopic(); ?></h4>
                    <h5>From:  <?php echo $obj->getEmail(); ?> <span
                            class="mailbox-read-time pull-right">15 Feb. 2015 11:03 PM</span>
                    </h5>

                    <h3>*Name : <?php echo $obj->getName(); ?></h3>
                    <!-- /.mailbox-controls -->
                    <div class="mailbox-read-message">
                        <h4>*message : <?php echo $obj->getMsg(); ?></h4>

                    </div>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                        <a href="/admin/delete/contact/<?php echo $obj->getId(); ?>" >
                            <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"  method="POST">
                                <i class="fa fa-trash-o"></i></button>
                        </a>
                        <a href="#">
                        <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply">
                            <i class="fa fa-reply"></i></button></a>
                        <a href="#">
                        <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Forward">
                            <i class="fa fa-share"></i></button></a>
                    </div>
                    <!-- /.btn-group -->
                    <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                        <i class="fa fa-print"></i></button>
                </div>
                <?php } ?>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>