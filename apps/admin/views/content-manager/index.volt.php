<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <?php echo $this->partial('layouts/forms/contentManagerForm'); ?>
            </div>
        </div>
        <div class="row">
            <?php foreach ($contentManager as $obj) { ?>
                <div class="col-sm-7 col-sm-offset-2">
                <span>
                  <p><?php echo $obj->getContent(); ?></p>
                    <p class="pull-right">
                        <a href="/admin/content-manager/edit/<?php echo $obj->getId(); ?>" class="btn btn-success">Edit</a>
                        <a href="/admin/content-manager/delete/<?php echo $obj->getId(); ?>" class="btn btn-danger">Delete</a>
                    </p>
                </span>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- jQuery 2.1.4 -->
    <script src="/templates/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script type="text/javascript">
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/public/templates/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/public/templates/admin/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="/public/templates/admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="/public/templates/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="/public/templates/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"
            type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="/public/templates/admin/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="/public/templates/admin/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="/public/templates/admin/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/public/templates/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"
            type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="/public/templates/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="/public/templates/admin/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/public/templates/admin/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/public/templates/admin/dist/js/pages/dashboard.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/public/templates/admin/dist/js/demo.js" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>
    <script src="/public/templates/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
    </script>
</div>
