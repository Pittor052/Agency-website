<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6 col-xs-6 col-sm-offset-3">
                <h2>Connect your email!</h2>
                <div class="box box-primary">
                    <form role="form" action="/admin/mailbox/connect" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="username">Username</label><br/>
                                <input type="text" class="form-control" name="username"><br/>
                                <label for="password">Password</label><br/>
                                <input type="password" class="form-control" name="password"><br/>
                                <label for="imap">Imap</label><br/>
                                <input type="text" class="form-control" name="imap"><br/>
                                <label for="imap_port">Imap port</label><br/>
                                <input type="text" class="form-control" name="imap_port"><br/>
                                <label for="smtp">Smtp</label><br/>
                                <input type="text" class="form-control" name="smtp"><br/>
                                <label for="smtp_port">Smtp port</label><br/>
                                <input type="text" class="form-control" name="smtp_port"><br/>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>