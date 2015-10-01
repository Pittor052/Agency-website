
<div class="content-wrapper">
    <section class="content">
        <div class="col-sm-6" style="margin-left: 1%;">
            <form role="form" action="/login" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                           placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword"
                           placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">GO</button>
            </form><br>
            <?php echo $email; ?><br>
            <?php echo $password; ?>
        </div>
    </section>
</div>