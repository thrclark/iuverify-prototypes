<!-- Modal -->

<div class="modal fade" id="modal_wysiwyg_preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="width:1200px">
        <div class="modal-content">
            <div class="modal-header" style="background:#ffffff">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Preview Styling</h4>
            </div>
         
                <div class="modal-body" style="padding:40px; padding-top:0px;background:#EBEBEB" id="wyswyg_body">
                    <div id="wyswyg_header" style="position: absolute;
    height: 50px;
    background: #163C50;
    width: 100%;
    margin-left: -40px;
    z-index: 0;"> </div>
                  <div class="container" style="width:950px">  <div class="row" style="margin-bottom: 20px;" >
                        <div class="col-sm-8 col-xs-12" id="wyswyg_headercont1">
                            <h1 class="app-name" style="    padding-top: 7px;
    padding-bottom: 0;
    font-size: 28px;
    line-height: 28px;
    margin: 0;
    padding-left: 0;
    height: 50px;
    z-index:9999999">IU Verify</h1>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="wyswyg_headercont2">
                            <p class="navbar-text"><i class="icon-user-3"></i><span class="sr-only">User: </span>Hello, Tom </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="h4" style="margin-top:0px">Verify Your Data</h2>
                            <p> On occasion, Indiana University requires verification of personal information regarding your affiliation with the university. The item(s) presented on this page have been marked as needing your review for accuracy. </p>
                        </div>
                    </div>
                    <div class="well vfy-section" id="wyswyg_panel">
                        <div class="row">
                            <div class="col-xs-6">
                                <h3 class="h4">Section Title</h3>
                            </div>
                            <div class="col-xs-6" style="padding-top:10px"> 
                                <!--  <div class="dropdown pull-right"> <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Help <span class="caret"></span> </a>
                        <ul id="menu3" class="dropdown-menu" aria-labelledby="drop6">
                            <li><a href="#">Assistive Technology at IU</a></li>
                        </ul>
                    </div>--> 
                            </div>
                        </div>
                        <p>Section description lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. This is a <a href="#">test link</a> ociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu</p>
                        <hr>
                        <div class="form-horizontal">
                            <div class="form-group form-group-sm updated">
                                <label class="col-sm-3 control-label">Disabled Status:</label>
                                <div class="col-sm-9">
                                    <p class="form-control-static">Not Specified </p>
                                </div>
                            </div>
                            <div class="form-group form-group-sm form-section-control">
                                <button  class="btn btn-xs btn-primary">Edit</button>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="submission">
                        <fieldset>
                            <legend class="sr-only">Verify</legend>
                            <div class="radio">
                                <input id="question1" name="question" type="radio" class="with-font" value="sel">
                                <label for="question1" class="lead">I have verified that the information on this page is currently accurate.</label>
                            </div>
                            <div class="radio">
                                <input id="question2" name="question" type="radio" class="with-font" value="sel">
                                <label for="question2" class="lead">I choose to verify this information later.<br>
                                    <span style=" font-size:14px; display:block">(you may bypass this verification 8 more times)</span></label>
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                                <button class="btn btn-lg btn-primary" id="submit"> Submit</button>
                            </div>
                        </div>
                    </div></div>
                </div>
           
            <div class="modal-footer" style="background:#ffffff;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>
