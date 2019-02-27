<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Diaspora,Registration,Form">
    <meta name="author" content="FED.GOV.NG">
    <title>Diaspora Registration Form</title>

    <!--	<!-- Favicons-->
    <!--	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">-->
    <!--	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">-->
    <!--	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">-->
    <!--	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">-->
    <!--	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">-->

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- COLOR CSS -->
    <link href="css/color_3.css" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/date_time_picker.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->


<main>
    <div id="form_container">
        <div class="row">
            <div class="col-lg-5">
                <div id="left_form" style="height: 100%;">
                    <figure><img src="img/registration_bg.svg" alt="" style="height: 100%;"></figure>
                    <h2>Questionnaire</h2>
                    <p>Diaspora Registration Form</p>
                    <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
                </div>
            </div>
            <div class="col-lg-7">

                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <!-- /top-wizard -->
                    <form name="example-1" id="wrapped" method="POST" action="questionare_send.php">
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">

                            <div class="step">
                                <h3 class="main_question"><h4>NNVS / OSGF Would like to know</h4>
                                    <strong>1/4</strong><br/></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group radio_input">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>Have you been contributing to knowledge/skilled transfer from
                                                            destination to Nigeria</p>
                                                        <input type="text" name="nnvs_1" class="form-control required"
                                                               placeholder="Year / Destination / Sex">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>Do you have any investment in Nigeria ? if yes what area(s)
                                                            of the
                                                            economy ?</p>
                                                        <input type="text" name="nnvs_2" class="form-control required"
                                                               placeholder="Year / Destination / Sex">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>Have your group(s) / association be contributing
                                                            knowledge/skilled transfer and investment in the country</p>
                                                        <input type="text" name="nnvs_3" class="form-control required"
                                                               placeholder="Year / Destination / Sex">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /step -->


                            <div class="step">
                                <h3 class="main_question"><h4>NNVS / OSGF Would like to know</h4>
                                    <strong>2/4</strong><br/></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group radio_input">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>What is the estimated value of your skill / knowledge / idea
                                                            transfer to the country</p>
                                                        <input type="text" name="nnvs_4" class="form-control required"
                                                               placeholder="Year / Destination / Sex">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>Can you please state on average the amount of financial
                                                            remittance to home country</p>
                                                        <input type="text" name="nnvs_5" class="form-control required"
                                                               placeholder="Country / Sex / Year">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>What is the purpose for the remittances</p>
                                                        <input type="text" name="nnvs_6" class="form-control required"
                                                               placeholder="Purpose....">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /step -->

                            <div class="step">
                                <h3 class="main_question"><h4>NNVS / OSGF Would like to know</h4>
                                    <strong>3/4</strong><br/></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group radio_input">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>What is the number of Nigerians studying abroad</p>
                                                        <input type="text" name="nnvs_4" class="form-control required"
                                                               placeholder="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>What is the number of Nigerians working abroad</p>
                                                        <input type="text" name="nnvs_5" class="form-control required"
                                                               placeholder="0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /step -->


                            <div class="submit step">
                                <h3 class="main_question"><strong>4/4</strong>Please fill with your details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control required"
                                                   placeholder="Full Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="number" name="age" class="form-control required"
                                                   placeholder="age">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="duration_of_stay" class="form-control required"
                                                   placeholder="Country Of Resident">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select style="border: 0px solid white;" type="text" name="sex"
                                                    class="form-control required">
                                                <option value="">-Sex-</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->

                                <!-- /row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="duration_of_stay" class="form-control required"
                                                   placeholder="Duration of stay">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="reason_for_emigration" class="form-control"
                                                   placeholder="Reason for emigration">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="level_of_education" class="form-control required"
                                                   placeholder="Level of education">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="field_of_special" class="form-control required"
                                                   placeholder="Field of specialization">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="occupation" class="form-control required"
                                                   placeholder="Occupation">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="sector" class="form-control required"
                                                   placeholder="Sector">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group terms">
                                            <input name="terms" type="checkbox" class="icheck required" value="yes">
                                            <label>Please accept <a href="#" data-toggle="modal"
                                                                    data-target="#terms-txt">terms and conditions</a> ?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step-->

                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Backward</button>
                            <button type="button" name="forward" class="forward">Forward</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
</main>

<footer id="home" class="clearfix">
    <p>© 2019 DRF</p>
    <ul>
        <li><a href="#0" class="animated_link">Terms and conditions</a></li>
        <li><a href="#0" class="animated_link">Contacts</a></li>
    </ul>
</footer>
<!-- end footer-->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- cd-overlay-content -->

<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>All information's provided on this platform should appear correctly</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal info -->
<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>No FAQs</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- SCRIPTS -->
<!-- Jquery-->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Common script -->
<script src="js/common_scripts.js"></script>
<!-- Wizard script -->
<script src="js/questionare_wizard_func.js"></script>
<!-- Menu script -->
<script src="js/velocity.min.js"></script>
<script src="js/main.js"></script>
<!-- Theme script -->
<script src="js/functions.js"></script>


</body>
</html>