<div class="box box-primary">
    <?php if ($url) { ?>
    <form role="form" action="<?php echo $url; ?>" method="POST" enctype="multipart/form-data">
        <?php } else { ?>
        <form role="form" action="/admin/content-manager/create" method="POST" enctype="multipart/form-data">
            <?php } ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="file">Избери файл</label>
                    <input type="file" id="file" name="file">

                    <div class="form-group"><br>
                        <label for="category">Изберете страница!</label>
                        <select class="form-control" name="page_type" id="category">
                            <option value="home">Home</option>
                            <option value="about">About</option>
                            <option value="services">Services</option>
                        </select>
                        <label for="category">Изберете секция!</label>
                        <select class="form-control" name="section" id="section">
                            <option value="header">Top</option>
                            <option value="body">Middle</option>
                            <option value="footer">Bottom</option>
                        </select>
                        <label for="category">Изберете разположение!</label>
                        <select class="form-control" name="position" id="position">
                            <option value="left">Left</option>
                            <option value="center">Center</option>
                            <option value="right">Right</option>
                        </select>
                        <label for="category">Изберете тип на елемента!</label>
                        <select class="form-control" name="element_type" id="element_type">
                            <option value="text_box">Text box</option>
                            <option value="slider">Slider</option>
                        </select>
                    </div>
                </div>
                <?php echo $this->partial('layouts/components/ckEditor'); ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
</div>