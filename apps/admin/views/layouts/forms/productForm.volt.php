<div class="box box-primary">
    <?php if ($url) { ?>
    <form role="form" action="<?php echo $url; ?>" method="POST" enctype="multipart/form-data">
        <?php } else { ?>
        <form role="form" action="/admin/products/add" method="POST" enctype="multipart/form-data">
            <?php } ?>
            <div class="box-body">
                <div class="form-group">
                    <label for="file">Избери файл</label>
                    <input type="file" id="file" name="file">

                    <p class="help-block">Избери снимка на продукта!</p>

                    <div class="form-group"><br>
                        <label for="category">Въведи категория на продукта</label>
                        <select class="form-control" name="category" id="category">
                            <option value="1">Koвчези</option>
                            <option value="2">Некролози</option>
                            <option value="3">Паметници</option>
                            <option value="4">Гравири</option>
                            <option value="5">Други</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Въведи Име на продукта</label>
                    <input type="text" class="form-control" id="name" placeholder="Име" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Въведи описание на продукта</label>
                    <input type="text" class="form-control" id="description" placeholder="Описание" name="description">
                </div>
                <div class="form-group">
                    <label for="price">Въведи цена на продукта</label>
                    <input type="text" class="form-control" id="price" placeholder="Цена" name="price">
                </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
</div>
