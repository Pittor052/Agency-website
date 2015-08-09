<form role="form" action="/admin/gallery/upload" method="POST" enctype="multipart/form-data">
    <div class="box-body">
        <div class="form-group">
            <label for="file">Избери файл</label>
            <input type="file" id="file" name="file">
            <p class="help-block">Избери снимка!</p>
            <div class="form-group"><br>
                <label for="category">Въведи категория!</label>
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
            <label for="name">Въведи име! </label>
            <input type="text" class="form-control" id="name" placeholder="Име">
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>