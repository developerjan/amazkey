<div class="step-container" id="login-form-container">
    <form id="site-login-form" data-parsley-validate>
        <div class="md-form">
            <input type="text" name="first_name" id="first-name" class="form-control" data-parsley-required>
            <label for="first-name">First Name </label>
        </div>

        <div class="md-form">
            <input type="text" name="last_name" id="last-name" class="form-control" data-parsley-required>
            <label for="last-name">Last Name </label>
        </div>

        <div class="md-form">
            <input type="email" name="email" id="email" class="form-control" data-parsley-required>
            <label for="email">Email</label>
        </div>

        <div class="md-form">
            <input type="password" name="password" id="password" class="form-control" data-parsley-required>
            <label for="password">Password </label>
        </div>

        <div class="md-form">
            <input type="text" name="site_url" id="site-url" class="form-control" data-parsley-required>
            <label for="site-url">Site Url </label>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-md btn-primary">
                Create site
            </button>
        </div>
    </form>
</div>