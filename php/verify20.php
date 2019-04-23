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
            <div class="alert alert-warning" role="alert" style="margin-bottom:15px"><strong style="margin-bottom:1rem; display:block">Privacy note</strong>
            
            
            
            
            
            
            
            
            
             <div class="row" id="">
                    <div class="col-sm-6">
                        <div class="panel panel-default" style=" background-color:transparent;">
                            <div class="panel-body" style="  display: flex;flex-direction: column;justify-content: space-between; min-height: 150px;">
                                <p>This page contains items of personally sensitive data, and are hidden to protect your privacy. Please unmask these fields to continue with your verification.</p>
                                <button type="button" class="btn btn-primary btn-xs reveal" style="margin-top:auto; width:fit-content">Unmask sensitive data</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default" style=" background-color:transparent;">
                            <div class="panel-body" style="  display: flex;flex-direction: column;justify-content: space-between; min-height: 150px;">
                                <p>You may skip this verification for now. You have 3 deferral(s) remaining.</p>
                                <button type="button" class="btn btn-default btn-xs" style="margin-top:auto; width:fit-content">Verify later</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
             
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h4" style="margin-top:0px">Verify Your Data</h2>
                    <p> On occasion, Indiana University requires verification of personal information regarding your affiliation with the university. The item(s) presented on this page have been marked as needing your review for accuracy. </p>
                    <p>This is an additional, optional paragraph that may be customized as needed. This paragraph can include <a href="#">links</a> that could take the user to help content, or <a href="#">contact information</a>. </p>
                </div>
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
                <div class="row" id="demojs_revealskipscreen">
                    <div class="col-sm-6">
                        <div class="panel panel-default" style=" background-color:transparent;">
                            <div class="panel-body" style="  display: flex;flex-direction: column;justify-content: space-between; min-height: 180px;">
                                <p>This page contains items of personally sensitive data, and are hidden to protect your privacy. Please unmask these fields to continue with your verification.</p>
                                <button type="button" class="btn btn-primary btn-lg btn-block reveal" style="margin-top:auto">Unmask sensitive data</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default" style=" background-color:transparent;">
                            <div class="panel-body" style="  display: flex;flex-direction: column;justify-content: space-between; min-height: 180px;">
                                <p>You may skip this verification for now. You have 3 deferral(s) remaining.</p>
                                <button type="button" class="btn btn-default btn-lg btn-block" style="margin-top:auto">Verify later</button>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="row" id="demojs_verifyscreen"  style="display:none">
                    <div class="col-sm-6">
                        <div class="panel panel-default" style=" background-color:transparent;">
                            <div class="panel-body" style="  display: flex;flex-direction: column;justify-content: space-between; min-height: 180px;">
                                <div class="radio" style="margin-top:0px">
                                    <input ng-model="verify.verified" id="question4" name="checked" type="checkbox" class="with-font" aria-invalid="false">
                                    <label for="question4" ng-bind="verify.verifyMessage">I have verified that the above information is up to date and correct.</label>
                                </div>
                                <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top:auto" id="submit2" disabled>Verify</button>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-sm-6">
                        <div class="panel panel-default" style=" background-color:transparent;">
                            <div class="panel-body" style="  display: flex;flex-direction: column;justify-content: space-between; min-height: 180px;">
                                <p>You may skip this verification for now. You have 3 deferral(s) remaining.</p>
                                <button type="button" class="btn btn-default btn-lg btn-block" style="margin-top:auto">Verify later</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!--    <fieldset class="fieldset1" style="display:none">
                    <legend class="sr-only">Verify</legend>
                    <div class="radio" style="display:none">
                        <input id="question1" name="question" type="radio" class="with-font" value="sel">
                        <label for="question1" class="lead">I have verified that the information on this page is currently accurate.</label>
                    </div>
                    <div class="radio" style="display:none">
                        <input id="question2" name="question" type="radio" class="with-font" value="sel">
                        <label for="question2" class="lead">I choose to verify this information later (3 defferal(s) remaining). </label>
                    </div>
                </fieldset>
                <div class="row fieldset1" style="">
                    <div class="col-md-12" style="padding-bottom:15px; padding-top:15px;">
                        <div class="text-center">
                            <button class="btn btn-lg btn-primary" id="submit1_0" data-toggle="" data-target="" disabled style="display:none"> Submit</button>
                        </div>
                        <p>This page contains items of personally sensitive data, and are hidden to protect your privacy. Please unmask these fields to continue with your verification.</p>
                        <div class="text-center">
                            <button class="btn btn-lg btn-primary" id="submit1_1" data-toggle="" data-target=""  style="display:"> Unmask sensitive data</button>
                        </div>
                        <div style="margin-top:2rem"> You may also skip this verification for now (3 deferral(s) remaining).</div>
                        <div class="text-center" style="margin-top:1rem">
                            <button class="btn btn-lg btn-default" id="skipfornow2" onclick="alert('Design note - verification is now deferred, and user is redirected to application.');">Verify later</button>
                        </div>
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
                        <label for="question4" class="lead">I choose to verify this information later (3 defferal(s) remaining). </label>
                    </div>
                </fieldset>
                <div class="row fieldset2" style="display:none">
                    <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                        <button class="btn btn-lg btn-primary" id="submit2" data-toggle="" data-target="" disabled onclick="alert('Design note - verification is now deferred/completed, and user is redirected to application.');"> Submit</button>
                    </div>
                </div>--> 
                
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
		 $("#demojs_revealskipscreen").hide();
		
		$("#demojs_verifyscreen").show();
		$('html, body').animate({scrollTop: '0px'}, 500);
		
		
		
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
        $('#question4').click(function() {
            if ($(this).is(':checked')) {
				$("#submit2").removeAttr("disabled");
            }
        });
    });
</script> 



</body>
</html>
