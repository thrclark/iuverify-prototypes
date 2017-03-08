<?php 
$section = 'publishing';
$page_title = 'home';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css"></style>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
<!-- Responsive Tables-->
<script type="text/javascript" src="../js/tablesaw.js"></script>
<script type="text/javascript" src="../js/tablesaw-init.js"></script>
</head>
<body class="view-admin" id="top">
<div class="wrapper">
    <?php include ('includes/brand-header-cas.php') ?>
    <?php include('includes/header-pub.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include('includes/nav-pub.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section style="display:;" id="all_verifications">
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">All Verifications</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"> <a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default"> <i class="fa fa-plus" aria-hidden="true"></i> Verification</a> </div>
                            </div>
                            <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                                <caption class="sr-only">
                                Index of current verifications
                                </caption>
                                <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="1">Name</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Status</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"><span class="visible-xs">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FS - Direct Deposit</td>
                                        <td>inactive</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default"> edit </a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul>
                                        </div>--></td>
                                    </tr>
                                    <tr>
                                        <td>FS - Tax Information</td>
                                        <td>inactive</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default">edit</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul> </div>--></td>
                                    </tr>
                                    <tr>
                                        <td>FS - W2 Update</td>
                                        <td>active</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default">edit</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu3">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul> </div>--></td>
                                    </tr>
                                    <tr>
                                        <td>HC - Immunization Records</td>
                                        <td>inactive</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default">edit</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu4">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul> </div>--></td>
                                    </tr>
                                    <tr>
                                        <td>HRMS - Citizenship</td>
                                        <td>active</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default">edit</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu5">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul> </div>--></td>
                                    </tr>
                                    <tr>
                                        <td>HRMS - Military Status</td>
                                        <td>active</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default">edit</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu6">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul> </div>--></td>
                                    </tr>
                                    <tr>
                                        <td>IU Notify - Conatct Info</td>
                                        <td>inactive</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default">edit</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu7">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul> </div>--></td>
                                    </tr>
                                    <tr>
                                        <td>IU Notify - Email Update</td>
                                        <td>inactive</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default">edit</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul> </div>--></td>
                                    </tr>
                                    <tr>
                                        <td>IU Notify - Phone Update</td>
                                        <td>inactive</td>
                                        <td class="text-center"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default">edit</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu8">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul> </div>--></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center"> <a href="#" class="btn btn-xs btn-default"><i class="fa fa-angle-down" aria-hidden="true"></i> View More </a> </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>  <?php include ('includes/brand-footer-cas.php') ?>
</div>
<script>
    angular.module('sortApp', []).controller('mainController', function($scope) {
        $scope.sortType = 'name';
        $scope.sortReverse = false;
        $scope.searchstatus = '';
        $scope.sushi = [{
            name: 'HRMS - Citizenship',
            status: 'active',
            created: '2016-03-15'
        }, {
            name: 'FS - W2 Update',
            status: 'active',
            created: '2016-02-02'
        }, {
            name: 'FS - Direct Deposit',
            status: 'inactive',
            created: '2016-03-18'
        }, {
            name: 'FS - Tax Information',
            status: 'inactive',
            created: '2016-05-18'
        }, {
            name: 'IU Notify - Conatct Info',
            status: 'inactive',
            created: '2016-05-28'
        }, {
            name: 'IU Notify - Phone Update',
            status: 'inactive',
            created: '2016-05-17'
        }, {
            name: 'IU Notify - Email Update',
            status: 'inactive',
            created: '2016-05-15'
        }, {
            name: 'HC - Immunization Records',
            status: 'inactive',
            created: '2016-05-17'
        }, {
            name: 'HRMS - Military Status',
            status: 'active',
            created: '2016-04-04'
        }];
    });
</script>
</body>
</html>
