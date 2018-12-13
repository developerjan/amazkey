<!--Modal: User Flow-->
<div class="modal fade container" id="userFlowModal" tabindex="-1" role="dialog" aria-labelledby="userFlowModal" aria-hidden="true">
    <div class="modal-dialog modal-fluid" role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Finish the steps to create your website</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="validation-errors alert-danger"></div>
                    @include('elements.user_flow.create-site-flow')
                </div>
            </div>
            <div class="modal-footer display-footer">
                <button type="button" class="btn btn-outline-warning waves-effect mr-auto" id="prev-step" style="display: none">&laquo; Go Back</button>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: User Flow-->