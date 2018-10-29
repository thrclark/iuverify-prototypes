<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top">
<div class="wrapper">
    <?php include ('includes/brand-header2.php') ?>
    <?php include ('includes/header2.php') ?>
    <div class="main-content container" role="main">
        <div id="main-content">
            <?php include ('includes/instructions-top.php') ?>
            <div ng-repeat="section in verify.verification.sections" class="well vfy-section ng-scope" style="">
                <div class="loading-overlay fade-animation-8 ng-hide" ng-show="verify.liveDataLoadingStatus == 1" aria-hidden="true"></div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="h4 ng-binding" ng-bind="section.name">Personal Information</h3>
                    </div>
                    <div class="col-xs-6"></div>
                </div>
                <p ng-bind-html="section.description" class="verify-desc ng-binding">
                <p>Emergency Contacts data for IU Employees is very important to include with your Personal Data Details. It’s used only in case of an emergency by Managers, Human Resources Offices and in some cases IU Police Department to notify designated family or friends. Please review your Emergency Contacts data: Name, Relationship, Phone and “Preferred” checkbox and make any necessary changes.</p>
                </p>
                <hr>
                <div class="form-horizontal">
                    <div ng-repeat="group in section.fieldGroups" class="ng-scope">
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields" style="">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Address</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">1504 Walnut Drive</span> <a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">City</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">Farmington</span> <a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">County</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">Monroe</span> <a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">State</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">IN</span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Postal</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">47401</span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Country</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">USA</span></span> </div>
                            </div>
                        </div>
                        <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsc%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FEL_EMPLOYEE_FL.HR_EE_ADDR_FL.GBL" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsc%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FEL_EMPLOYEE_FL.HR_EE_ADDR_FL.GBL"> Edit </a>
                            <hr>
                        </div>
                    </div>
                    <div ng-repeat="group in section.fieldGroups" class="ng-scope">
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields" style="">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Fed Allowances</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">6</span> <a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Tax Marital Status</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">M</span> <a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Fed Withholding Amt</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">$500</span><a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsp%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FROLE_EMPLOYEE.PY_IC_W4.USA" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsp%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FROLE_EMPLOYEE.PY_IC_W4.USA"> Edit </a>
                            <hr>
                        </div>
                    </div>
                    <div ng-repeat="group in section.fieldGroups" class="ng-scope">
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields" style="">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Tax State</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">IN</span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">State Allowances</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">6</span> <a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">State Withholding Amt</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">$500</span><a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Local Withholding Amt</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">$500</span><a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Locality</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">MONROE</span><a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Locality Info</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">Resident Locality as of 1/1 of current year</span></span> </div>
                            </div>
                        </div>
                        <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsp%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FROLE_EMPLOYEE.IU_HR_SS_WH4.GBL" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsp%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FROLE_EMPLOYEE.IU_HR_SS_WH4.GBL"> Edit </a>
                            <hr>
                        </div>
                    </div>
                    <div ng-repeat="group in section.fieldGroups" class="ng-scope">
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields" style="">
                            <div class="row">
                                <div class="col-sm-3"><span ng-bind="field.label" class="ng-binding">Preferred Emergency Contact</span>:</div>
                                <div class="col-sm-9"> <span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding blur">Theresa Smithers, Other</span><a href="#" class="unmask" style="font-style:italic;padding-left: 5px;"><i class="fa fa-eye"></i> <span class="sr-only"> view</span></a></span> </div>
                            </div>
                        </div>
                        <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsc%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FEL_EMPLOYEE_FL.HR_EMERG_CNTCT_FL.GBL" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsc%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FEL_EMPLOYEE_FL.HR_EMERG_CNTCT_FL.GBL"> Edit </a>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="overlay fade-animation ng-hide" ng-show="section.showOverlay" aria-hidden="true">
                    <button type="button" class="btn btn-primary btn-lg" ng-click="verify.refresh(section.uniqueKey, group.uniqueKey)"> <i class="fa fa-refresh" aria-hidden="true"></i> Refresh </button>
                </div>
            </div>
            <div class="submission">
                <?php include ('includes/instructions-bottom.php') ?>
                <div class="radio">
                    <input id="box1" type="checkbox" class="with-font" />
                    <label for="box1" class="lead">I have verified that the information on this page is currently accurate.</label>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                        <button class="btn btn-lg btn-primary" id="submit" data-toggle="modal" data-target="#verify_error"> Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
    <?php include ('modal/verify-error.php') ?>
    <script>
    $(document).ready(function() {
        $(".edit-group").click(function() {
            $(event.target).closest('.vfy-section').prepend(" <div class='overlay'></div><a href='#' class='btn btn-primary btn-lg refresh'><i class='fa fa-refresh' aria-hidden='true'></i> Refresh</a>");
            $(".refresh").click(function() {
                $(".overlay, .refresh").fadeOut("fast");
                $(".updated").css("background", "#ecf8ff");

                $(".updated .form-control-static ").append("<span class='small text-muted' style='font-style:italic'> (updated)</span> ");
            });
        });
    });
</script> 



<script>

    $(".unmask").click(function(event) {
        event.preventDefault();
        $(this).hide();
		$(this).siblings().css( "filter", "blur(0px)" );
    });
</script>



</div>
</body>
</html>
