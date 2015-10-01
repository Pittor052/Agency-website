<!--{% if flashSession.output()%}-->
<!--<div class="errorMessage">-->
<!--{{flashSession.output()}}-->
<!--</div>-->
<!--{% endif %}-->

<!--<?php if ($this->flashSession->output()) { ?>-->
<!--<div class="errorMessage"> <?php echo $this->flashSession->output() ?></div>-->
<!--<?php } ?>-->
<!--sign in-->
<div class="content-wrapper">
    <section class="content">
        <div class="col-sm-6" style="margin-left: 1%;">
            <form role="form" action="/authenticate" method="post">
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
                <button type="submit" class="btn btn-default">Sign in</button>
            </form>
        </div>
    </section>
</div>