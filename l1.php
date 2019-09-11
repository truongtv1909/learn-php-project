<?php  $page = 'b3'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>
<link rel="stylesheet" href="assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="minovate" class="appWrapper">
	<div id="wrap" class="animsition">
		<?php include "./templates/header3.php"; ?>
		<!-- ====================================================
        ================= CONTENT ===============================
        ===================================================== -->
        <section id="contents" class="content custom-content">
        	
            <div class="container">
            	<!-- ====================================================
		        ================= CONTENT ===============================
		        ===================================================== -->
            	<ul>
                    <li>
                        <a href="" data-toggle="modal" data-target="#loginl1" data-options="splash-2 splash-primary splash-ef-2">
                            L1
                        </a>
                     </li>
                     <li>
                        <a href="" data-toggle="modal" data-target="#loginl2" data-options="splash-2 splash-primary splash-ef-2">
                            L2
                        </a>
                     </li>
                     <li>
                        <a href="" data-toggle="modal" data-target="#loginl3" data-options="splash-2 splash-primary splash-ef-2">
                            L3
                        </a>
                     </li>
                     
                </ul>
                
            </div>
            
        </section>
        <!--/ CONTENT -->
		<?php include "./templates/footer.php"; ?>
        <!-- Modal L1-->
        <div class="modal splash fade modal-custom" id="loginl1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">Customer</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="box-login">
                            <p>We found your information in the system. Is your?</p>
                            <form class="form-horizontal" role="form">
                                <div class="box-info">
                                    <ul>
                                        <li><span>your name</span>martin luther king</li>
                                        <li><span>phone number</span>+84 24 3833 7135</li>
                                        <li><span>email</span>mtlutherk@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">user name</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="user name">
                                        <!-- <p class="help-block mb-0">Example block-level help text here.</p> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <div class="box-password">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="password">
                                            <span class="eye toggle-password"></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success btn-sm">login</button>
                                    </div>
                                    <div class="col-sm-8">
                                        <a href="#">to continue</a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal L2-->
        <div class="modal splash fade modal-custom" id="loginl2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">User registration</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="box-login">
                            <p>It is first time you book in the system. Please register</p>
                            <form class="form-horizontal" role="form">
                                <div class="box-info">
                                    <ul>
                                        <li><span>your name</span>martin luther king</li>
                                        <li><span>phone number</span>+84 24 3833 7135</li>
                                        <li><span>email</span>mtlutherk@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">user name</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="user name">
                                        <!-- <p class="help-block mb-0">Example block-level help text here.</p> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-4 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <div class="box-password">
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="password">
                                            <span class="eye toggle-password"></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword5" class="col-sm-4 control-label">re-type password</label>
                                    <div class="col-sm-8">
                                        <div class="box-password">
                                            <input type="password" class="form-control" id="inputPassword5" placeholder="re-type password">
                                            <span class="eye toggle-password2"></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success btn-sm">register</button>
                                    </div>
                                    <div class="col-sm-8">
                                        <a href="#">to continue</a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal L3-->
        <div class="modal splash fade modal-custom custom-l3" id="loginl3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">Notification</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="box-login">
                            <p>We found your IP using for fake booking last time.<br />
                                Please contact to our customer <b>support</b> to claim</p>
                            <form class="form-horizontal" role="form">
                                <div class="box-info">
                                    <ul class="info-l3">
                                        <li><span>your name</span>martin luther king</li>
                                        <li><span>phone number</span>+84 24 3833 7135</li>
                                        <li><span>email</span>mtlutherk@gmail.com</li>
                                        <li><span>support</span></li>
                                        <li><span> &nbsp;&nbsp;South</span>+84 24 3833 7135</li>
                                        <li><span> &nbsp;&nbsp;North</span>+84 24 3833 7135</li>
                                        <li><span> &nbsp;&nbsp;Middle</span>+84 24 3833 7135</li>
                                        
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">contact to claim</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="please input your phone or email">
                                        <!-- <p class="help-block mb-0">Example block-level help text here.</p> -->
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary btn-sm">claim</button>
                                    </div>
                                    <div class="col-sm-8">
                                        <p>press "claim" to recover from our black list<br />
                                        we will contact to you to support</p>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
	</div>		
<!--/ Application Content -->

        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->

        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            
			$(document).ready(function(){
                $(".toggle-password").click(function() {

                  $(this).addClass("open");
                  var input = $("#inputPassword3");
                  if (input.attr("type") == "password") {
                    input.attr("type", "text");
                  } else {
                    input.attr("type", "password");
                    $(this).removeClass("open");
                  }
                });
                $(".toggle-password").click(function() {

                  $(this).addClass("open");
                  var input = $("#inputPassword4");
                  if (input.attr("type") == "password") {
                    input.attr("type", "text");
                  } else {
                    input.attr("type", "password");
                    $(this).removeClass("open");
                  }
                });
                
                $(".toggle-password2").click(function() {

                  $(this).addClass("open");
                  var input = $("#inputPassword5");
                  if (input.attr("type") == "password") {
                    input.attr("type", "text");
                  } else {
                    input.attr("type", "password");
                    $(this).removeClass("open");
                  }
                });
                
			});

        </script>
        <!--/ Page Specific Scripts -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    </body>
</html>