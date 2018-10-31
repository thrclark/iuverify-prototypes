
<div class="modal fade" id="verify_privatedata" tabindex="-1" role="dialog" aria-labelledby="modalPaycheckLabel" aria-hidden="true">
    <div class="modal-dialog modal-error">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"> <i class="icon-error"></i> But wait...</h4>
            </div>
            <div class="modal-body">
                <div class="message">
                    <div class="message-content">
                        <p>There is sensitive data on this page that has been masked to protect your privacy. Please reveal and review this data prior to submitting your verification.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm reveal" data-dismiss="modal">Reveal sensitive data</button>
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" onclick="alert('Verification is now deferred, and user is redirected to application.');">Skip for now</button>
            </div>
        </div>
    </div>
</div>
