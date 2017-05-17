<?php $page_title = "Home" ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top" >
<div class="wrapper">
    <?php include ('includes/brand-header2.php') ?>
    <?php include ('includes/header2.php') ?>
    <div class="main-content container" role="main">
        <div id="main-content">
            <?php include ('includes/instructions-top.php') ?>
            <div ng-repeat="section in verify.verification.sections" class="well vfy-section ng-scope">
                <div class="loading-overlay fade-animation-8 ng-hide" ng-show="verify.liveDataLoadingStatus == 1" aria-hidden="true"></div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="h4 ng-binding" ng-bind="section.name">Emergency notification settings</h3>
                    </div>
                    <div class="col-xs-6"></div>
                </div>
                <p ng-bind-html="section.description" class="verify-desc ng-binding">
                <p>Please review the contact information on file and make any necessary changes by clicking <strong>Edit</strong>. For more information, see <a href="https://kb.iu.edu/d/avvp" target="_blank">About emergency notifications at IU</a>.</p>
                </p>
                <hr>
                <div class="form-horizontal">
                    <div ng-repeat="group in section.fieldGroups" class="ng-scope">
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="col-sm-3 control-label"><span ng-bind="field.label" class="ng-binding">Landline 1</span>:</div>
                            <div class="col-sm-9">
                                <p class="form-control-static"><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">(812) 856-2329</span></span></p>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="col-sm-3 control-label"><span ng-bind="field.label" class="ng-binding">Cellular 1</span>:</div>
                            <div class="col-sm-9">
                                <p class="form-control-static"><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">(812) 369-9664</span></span></p>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="col-sm-3 control-label"><span ng-bind="field.label" class="ng-binding">IU Email</span>:</div>
                            <div class="col-sm-9">
                                <p class="form-control-static"><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">thrclark@iu.edu</span></span></p>
                            </div>
                        </div>
                        <div class="form-group form-group-sm ng-scope" ng-repeat="field in group.fields">
                            <div class="col-sm-3 control-label"><span ng-bind="field.label" class="ng-binding">Campus(es)</span>:</div>
                            <div class="col-sm-9">
                                <p class="form-control-static"><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">Bloomington</span><br ng-if="!$last" class="ng-scope">
                                    </span><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">Indianapolis</span><br ng-if="!$last" class="ng-scope">
                                    </span><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">East</span><br ng-if="!$last" class="ng-scope">
                                    </span><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">Northwest</span><br ng-if="!$last" class="ng-scope">
                                    </span><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">South Bend</span><br ng-if="!$last" class="ng-scope">
                                    </span><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">Southeast</span><br ng-if="!$last" class="ng-scope">
                                    </span><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">Columbus</span><br ng-if="!$last" class="ng-scope">
                                    </span><span ng-repeat="value in field.values" class="ng-scope"><span ng-bind="value" class="ng-binding">Kokomo</span></span></p>
                            </div>
                        </div>
                        <div ng-if="group.url" class="form-group form-group-sm form-section-control ng-scope"> <a ng-href="https://access-test.uits.iu.edu/iunotify" target="_blank" class="btn btn-xs btn-primary" ng-click="verify.edit(section, group.uniqueKey)" href="https://access-test.uits.iu.edu/iunotify"> Edit </a>
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
                <fieldset>
                    <legend class="sr-only">Verify</legend>
                    <div class="radio">
                        <input id="question1" name="question" type="radio" class="with-font" value="sel" />
                        <label for="question1" class="lead">I have verified that the information on this page is currently accurate.</label>
                    </div>
                    <div class="radio">
                        <input id="question2" name="question" type="radio" class="with-font" value="sel"/>
                        <label for="question2" class="lead">I choose to verify this information later.<br>
                            <span style=" font-size:14px; display:block">(you may bypass this verification 8 more times)</span></label>
                    </div>
                </fieldset>
                <div class="row">
                    <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                        <button class="btn btn-lg btn-primary" id="submit"> Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
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

</script> 
</div>
</body>
</html>
