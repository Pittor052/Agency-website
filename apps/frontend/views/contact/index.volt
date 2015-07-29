<div class="row">
    <div class="col-sm-5 col-sm-offset-3">
        <!-- Contact Form -->
        <h3 class="text-center">Send Us a Message</h3>

        <div class="text-center  col-sm-offset-4">
            {% if flashSession.output()%}

            {{flashSession.error()}}

            {% endif %}
        </div>
        <div class="contact-form-wrapper">
            <form class="form-horizontal" role="form" method="POST" action="contact">
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label"><b>Your name</b></label>

                    <div class="col-sm-9">
                        <input class="form-control" id="Name" type="text" name="name" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact-email" class="col-sm-3 control-label"><b>Your Email</b></label>

                    <div class="col-sm-9">
                        <input class="form-control" id="contact-email" type="text" name="email" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact-message" class="col-sm-3 control-label"><b>Select Topic</b></label>

                    <div class="col-sm-9">
                        <select class="form-control" id="prependedInput" name="topic">
                            <option value="">Please select topic...</option>
                            <option value="general">General</option>
                            <option value="services">Services</option>
                            <option value="orders">Orders</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact-message" class="col-sm-3 control-label"><b>Message</b></label>

                    <div class="col-sm-9">
                        <textarea class="form-control" rows="5" id="contact-message" name="msg"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn pull-right">Send</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>