<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<style>
.blur {
	display: none;
	filter: blur(0px);
}
.mask {
	font-size: .875rem;
	letter-spacing: .25rem;
	color: #555;
}
</style>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top">
<div class="wrapper">
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/header2.php') ?>
<div class="main-content container" role="main">
    <div id="main-content">
        <?php include ('includes/instructions-top.php') ?>
        <div class="well vfy-section ng-scope" style="">
            <div class="loading-overlay fade-animation-8 ng-hide" ng-show="verify.liveDataLoadingStatus == 1" aria-hidden="true"></div>
            <div class="row">
                <div class="col-xs-6">
                    <h3 class="h4 ng-binding">Personal Information</h3>
                </div>
                <div class="col-xs-6"></div>
            </div>
            <p ng-bind-html="section.description" class="verify-desc ng-binding">
            <p>Emergency Contacts data for IU Employees is very important to include with your Personal Data Details. It’s used only in case of an emergency by Managers, Human Resources Offices and in some cases IU Police Department to notify designated family or friends. Please review your Emergency Contacts data: Name, Relationship, Phone and “Preferred” checkbox and make any necessary changes.</p>
            </p>
            <button class="btn btn-xs btn-default reveal" style="margin-top:1rem">Reveal sensitive data</button>
            <button class="btn btn-xs btn-default hidedata" style="margin-top:1rem; display:none">Hide sensitive data</button>
            <hr>
            <div class="form-horizontal">
                <div class="ng-scope">
                    <div class="form-group form-group-sm ng-scope" style="">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Address</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">1504 Walnut Drive</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span> </span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">City</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">Farmington</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span> </span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">County</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">Monroe</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">State</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding">IN</span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Postal</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding">47401</span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Country</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding">USA</span></span> </div>
                        </div>
                    </div>
                    <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsc%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FEL_EMPLOYEE_FL.HR_EE_ADDR_FL.GBL" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsc%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FEL_EMPLOYEE_FL.HR_EE_ADDR_FL.GBL"> Edit </a>
                        <hr>
                    </div>
                </div>
                <div class="ng-scope">
                    <div class="form-group form-group-sm ng-scope" style="">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Fed Allowances</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">6</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Tax Marital Status</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">M</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Fed Withholding Amt</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">$500</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                        </div>
                    </div>
                    <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsp%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FROLE_EMPLOYEE.PY_IC_W4.USA" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsp%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FROLE_EMPLOYEE.PY_IC_W4.USA"> Edit </a>
                        <hr>
                    </div>
                </div>
                <div class="ng-scope">
                    <div class="form-group form-group-sm ng-scope" style="">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Tax State</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding">IN</span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">State Allowances</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">6</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">State Withholding Amt</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">$500</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Local Withholding Amt</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">$500</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Locality</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">MONROE</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm ng-scope">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Locality Info</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding">Resident Locality as of 1/1 of current year</span></span> </div>
                        </div>
                    </div>
                    <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsp%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FROLE_EMPLOYEE.IU_HR_SS_WH4.GBL" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsp%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FROLE_EMPLOYEE.IU_HR_SS_WH4.GBL"> Edit </a>
                        <hr>
                    </div>
                </div>
                <div class="ng-scope">
                    <div class="form-group form-group-sm ng-scope" style="">
                        <div class="row">
                            <div class="col-sm-3"><span class="ng-binding">Preferred Emergency Contact</span>:</div>
                            <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding blur">Theresa Smithers, Other</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
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
            <fieldset id="field1">
                <legend class="sr-only">Verify</legend>
                <div class="radio">
                    <input id="question1" name="question" type="radio" class="with-font" value="sel">
                    <label for="question1" id="label1" class="lead">I have verified that the information on this page is currently accurate.</label>
                </div>
                <div class="radio">
                    <input id="question2" name="question" type="radio" class="with-font" value="sel">
                    <label for="question2" class="lead">I choose to verify this information later.<br>
                    </label>
                </div>
            </fieldset>
             <fieldset id="field2" style="display:none">
                <legend class="sr-only">Verify</legend>
                <div class="radio">
                    <input id="question3" name="question" type="radio" class="with-font" value="sel">
                    <label for="question3" id="label1" class="lead">I have verified that the information on this page is currently accurate.</label>
                </div>
                <div class="radio">
                    <input id="question4" name="question" type="radio" class="with-font" value="sel">
                    <label for="question4" class="lead">I choose to verify this information later.<br>
                    </label>
                </div>
            </fieldset>
            <div class="row">
                <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                    <button class="btn btn-lg btn-primary" id="submit" data-toggle="modal" data-target="#verify_error" disabled> Submit</button>
                    <button class="btn btn-lg btn-primary reveal" id="" data-toggle="" data-target="" > Reveal sensitive data </button>
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
    $(".reveal").click(function() {
        $(".mask").hide();
        $(".reveal").hide();
		$("#field1").hide();
		$("#field2").show();
        $(".blur, .hidedata").show();
        $("#submit").removeAttr("disabled");
	
    });

    $(".hidedata").click(function() {
        $(".mask").show();
        $(".reveal").show();
		$("#field1").show();
		$("#field2").hide();
        $(".blur, .hidedata").hide();
        $("#submit").attr("disabled", "disabled");
	
    });
</script> 
<script>
    $(function() {
        $('#question1').click(function() {
            if ($(this).is(':checked')) {
                $("#submit").attr("disabled", "disabled");
            }
        });
    });
</script> 
<script>
    $(function() {
        $('#question2').click(function() {
            if ($(this).is(':checked')) {
                $("#submit").removeAttr("disabled");
            }
        });
    });
</script>
</body>
</html>
