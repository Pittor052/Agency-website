<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Mailbox
                <small>13 new messages</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Mailbox</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <a href="compose.volt" class="btn btn-primary btn-block margin-bottom">Compose</a>

                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Folders</h3>

                            <div class="box-tools">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span
                                                class="label label-primary pull-right">12</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                                <li><a href="#"><i class="fa fa-filter"></i> Junk <span
                                                class="label label-warning pull-right">65</span></a></li>
                                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Labels</h3>

                            <div class="box-tools">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <?php if ((is_array($contactList) || ($contactList) instanceof Traversable)) { ?>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Inbox</h3>

                                <div class="box-tools pull-right">
                                    <div class="has-feedback">
                                        <input type="text" class="form-control input-sm" placeholder="Search Mail"/>
                                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                    </div>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <div class="mailbox-controls">
                                    <!-- Check all button -->
                                    <button class="btn btn-default btn-sm checkbox-toggle"><i
                                                class="fa fa-square-o"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    <div class="pull-right">
                                        1-50/200
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i>
                                            </button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i>
                                            </button>
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.pull-right -->
                                </div>

                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                        <?php foreach ($contactList as $obj) { ?>
                                            <tr>
                                                <td><input type="checkbox"/></td>
                                                <td class="mailbox-star"><a href="#"><i
                                                                class="fa fa-star text-yellow"></i></a>
                                                </td>
                                                <td class="mailbox-name"><a
                                                            href="/admin/mailbox/<?php echo $obj->getUid(); ?>"><?php echo $obj->getAddresses('from')['name']; ?></a>
                                                </td>
                                                <td class="mailbox-subject"
                                                    style="text-overflow: ellipsis;">
                                                    <b><?php echo $obj->getAddresses('from')['address']; ?></b>
                                                    
                                                </td>
                                                <td class="mailbox-attachment"></td>
                                                <td class="mailbox-date"><?php echo date('d-m-Y', $obj->getDate()); ?> </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- /.box-body -->
                                <div class="box-footer no-padding">
                                    <div class="mailbox-controls">
                                        <!-- Check all button -->
                                        <button class="btn btn-default btn-sm checkbox-toggle"><i
                                                    class="fa fa-square-o"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i>
                                            </button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                        <div class="pull-right">
                                            1-50/200
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-sm"><i
                                                            class="fa fa-chevron-left"></i>
                                                </button>
                                                <button class="btn btn-default btn-sm"><i
                                                            class="fa fa-chevron-right"></i>
                                                </button>
                                            </div>
                                            <!-- /.btn-group -->
                                        </div>
                                        <!-- /.pull-right -->
                                    </div>
                                </div>

                            </div>
                            <!-- /. box -->
                        </div>
                    <?php } elseif ($contactList) { ?>
                        <?php echo $this->partial('layouts/components/readMail'); ?>
                    <?php } ?>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="/templates/admin/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/templates/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="/templates/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="/templates/admin/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/templates/admin/dist/js/app.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/templates/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Page Script -->
    <script>
        $(function () {
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            $('.mailbox-messages input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });

            //Enable check and uncheck all functionality
            $(".checkbox-toggle").click(function () {
                var clicks = $(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                    $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("check");
                    $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
                }
                $(this).data("clicks", !clicks);
            });

            //Handle starring for glyphicon and font awesome
            $(".mailbox-star").click(function (e) {
                e.preventDefault();
                //detect type
                var $this = $(this).find("a > i");
                var glyph = $this.hasClass("glyphicon");
                var fa = $this.hasClass("fa");

                //Switch states
                if (glyph) {
                    $this.toggleClass("glyphicon-star");
                    $this.toggleClass("glyphicon-star-empty");
                }

                if (fa) {
                    $this.toggleClass("fa-star");
                    $this.toggleClass("fa-star-o");
                }
            });
        });
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="/templates/admin/dist/js/demo.js" type="text/javascript"></script>
</div>
