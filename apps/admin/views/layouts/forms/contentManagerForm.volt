<div class="box box-primary">
    <form role="form" action="/admin/content-manager/create" method="POST" enctype="multipart/form-data">
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
                </div>
            </div>
            {{ partial("layouts/components/ckEditor") }}
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>