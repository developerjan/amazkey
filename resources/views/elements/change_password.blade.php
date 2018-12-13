<form id="change-password-form" data-parsley-validate>
    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" name="password" id="password" class="form-control" data-parsley-required>
        <label for="password">New Password</label>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" name="confirm_password" id="confirm-password" class="form-control"
               data-parsley-required data-parsley-equalto="#password">
        <label for="confirm-password">Confirm new password</label>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-default">Change Password</button>
    </div>
</form>