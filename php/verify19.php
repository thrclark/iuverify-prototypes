<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<style>
.privatedata {
	display: noneee;
}
.mask {
	font-size: .875rem;
	letter-spacing: .25rem;
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
            	
            <div class="alert alert-warning" role="alert" style="margin-bottom:0px"><strong style="margin-bottom:1rem; display:block">Privacy note</strong>
                <p>This page contains items of personally sensitive data, and are hidden to protect your privacy. Please unmask these fields to continue with your verification.</p>
                <button class="btn btn-xs btn-primary reveal" style="margin-top:1rem">Unmask sensitive data</button>
                <button class="btn btn-xs btn-default" id="skipfornow" style="margin-top:1rem" onclick="alert('Design note - verification is now deferred, and user is redirected to application.');">Verify later</button>
                <button class="btn btn-xs btn-default hidedata" style="margin-top:1rem; display:none">Hide sensitive data</button>
            </div>
            <div class="well vfy-section ng-scope" style="">
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="h4 ng-binding">Personal Information</h3>
                    </div>
                    <div class="col-xs-6"></div>
                </div>
                <p ng-bind-html="section.description" class="verify-desc ng-binding"> Emergency Contacts data for IU Employees is very important to include with your Personal Data Details. It’s used only in case of an emergency by Managers, Human Resources Offices and in some cases IU Police Department to notify designated family or friends. Please review your Emergency Contacts data: Name, Relationship, Phone and “Preferred” checkbox and make any necessary changes. </p>
                <hr>
                <div class="form-horizontal">
                    <div class="ng-scope">
                        <div class="form-group form-group-sm ng-scope" style="">
                            <div class="row">
                                <div class="col-sm-3"><span class="ng-binding">Address</span>:</div>
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">1504 Walnut Drive</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope">
                            <div class="row">
                                <div class="col-sm-3"><span class="ng-binding">City</span>:</div>
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">Farmington</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span> </span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope">
                            <div class="row">
                                <div class="col-sm-3"><span class="ng-binding">County</span>:</div>
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">Monroe</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
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
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">6</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope">
                            <div class="row">
                                <div class="col-sm-3"><span class="ng-binding">Tax Marital Status</span>:</div>
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">M</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope">
                            <div class="row">
                                <div class="col-sm-3"><span class="ng-binding">Fed Withholding Amt</span>:</div>
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">$500</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
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
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">6</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope">
                            <div class="row">
                                <div class="col-sm-3"><span class="ng-binding">State Withholding Amt</span>:</div>
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">$500</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope">
                            <div class="row">
                                <div class="col-sm-3"><span class="ng-binding">Local Withholding Amt</span>:</div>
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">$500</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope">
                            <div class="row">
                                <div class="col-sm-3"><span class="ng-binding">Locality</span>:</div>
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">MONROE</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
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
                                <div class="col-sm-9"> <span class="ng-scope"><span class="ng-binding privatedata" style="display:none;">Theresa Smithers, Other</span> <span class="mask"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></span></span> </div>
                            </div>
                        </div>
                        <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsc%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FEL_EMPLOYEE_FL.HR_EMERG_CNTCT_FL.GBL" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://hrself.iu.edu/login/login?cassvc=IU&amp;instance=PH1PRD&amp;url=https%3A%2F%2Fhrself.iu.edu%2Fpsc%2FHRSELF%2FEMPLOYEE%2FHRMS%2Fc%2FEL_EMPLOYEE_FL.HR_EMERG_CNTCT_FL.GBL"> Edit </a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submission">
                <?php include ('includes/instructions-bottom.php') ?>
                <fieldset class="fieldset1" style="display:none">
                    <legend class="sr-only">Verify</legend>
                    <div class="radio" style="display:none">
                        <input id="question1" name="question" type="radio" class="with-font" value="sel">
                        <label for="question1" class="lead">I have verified that the information on this page is currently accurate.</label>
                    </div>
                    <div class="radio" style="display:none">
                        <input id="question2" name="question" type="radio" class="with-font" value="sel">
                        <label for="question2" class="lead">I choose to verify this information later. </label>
                    </div>
                </fieldset>
                <div class="row fieldset1" style="">
                    <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                        <button class="btn btn-lg btn-primary" id="submit1_0" data-toggle="" data-target="" disabled style="display:none"> Submit</button>
                        <button class="btn btn-lg btn-primary" id="submit1_1" data-toggle="" data-target=""  style="display:"> Unmask sensitive data</button>
                        
                      <button class="btn btn-lg btn-default" id="skipfornow2" onclick="alert('Design note - verification is now deferred, and user is redirected to application.');">Verify later</button>
                        
                        
                        <button class="btn btn-lg btn-primary" id="submit1_2" data-toggle="" data-target="" onclick="alert('Design note - verification is now deferred, and user is redirected to application.');"  style="display:none"> Submit</button>
                    </div>
                </div>
                <fieldset class="fieldset2" style="display:none">
                    <legend class="sr-only">Verify</legend>
                    <div class="radio">
                        <input id="question3" name="question" type="radio" class="with-font" value="sel">
                        <label for="question3" class="lead">I have verified that the information on this page is currently accurate.</label>
                    </div>
                    <div class="radio">
                        <input id="question4" name="question" type="radio" class="with-font" value="sel">
                        <label for="question4" class="lead">I choose to verify this information later. </label>
                    </div>
                </fieldset>
                <div class="row fieldset2" style="display:none">
                    <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                        <button class="btn btn-lg btn-primary" id="submit2" data-toggle="" data-target="" disabled onclick="alert('Design note - verification is now deferred/completed, and user is redirected to application.');"> Submit</button>
                    </div>
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
		$(".alert").slideUp();
		$("#skipfornow").hide();
		$(".fieldset1").hide();
        $(".fieldset2").show();
        $(".privatedata").show();
    });
    $("#submit1").click(function() {
        $(".alert").show();
    });
</script> 
<script>
    $(document).ready(function() {
        $('#question1').click(function() {
            if ($(this).is(':checked')) {
                $("#submit1_1").show();
                $("#submit1_0").hide();
				$("#submit1_2").hide();
				$("#submit1_1").removeAttr("disabled");
            }
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#question2').click(function() {
            if ($(this).is(':checked')) {
                $("#submit1_1").hide();
                $("#submit1_2").show();
				$("#submit1_0").hide();
				//$(".alert").hide();
				$("#submit1_2").removeAttr("disabled");
            }
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#question3').click(function() {
            if ($(this).is(':checked')) {
				$("#submit2").removeAttr("disabled");
            }
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#question4').click(function() {
            if ($(this).is(':checked')) {
				$("#submit2").removeAttr("disabled");
            }
        });
    });
</script> 
<script>
    $("#submit1_1").click(function() {
        $(".mask").hide();
        $(".reveal").hide();
		
		
		$("#submit1_1").hide();
		$(".fieldset2").show();
		$("#submit2").show();
		$(".alert").slideUp();
		$("#skipfornow, #skipfornow2").hide();
		$(".fieldset1").hide();
        $(".radio").show();
        $(".privatedata").show();
		
    });
	
	$("#submit1_1").click(function() {
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
</script>
</body>
</html>
