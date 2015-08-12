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
</div>
</div>