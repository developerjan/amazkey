<div id="register-form-steps">
    <div class="register-step" id="step1" style="display: none;">
        <h5>Step 1 - Select Site Type and Enter Site Title</h5>
        @include('elements.user_flow.forms.site-form')
    </div>
    <div class="register-step" id="step2" style="display: none">
        <h5>Step 2 - Select Skin for your Site</h5>
        @include('elements.user_flow.forms.site-skin')
    </div>
    <div class="register-step" id="step3" style="display: none">
        <h5>Step 3 - Select Color Palette for your Site</h5>
        @include('elements.user_flow.forms.site-color')
    </div>
    <div class="register-step" id="step4" style="display: none">
        <h5>Step 4 - Select Typography</h5>
        @include('elements.user_flow.forms.site-typography')
    </div>
    <div class="register-step" id="step5" style="display: none">
        <h5>Step 5 - Select Layout</h5>
        @include('elements.user_flow.forms.site-layout')
    </div>
    <div class="register-step" id="step6" style="display: none">
        <h5>Step 6 - Enter your Email, Password and Site Url</h5>
        <p>the site url will serve as subdomain name: e.g. if you put "test", your subdomain will be "test.zitsy.com"</p>
        @include('elements.user_flow.forms.site-login')
    </div>
    <div id="created-site-link" style="display: none">
        <h2>Congratulations!!</h2>
        <p>Follow this <a href="#" class="created-site-link" target="_blank">link</a> to check your newly created website </p>
        <div class="next-step text-right">
            <button class="btn btn-md btn-primary" onclick="changeStep()"> Proceed to Next Steps » </button>
        </div>
    </div>
    <div class="register-step" id="step7" style="display: none">
        <h5>Step 7 - Blocks</h5>
        <p>Choose blocks that will be featured on your website</p>
        @include('elements.user_flow.forms.site-blocks')
    </div>
</div>