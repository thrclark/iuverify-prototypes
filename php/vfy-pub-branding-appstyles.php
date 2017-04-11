<?php
$section = 'branding';
$page_title = 'app-styles';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<style>
.nav-tabs {
	margin-bottom: 15px;
}
.tab-content .input-group .form-control {
	width: 50%;
	-webkit-box-shadow: none;
	box-shadow: none;
}
.tab-content .input-group .form-control:first-child {
	border-right: none;
}
.tab-content .input-group .form-control:last-child {
	border-left: none;
	padding-left: 0px;
}
.layout-control {
	box-shadow: 0 2px 4px rgba(0,0,0,0.1);
	border: none;
	background-color: #f5f5f5;
	margin-top: 42px;
	padding-top: 58px;
}
.layout-control .round {
	display: inline-block;
	background-color: #ffffff;
	color: #163c50;
	text-align: center;
	height: 90px;
	width: 90px;
	line-height: 40px;
	border-radius: 50%;
	font-size: 46px;
	border: solid 1px #cccccc;
	padding: 21px;
	position: absolute;
	left: 32px;
	top: 0px;
	box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.padding-widget .form-control {
	display: inline;
	width: 70px;
}
</style>
<?php include ('includes/scripts.php') ?>
</head>

<body class="view-admin" id="top">
<div class="wrapper">
    <?php include ('includes/brand-header2.php') ?>
    <?php include('includes/header-pub.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include('includes/nav-pub.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section>
                            <div class="row section-head">
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">Page View Styles</h2>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#colors" aria-controls="colors" role="tab" data-toggle="tab">Colors</a></li>
                                <li role="presentation"><a href="#layout" aria-controls="layout" role="tab" data-toggle="tab">Layout</a></li>
                                <li role="presentation"><a href="#radius" aria-controls="radius" role="tab" data-toggle="tab">Border Radius</a></li>
                                <li role="presentation"><a href="#fonts" aria-controls="fonts" role="tab" data-toggle="tab">Fonts</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="colors">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <fieldset>
                                                <legend>Background Colors</legend>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="bkg_header"> Header Background Color </label>
                                                    <span class="help-block small">Specify the background color of the application header area.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="bkg_header" value="#163C50">
                                                                <label for="hexcolor_bkg_header" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_bkg_header" value="#163C50">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="bkg_header_container"> Header Background Container Color </label>
                                                    <span class="help-block small">Specify the background color of the application header container area.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="bkg_header_container" value="#163C50">
                                                                <label for="hexcolor_bkg_header_container" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_bkg_header_container" value="#163C50">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="bkg_body"> Body Background Color </label>
                                                    <span class="help-block small">Specify the background color of the application body.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="bkg_body" value="#ebebeb">
                                                                <label for="hexcolor_bkg_body" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_bkg_body" value="#ebebeb">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="bkg_maincontent"> Main Content Background Color </label>
                                                    <span class="help-block small">Specify the background color of the main content.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="bkg_maincontent" value="#ebebeb">
                                                                <label for="hexcolor_bkg_maincontent" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_bkg_maincontent" value="#ebebeb">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="bkg_panel"> Panel Background Color </label>
                                                    <span class="help-block small">Specify the background color of the application panels.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="bkg_panel" value="#ffffff">
                                                                <label for="hexcolor_bkg_panel" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_bkg_panel" value="#ffffff">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>Text Colors</legend>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="txtcolor_onlight"> Text Color - on Light Backgrounds </label>
                                                    <span class="help-block small">Specify the text color that will be used over light-colored backgrounds.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="txtcolor_onlight" value="#ffffff">
                                                                <label for="hexcolor_txtcolor_onlight" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_txtcolor_onlight" value="#ffffff">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="txtcolor_ondark"> Text Color - on Dark Backgrounds </label>
                                                    <span class="help-block small">Specify the text color that will be used over dark-colored backgrounds.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="txtcolor_ondark" value="#555555">
                                                                <label for="hexcolor_txtcolor_onlight" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_txtcolor_ondark" value="#555555">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="link_color"> Link Color </label>
                                                    <span class="help-block small">Specify the color for links.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="link_color" value="#2879B8">
                                                                <label for="hexcolor_txtcolor_onlight" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_link_color" value="#2879B8">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>Rule Color</legend>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="btncolor_primary"> Primary Rule Color </label>
                                                    <span class="help-block small">Specify the color for horizontal rules and table borders.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="hr_color" value="#cccccc">
                                                                <label for="hexcolor_txtcolor_onlight" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_hr_color" value="#cccccc">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>Button Colors</legend>
                                                <div class="form-group" id="">
                                                    <label class="control-label" for="btncolor_primary"> Primary Button Color </label>
                                                    <span class="help-block small">Specify the background color of primary buttons.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="color" class="form-control" id="btncolor_primary" value="#2879B8">
                                                                <label for="hexcolor_btncolor_primary" class="sr-only">Hex Color Value</label>
                                                                <input type="text" class="form-control" id="hexcolor_btncolor_primary" value="#2879B8">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        
                                        <!---->
                                        
                                        <div class="col-sm-4">
                                            <div class="well well-sm preview-widget"> <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal_wysiwyg_preview"> Preview </button>


                                            </div>
                                        </div>
                                        
                                        <!----> 
                                        
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="layout">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <fieldset>
                                                <legend>Page Width</legend>
                                                <p> Note that the settings on this page will only apply to the verification view, and not to the publishing and admin views.</p>
                                                <p> <strong>Screen Sizes</strong></p>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="well well-sm text-center layout-control">
                                                            <div class="round"> <i class="fa fa-desktop" aria-hidden="true" style="margin-left: -7px;margin-top: -4px;font-size: 58px;"></i> </div>
                                                            <label class="control-label small text-muted" for="width_lg"> Large</label>
                                                            <input id="width_lg" type="text" class="form-control text-center" value="950px">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="well well-sm text-center layout-control">
                                                            <div class="round"> <i class="fa fa-desktop" aria-hidden="true" style="font-size: 42px;MARGIN-TOP: 5px;"></i> </div>
                                                            <label class="control-label small text-muted" for="width_md"> Medium</label>
                                                            <input id="width_md" type="text" class="form-control text-center" value="950px">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="well well-sm text-center layout-control">
                                                            <div class="round"> <i class="fa fa-tablet" aria-hidden="true"></i> </div>
                                                            <label class="control-label small text-muted" for="width_sm"> Tablet</label>
                                                            <input id="width_sm" type="text" class="form-control text-center" value="750px">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="well well-sm text-center layout-control">
                                                            <div class="round"> <i class="fa fa-mobile" aria-hidden="true"></i> </div>
                                                            <label class="control-label small text-muted" for="width_xs">Mobile</label>
                                                            <input id="width_xs" type="text" class="form-control text-center" value="100%" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>Main Content Padding</legend>
                                                <p> Specify the amount of padding for the main content section of a verification screen (does not apply to publishing/admin screens)</p>
                                                <div class="row padding-widget" style="padding-top:40px">
                                                    <div class="col-xs-12 text-center">
                                                        <div class="form-group ">
                                                            <label class="control-label" for="content_pad_top">Top</label>
                                                            <input id="content_pad_top" type="text" class="form-control" value="20px">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3 text-right" style="padding-top: 80px;">
                                                        <div class="form-group ">
                                                            <label class="control-label" for="content_pad_left"> Left</label>
                                                            <input id="content_pad_left" type="text" class="form-control" value="15px">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="well well-sm">
                                                            <div class="" style="border: solid 5px #163c50;height: 200px;border-radius: 10px;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3" style="padding-top: 80px;">
                                                        <div class="form-group ">
                                                            <label class="control-label" for="content_pad_right"> Right</label>
                                                            <input id="content_pad_right" type="text" class="form-control" value="15px">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 text-center">
                                                        <div class="form-group ">
                                                            <label class="control-label" for="content_pad_bottom">Bottom</label>
                                                            <input id="content_pad_bottom" type="text" class="form-control" value="60px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="well well-sm preview-widget">
                                                <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal_wysiwyg_preview"> Preview </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="radius">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <fieldset>
                                                <legend>Border Radius</legend>
                                                <div class="form-group ">
                                                    <label class="control-label" for="radius_general">Panel Border Radius</label>
                                                    <span class="help-block small">Applies to section panels. </span>
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <input id="radius_general" type="text" class="form-control" value="0px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="radius_small">Small Button Border Radius</label>
                                                    <span class="help-block small">Applies to small buttons. </span>
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <input id="radius_small" type="text" class="form-control" value="0px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="radius_large">Large Button Border Radius</label>
                                                    <span class="help-block small">Applies to large buttons. </span>
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <input id="radius_large" type="text" class="form-control" value="0px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="well well-sm preview-widget">
                                                <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal_wysiwyg_preview"> Preview </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="fonts">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <fieldset>
                                                <legend>Font for Headers</legend>
                                                <div class="form-group ">
                                                    <label class="control-label " for="headerfont">Font Face </label>
                                                    <span class="help-block small">Select a font that will be used for all headers.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select class="select form-control" id="headerfont" name="headerfont">
                                                                <option label="" value=""></option>
                                                                <option label="" value="">Sans-Serif - Arial, Helvetica </option>
                                                                <option label="" value="">Sans-Serif - "Arial Black", Gadget</option>
                                                                <option label="" value="">Sans-Serif - Impact, Charcoal </option>
                                                                <option label="" value="">Sans-Serif - "Lucida Sans Unicode", "Lucida Grande" </option>
                                                                <option label="" value="">Sans-Serif - Tahoma, Geneva </option>
                                                                <option label="" value="">Sans-Serif - "Trebuchet MS", Helvetica </option>
                                                                <option label="" value="">Sans-Serif - Verdana, Geneva </option>
                                                                <option label="" value="">Serif - Georgia</option>
                                                                <option label="" value="">Serif - "Palatino Linotype", "Book Antiqua", Palatino</option>
                                                                <option label="" value="">Serif - "Times New Roman", Times</option>
                                                                <option label="" value="">------</option>
                                                                <option label="" value="usecustomfont">Use Custom Font</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-headerfont">
                                                    <label class="control-label" for="font_family"> Font Family Name</label>
                                                    <span class="help-block small">Specify the name of this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input class="form-control" id="font_family" name="font_family" type="text" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-headerfont">
                                                    <label class="control-label" for="font_family"> Weight</label>
                                                    <span class="help-block small">Specify the weight of this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select ng-model="fontFace.fontWeight" name="fontFaces[0].fontWeight" id="fontFaces[0].fontWeight" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontWeights" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                                <option label="bold" value="string:BOLD">bold</option>
                                                                <option label="100" value="string:W_100">100</option>
                                                                <option label="200" value="string:W_200">200</option>
                                                                <option label="300" value="string:W_300">300</option>
                                                                <option label="400" value="string:W_400">400</option>
                                                                <option label="500" value="string:W_500">500</option>
                                                                <option label="600" value="string:W_600">600</option>
                                                                <option label="700" value="string:W_700">700</option>
                                                                <option label="800" value="string:W_800">800</option>
                                                                <option label="900" value="string:W_900">900</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-headerfont">
                                                    <label class="control-label" for="font_family"> Style</label>
                                                    <span class="help-block small">Specify the style of this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="fontFaces[0].fontStyle" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                                <option label="italic" value="string:ITALIC">italic</option>
                                                                <option label="oblique" value="string:OBLIQUE">oblique</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-headerfont">
                                                    <label class="control-label" for="font_family"> Stretch</label>
                                                    <span class="help-block small">Specify the stretch of this custom font..</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select ng-model="fontFace.fontStretch" name="fontFaces[0].fontStretch" id="fontFaces[0].fontStretch" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStretches" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                                <option label="condensed" value="string:CONDENSED">condensed</option>
                                                                <option label="ultra-condensed" value="string:ULTRA_CONDENSED">ultra-condensed</option>
                                                                <option label="extra-condensed" value="string:EXTRA_CONDENSED">extra-condensed</option>
                                                                <option label="semi-condensed" value="string:SEMI_CONDENSED">semi-condensed</option>
                                                                <option label="expanded" value="string:EXPANDED">expanded</option>
                                                                <option label="semi-expanded" value="string:SEMI_EXPANDED">semi-expanded</option>
                                                                <option label="extra-expanded" value="string:EXTRA_EXPANDED">extra-expanded</option>
                                                                <option label="ultra-expanded" value="string:ULTRA_EXPANDED">ultra-expanded</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-headerfont">
                                                    <div class="form-label"> Font URLs</div>
                                                    <span class="help-block small"> Specify URLs for this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            <table class="table table-actions" id="myTable" style="margin-bottom: 0px">
                                                                <thead class="sr-only">
                                                                    <tr>
                                                                        <th>URL</th>
                                                                        <th>Type</th>
                                                                        <th> Actions </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="col-sm-8"><input type="text" class="form-control" placeholder="Enter URL"></td>
                                                                        <td class="col-sm-4"><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required aria-invalid="false">
                                                                                <option selected>Select Type</option>
                                                                                <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                                <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                                <option label="SVG" value="string:SVG">SVG</option>
                                                                                <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                                <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                                <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                                            </select></td>
                                                                        <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-left"><i class="fa fa-plus" aria-hidden="true"></i> URL</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>Font for Body Text</legend>
                                                <div class="form-group">
                                                    <label class="control-label " for="bodyfont">Font Face </label>
                                                    <span class="help-block small">Select a font that will be used for the body.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select class="select form-control" id="bodyfont" name="bodyfont">
                                                                <option label="" value=""></option>
                                                                <option label="" value="">Sans-Serif - Arial, Helvetica </option>
                                                                <option label="" value="">Sans-Serif - "Arial Black", Gadget</option>
                                                                <option label="" value="">Sans-Serif - Impact, Charcoal </option>
                                                                <option label="" value="">Sans-Serif - "Lucida Sans Unicode", "Lucida Grande" </option>
                                                                <option label="" value="">Sans-Serif - Tahoma, Geneva </option>
                                                                <option label="" value="">Sans-Serif - "Trebuchet MS", Helvetica </option>
                                                                <option label="" value="">Sans-Serif - Verdana, Geneva </option>
                                                                <option label="" value="">Serif - Georgia</option>
                                                                <option label="" value="">Serif - "Palatino Linotype", "Book Antiqua", Palatino</option>
                                                                <option label="" value="">Serif - "Times New Roman", Times</option>
                                                                <option label="" value="">------</option>
                                                                <option label="" value="usecustomfont">Use Custom Font</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-bodyfont">
                                                    <label class="control-label" for="font_family_body"> Font Family Name</label>
                                                    <span class="help-block small">Specify the name of this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input class="form-control" id="font_family_body" name="font_family_body" type="text" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-bodyfont">
                                                    <label class="control-label" for="font_weight_body"> Weight</label>
                                                    <span class="help-block small">Specify the weight of this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select ng-model="fontFace.fontWeight" name="fontFaces[0].fontWeight" id="font_weight_body" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontWeights" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                                <option label="bold" value="string:BOLD">bold</option>
                                                                <option label="100" value="string:W_100">100</option>
                                                                <option label="200" value="string:W_200">200</option>
                                                                <option label="300" value="string:W_300">300</option>
                                                                <option label="400" value="string:W_400">400</option>
                                                                <option label="500" value="string:W_500">500</option>
                                                                <option label="600" value="string:W_600">600</option>
                                                                <option label="700" value="string:W_700">700</option>
                                                                <option label="800" value="string:W_800">800</option>
                                                                <option label="900" value="string:W_900">900</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-bodyfont">
                                                    <label class="control-label" for="font_style_body"> Style</label>
                                                    <span class="help-block small">Specify the style of this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="font_style_body" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                                <option label="italic" value="string:ITALIC">italic</option>
                                                                <option label="oblique" value="string:OBLIQUE">oblique</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-bodyfont">
                                                    <label class="control-label" for="font_stretch_body"> Stretch</label>
                                                    <span class="help-block small">Specify the stretch of this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <select ng-model="fontFace.fontStretch" name="fontFaces[0].fontStretch" id="font_stretch_body" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStretches" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                                <option label="condensed" value="string:CONDENSED">condensed</option>
                                                                <option label="ultra-condensed" value="string:ULTRA_CONDENSED">ultra-condensed</option>
                                                                <option label="extra-condensed" value="string:EXTRA_CONDENSED">extra-condensed</option>
                                                                <option label="semi-condensed" value="string:SEMI_CONDENSED">semi-condensed</option>
                                                                <option label="expanded" value="string:EXPANDED">expanded</option>
                                                                <option label="semi-expanded" value="string:SEMI_EXPANDED">semi-expanded</option>
                                                                <option label="extra-expanded" value="string:EXTRA_EXPANDED">extra-expanded</option>
                                                                <option label="ultra-expanded" value="string:ULTRA_EXPANDED">ultra-expanded</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group custom-bodyfont">
                                                    <div class="form-label"> Font URLs</div>
                                                    <span class="help-block small"> Specify URLs for this custom font.</span>
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            <table class="table table-actions" id="myTable" style="margin-bottom: 0px">
                                                                <thead class="sr-only">
                                                                    <tr>
                                                                        <th>URL</th>
                                                                        <th>Type</th>
                                                                        <th> Actions </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="col-sm-8"><input type="text" class="form-control" placeholder="Enter URL"></td>
                                                                        <td class="col-sm-4"><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required aria-invalid="false">
                                                                                <option selected>Select Type</option>
                                                                                <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                                <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                                <option label="SVG" value="string:SVG">SVG</option>
                                                                                <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                                <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                                <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                                            </select></td>
                                                                        <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-left"><i class="fa fa-plus" aria-hidden="true"></i> URL</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="well well-sm preview-widget">
                                                <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal_wysiwyg_preview"> Preview </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right"> <a href="" class="btn btn-default" data-toggle="modal" data-target="#confirm_exit">Cancel</a>
                                <button type="submit" class="btn btn-primary" id="page_save" data-toggle="" data-target="">Save</button>
                                <button type="submit" class="btn btn-primary" id="page_saving" data-toggle="" data-target="" disabled="disabled" style="display:none"><i class="fa fa-refresh fa-spin" aria-hidden="true"></i> Saving</button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
    <?php include ('includes/modal-wysiwyg-preview.php') ?>
    
    <!-- Modal -->
    <div class="modal fade" id="page_refreshed" tabindex="-1" role="dialog" aria-labelledby="">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="icon-user-3"></i>Save Completed</h4>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <div class="message-content">
                            <p>Your settings have been saved. In order to see the new styling, you will need to reload this page.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <a href="#" class="btn btn-default btn-sm" data-dismiss="modal" >Close</a> <a href="#" class="btn btn-primary btn-sm" data-dismiss="modal" >Reload Page</a> </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="confirm_exit" tabindex="-1" role="dialog" aria-labelledby="">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="icon-user-3"></i>Unsaved Changes</h4>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <div class="message-content">
                            <p>There are unsaved changes on this page. Would you like to continue editing?</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <a href="#" class="btn btn-default btn-sm" data-dismiss="modal" >Discard Changes</a> <a href="#" class="btn btn-primary btn-sm" data-dismiss="modal">Continue Editing</a> </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="confirm_save" tabindex="-1" role="dialog" aria-labelledby="">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="icon-user-3"></i>Settings Saved</h4>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <div class="message-content">
                            <p>Your settings have been saved.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <a href="#" class="btn btn-default btn-sm" data-dismiss="modal" >Close</a> </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'>
    //<![CDATA[
    $(document).ready(function() {
        var $template = $(".template-add-data");
        var hash = 1;
        $(".btn-add-data").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-data" + (++hash))
                .text("Font Face " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-data" + (hash)).addClass("collapse").removeClass("in");
            //$newPanel.find(".panel-heading").append("<span class='pull-right'><i class='fa fa-close clickable'></i></span>");
            $("#sortable").append($newPanel.fadeIn());
            $(document).on('click', '.fa.fa-close', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script> 
    <script type="text/javascript">
    $(document).ready(function() {
        $('a.addstuff').click(function() {
            $('#myTable tbody').prepend('<tr><td class="col-sm-8"><input type="text" class="form-control" placeholder="Enter URL"></td><td class="col-sm-4"><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required="" aria-invalid="false"><option selected>Select Type</option><option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option><option label="OpenType" value="string:OPEN_TYPE">OpenType</option><option label="SVG" value="string:SVG">SVG</option><option label="TrueType" value="string:TRUE_TYPE">TrueType</option><option label="WOFF" value="string:WOFF">WOFF</option><option label="WOFF 2" value="string:WOFF2">WOFF 2</option></select></td><td><a href="#" class="btn btn-xs btn-default " style="margin-top:5px">Delete</a></td></tr>');
        });
    });
</script> 
    <script type="text/javascript">
    //<![CDATA[
    $(window).load(function() {
        $(function() {
            $('.custom-headerfont').hide();
            $('#headerfont').change(function() {
                if ($('#headerfont').val() == 'usecustomfont') {
                    $('.custom-headerfont').slideDown();
                } else {
                    $('.custom-headerfont').slideUp();
                }
            });



        });
    }); //]]>
</script> 
    <script type="text/javascript">
    //<![CDATA[
    $(window).load(function() {
        $(function() {
            $('.custom-bodyfont').hide();
            $('#bodyfont').change(function() {
                if ($('#bodyfont').val() == 'usecustomfont') {
                    $('.custom-bodyfont').slideDown();
                } else {
                    $('.custom-bodyfont').slideUp();
                }
            });



        });
    }); //]]>
</script> 
    <script>
    $("#page_save").click(function() {
        $("#page_save").hide().delay(2000).slideDown(0);
        $("#page_saving").show().delay(2000).slideUp(0);


        setTimeout(
            function() {
                $('#page_refreshed').modal();
            }, 2000);
    });
</script> 
    <script>
    $('#hexcolor_bkg_header').on('change', function() {
        $('#bkg_header').val(this.value);
    });
    $('#bkg_header').on('change', function() {
        $('#hexcolor_bkg_header').val(this.value);
    });
    $('#hexcolor_bkg_header_container').on('change', function() {
        $('#bkg_header_container').val(this.value);
    });
    $('#bkg_header_container').on('change', function() {
        $('#hexcolor_bkg_header_container').val(this.value);
    });
    $('#hexcolor_bkg_body').on('change', function() {
        $('#bkg_body').val(this.value);
    });
    $('#bkg_body').on('change', function() {
        $('#hexcolor_bkg_body').val(this.value);
    });
    $('#hexcolor_bkg_panel').on('change', function() {
        $('#bkg_panel').val(this.value);
    });
    $('#bkg_panel').on('change', function() {
        $('#hexcolor_bkg_panel').val(this.value);
    });
    $('#hexcolor_txtcolor_onlight').on('change', function() {
        $('#txtcolor_onlight').val(this.value);
    });
    $('#txtcolor_onlight').on('change', function() {
        $('#hexcolor_txtcolor_onlight').val(this.value);
    });
    $('#hexcolor_txtcolor_ondark').on('change', function() {
        $('#txtcolor_ondark').val(this.value);
    });
    $('#txtcolor_ondark').on('change', function() {
        $('#hexcolor_txtcolor_ondark').val(this.value);
    });
    $('#hexcolor_link_color').on('change', function() {
        $('#link_color').val(this.value);
    });
    $('#link_color').on('change', function() {
        $('#hexcolor_link_color').val(this.value);
    });
    $('#hexcolor_hr_color').on('change', function() {
        $('#hr_color').val(this.value);
    });
    $('#hr_color').on('change', function() {
        $('#hexcolor_hr_color').val(this.value);
    });
    $('#hexcolor_btncolor_primary').on('change', function() {
        $('#btncolor_primary').val(this.value);
    });
    $('#btncolor_primary').on('change', function() {
        $('#hexcolor_btncolor_primary').val(this.value);
    });
	
	
	
    $('#hexcolor_bkg_maincontent').on('change', function() {
        $('#bkg_maincontent').val(this.value);
    });
    $('#bkg_maincontent').on('change', function() {
        $('#hexcolor_bkg_maincontent').val(this.value);
    });
</script> 
    <script>
    $("#bkg_header").change(function() {
        $("#wyswyg_header").css('background', $(this).val());
    });
    $("#bkg_header_container").change(function() {
        $("#wyswyg_headercont1, #wyswyg_headercont2").css('background', $(this).val());
    });
    $("#bkg_body").change(function() {
        $("#modal_wysiwyg_preview .modal-content, #wyswyg_body").css('background', $(this).val());
    });
    $("#bkg_panel").change(function() {
        $("#wyswyg_panel").css('background', $(this).val());
    });
    $("#txtcolor_ondark").change(function() {
        $("#wyswyg_headercont1 h1, #wyswyg_headercont2 .navbar-text, #modal_wysiwyg_preview .modal-body .btn-primary").css('color', $(this).val());
    });
    $("#txtcolor_onlight").change(function() {
        $("#modal_wysiwyg_preview .modal-body, #modal_wysiwyg_preview .modal-body .well, #modal_wysiwyg_preview .modal-body .h4, #modal_wysiwyg_preview .modal-body .btn-default").css('color', $(this).val());
    });
    $("#link_color").change(function() {
        $("#modal_wysiwyg_preview .modal-body a").css('color', $(this).val());
    });
    $("#hr_color").change(function() {
        $("#modal_wysiwyg_preview .modal-body hr").css('border-color', $(this).val());
    });
    $("#btncolor_primary").change(function() {
        $("#modal_wysiwyg_preview .modal-body .btn-primary").css('background', $(this).val());
    });
	
	
	 $("#width_lg").change(function() {
        $("#modal_wysiwyg_preview .container").css('width', $(this).val());
    });
	
 $("#bkg_maincontent").change(function() {
        $("#modal_wysiwyg_preview .container").css('background', $(this).val());
    });
	
	
	
	
	 $("#content_pad_top").change(function() {
        $("#modal_wysiwyg_preview .container").css('padding-top', $(this).val());
    });
	
	 $("#content_pad_bottom").change(function() {
        $("#modal_wysiwyg_preview .container").css('padding-bottom', $(this).val());
    });
	 $("#content_pad_left").change(function() {
        $("#modal_wysiwyg_preview .container").css('padding-left', $(this).val());
    });
	 $("#content_pad_right").change(function() {
        $("#modal_wysiwyg_preview .container").css('padding-right', $(this).val());
    });
	
	$("#radius_general").change(function() {
        $("#modal_wysiwyg_preview .well").css('border-radius', $(this).val());
    });
	
	
	$("#radius_small").change(function() {
        $("#modal_wysiwyg_preview .btn-xs").css('border-radius', $(this).val());
    });
	
	
	$("#radius_large").change(function() {
        $("#modal_wysiwyg_preview .btn-lg").css('border-radius', $(this).val());
    });
	
</script> 


<script>
    $(document).ready(function() {
        $(".preview-widget").sticky({
            topSpacing: 20
        });
    });
</script>



<script>
    $(document).ready(function() {
        $('.nav.nav-tabs a').click(function(e) {
            e.preventDefault()
            $(this).tab('show');
            $(".preview-widget").sticky({
                topSpacing: 20
            });
			 $('.preview-widget').css('width', '290px'); 
        })
    });
</script>



 
                          
                            





</div>
</body>
</html>