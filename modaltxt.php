<button type="button" class="btn btn-sm btn-lg btn-modal" data-toggle="modal" data-target="#myModal" data-tab="login" style="float:right;">join us</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="margin-top: 10px; padding-top: 30px;">
<li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Account Login</a></li>
<li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Create an Account</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="login">
<div class="modal-header">
<h5>If you already have an online account, please enter your email address and password.</h5>
</div>
<div class="modal-body">
<form data-parsley-validate>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Email" data-parsley-trigger="change" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" data-parsley-trigger="change" required>
    </div>
    <button type="submit" class="btn btn-grey">Log in Now</button>
</form>
</div>
<div class="modal-footer">
<h5>Forgot your password?</h5>
<p><a class="" role="button" data-toggle="collapse" href="#forgot-password-collapse" aria-expanded="false" aria-controls="forgot-password-collapse">Click here</a></p>

<div class="collapse" id="forgot-password-collapse">
    <h5>Password Assistance</h5>
    <p>Please enter the email address you used to create your account, and we will send a new password.</p>
    <form>
        <div class="form-group">
            <label for="forgot-password-email">Email address</label>
            <input type="email" class="form-control" id="forgot-password-email" placeholder="Email">
        </div>
        <button type="submit" class="btn btn-grey">Send me my password</button>
    </form>
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="register">
<div class="modal-header">
<h5>New Account Registration</h5>
</div>
<div class="modal-body">
<form class="row">
    <div class="form-group col-sm-6">
        <label for="first-name">First Name</label>
        <input type="text" class="form-control" id="first-name" placeholder="First Name">
    </div>
    <div class="form-group col-sm-6">
        <label for="last-name">Last Name</label>
        <input type="text" class="form-control" id="last-name" placeholder="Last Name">
    </div>
    <div class="checkbox col-xs-12">
        <label>
            <input type="checkbox" id="customer-type"> Already a Customer?
        </label>
    </div>
    <div class="new-customer clearfix">
        <div class="form-group col-sm-6">
            <label for="email-address">Email Address</label>
            <input type="email" class="form-control" id="email-address" placeholder="Email">
        </div>
        <div class="form-group col-sm-6">
            <label for="confirm-first-name">Confirm Email Address</label>
            <input type="email" class="form-control" id="confirm-first-name" placeholder="Email">
        </div>
        <div class="form-group col-sm-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group col-sm-6">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Password">
        </div>
        <small class="col-xs-12">Password must be a minimum of 8 characters and contain at least 1 number and 1 letter.</small>
        <div class="checkbox col-xs-12">
            <label>
                <input type="checkbox"> I would like to receive special wine offers, shipment tracking info and order status updates
            </label>
        </div>
        <div class="form-group col-sm-12">
            <label for="company-name">Company Name</label>
            <input type="text" class="form-control" id="company-name" placeholder="Company Name">
        </div>
        <div class="form-group col-sm-12">
            <label for="address-one">Address 1</label>
            <input type="text" class="form-control" id="address-one" placeholder="House #, Street">
        </div>
        <div class="form-group col-sm-12">
            <label for="address-two">Address 2</label>
            <input type="text" class="form-control" id="address-two" placeholder="Apt./Unit #">
        </div>
        <div class="form-group col-sm-3">
            <label for="zip-code">Zip Code</label>
            <input type="tel" class="form-control" id="zip-code" placeholder="5 digit zip">
        </div>
        <div class="form-group col-sm-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" placeholder="City, Town">
        </div>
        <div class="form-group col-sm-3">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" placeholder="State">
        </div>
        <div class="form-group col-sm-6">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Phone number">
        </div>
    </div>
    <div class="existing-customer clearfix">
        <div class="form-group col-sm-6">
            <label for="customer-number">Customer #:</label>
            <input type="tel" class="form-control" id="customer-number" placeholder="Your Customer Number">
        </div>
        <div class="form-group col-sm-6">
            <label for="zip-code">Zip Code</label>
            <input type="tel" class="form-control" id="zip-code" placeholder="5 digit zip">
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-grey create-account">Create Account</button>
        <button type="submit" class="btn btn-grey verify-account hide">Verify Account</button>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
