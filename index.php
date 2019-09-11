<?php $page = 'ab_dashboard';?>
 <?php include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>
<link rel="stylesheet" href="assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="minovate" class="appWrapper">
	<div id="wrap" class="animsition">
		<?php include "./templates/headera1.php"; ?>
		
		<!-- ====================================================
        ================= CONTENT ===============================
        ===================================================== -->
        <section id="contents" class="content default-content test">
        	
            <div class="container con-b2">
            	<!-- ====================================================
		        ================= CONTENT ===============================
		        ===================================================== -->
            	<div class="box-request">
            		<div class="box-request-inner">
            			<div class="box-left">
            				<h3 class="sst-title"><span>common info</span> </h3>
            				<div class="box-info">
            					<form name="form1" role="form" id="form1">
            							<div class="box-wrap">
            								<div class="form-group">
	                                            <label class="control-label">Name *</label>
	                                            <div class="box-input box-tyle">
	                                                <input type="text" class="form-control" value="Transportation Co., Ltd"/>	
	                                                
	                                            </div>
                                            </div>
                                            <div class="form-group">
	                                            <label class="control-label">Address *</label>
	                                            <div class="box-input box-tyle">
	                                                <textarea  type="text" class="form-control">386 wellington, GPO Box 4245, Sydney, middle side,  NSW, 2001, Australia </textarea>	
	                                                
	                                            </div>
                                            </div>
                                            <div class="form-group">
	                                            <label class="control-label">tax code </label>
	                                            <div class="box-input box-tyle">
	                                                <input type="text" class="form-control" value="02841658"/>	
	                                                
	                                            </div>
                                            </div> <!-- <div> -->
                                            <div class="form-group">
	                                            <label class="control-label">Phone * </label>
	                                            <div class="box-input box-tyle">
	                                                <input type="text" class="form-control" value="+84 24 3833 7135"/>	
	                                                
	                                            </div>
                                            </div> <!-- <div> -->
                                            <div class="form-group">
	                                            <label class="control-label">Email * </label>
	                                            <div class="box-input box-tyle">
	                                                <input type="text" class="form-control" value="info.contact@trans.com"/>	
	                                                
	                                            </div>
                                            </div> <!-- <div> -->
                                            <div class="form-group">
	                                        <img src="assets/images/test.jpg" alt="">
                                            </div> <!-- <div> -->    
                                            

            							</div>
                                       
                                        <h3 class="sst-title"><span>contact</span> </h3>
                                        
                                        <div class="box-wrap">
                                        	<div class="form-group">
	                                            <label class="control-label">name *</label>
	                                            <div class="box-input">
	                                                <input type="text" class="form-control md" placeholder="" value ="martin luther king">
	                                            </div>
	                                        </div>

	                                        <div class="form-group">
	                                            <label class="control-label">phone *</label>
	                                            <div class="box-input">
	                                                <input type="text" class="form-control md" placeholder="" value ="+84 24 3833 7135"> 
	                                            </div>
	                                        </div>

	                                        <div class="form-group">
	                                            <label class="control-label">email *</label>
	                                            <div class="box-input">
	                                                <input type="text" class="form-control md" placeholder="" value ="info.contact@trans.com">
	                                            </div>
	                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
			                                <!-- <label class="control-label">Datepicker</label> -->
			                                <label class="checkbox checkbox-custom-alt lbl-note" id="chk_offers">
			                                    <input type="checkbox"><i></i> I agree to the term of <b>partner network policies</b>
			                                </label>
			                                
			                            </div>

                                    </form>
            				</div>
            			</div>
            			<div class="box-right">
            				<div class="box-wrap">
            					<div class="box-top">
	            					<div class="row">
	            						<div class="col-sm-6"><p>partner's service location (province)</p></div>
	            						
	            					</div>
	            				</div>
	            				<div class="box-map">
	            					<p class="box-photo"><img src="assets/images/img-map.png"></p>
	            				</div>
	            				
            				</div>
                                        
                            <div class="box-wrap">
                            	<div class="row featured mt-5">
            						
            						<div class="col-sm-8">
            							<div class="form-group">
										<div class="search" id="main-search">
			                        		<input type="text" class="form-control" placeholder="type to quick access location name">
										</div>
		                                </div>
            						</div>
            					</div>
                            	<div class="row featured">
            						<div class="col-sm-4">
            							<div class="form-group">
		                                    <label class="control-label">ecpected price</label>
		                                    <div class="box-input">
		                                        <input type="number" class="form-control md" placeholder="340$">
		                                    </div>
		                                </div>
            						</div>
            						<div class="col-sm-8">
            							<div class="form-group">
		                                    <label class="control-label">additional request</label>
		                                    <div class="box-input">
		                                    	<!-- <div id="box-add-request" class="box-add-request">
		                                    		
		                                    	</div> -->
		                                    	<textarea id="box-add-request" rows="1"  class="form-control lg" placeholder="" data-toggle="dropdown"  >infant:1 ,pickup board:1 ,pickup point:10 ,cold towel:10,cold water:10 </textarea>
		                                        <!-- <select name="f2" class="form-control lg"
	                                                        data-parsley-trigger="change"
	                                                        required>
                                                    <option value="0">infant 2,pickup board, cold towel16 </option>
                                                    <option value="1">340 USD</option>
                                                    <option value="2">340 USD</option>
                                                </select> -->
                                                <div  class="box-des-list dropdown-menu animated littleFadeInDown">
                                                	<ul class="list-des">
                                                		<li>
                                                			<div>
                                                				<span>Description</span>
                                                				<span>Quantity</span>
                                                			</div>
                                                		</li>

                                                		<li>
                                                			<div>
                                                				<label id="lbl1" class="checkbox checkbox-custom-alt">
				                                                    <input id="ck1" type="checkbox" checked=""><i></i><span id="lbls1">infant</span></label>
				                                                <input type="text" id="ip1" class="form-control ssm input-number" placeholder="0" value="1">
                                                			</div>
                                                			
			                                            </li>
			                                            <li>
                                                			<div>
                                                				<label id="lbl2" class="checkbox checkbox-custom-alt">
				                                                    <input id="ck2" type="checkbox" checked=""><i></i> <span id="lbls2">pickup board</span></label>
				                                                <input type="text" id="ip2" class="form-control ssm input-number" placeholder="0" value="1">
                                                			</div>
                                                			
			                                            </li>
			                                            <li>
                                                			<div>
                                                				<label id="lbl3" class="checkbox checkbox-custom-alt">
				                                                    <input id="ck3" type="checkbox" checked=""><i></i> <span id="lbls3">pickup point</span></label>
				                                                <input type="text" id="ip3" class="form-control ssm input-number" placeholder="0" value="10">
                                                			</div>
                                                			
			                                            </li>
			                                            <li>
                                                			<div>
                                                				<label id="lbl4" class="checkbox checkbox-custom-alt">
				                                                    <input id="ck4" type="checkbox" checked=""><i></i> <span id="lbls4">cold towel</span></label>
				                                                <input type="text" id="ip4" class="form-control ssm input-number" placeholder="0" value="10">
                                                			</div>
                                                			
			                                            </li>
			                                            <li>
                                                			<div>
                                                				<label id="lbl5" class="checkbox checkbox-custom-alt">
				                                                    <input id="ck5" type="checkbox" checked="0"><i></i> <span id="lbls5">cold water</span></label>
				                                                <input type="text" id="ip5" class="form-control ssm input-number" placeholder="0" value="10">
                                                			</div>
                                                			
			                                            </li>
                                                	</ul>
                                                	
                                                	
                                                </div>
		                                    </div>
		                                </div>
            						</div>
            					</div>
                            </div>
            			</div>

            		</div>
            		<div class="box-wrap">
                    	<div class="form-group">
                    		<div class="box-btn">
                    			<button type="submit" class="btn btn-success btn-offers" disabled>submit for review </button>
                    			<span class="policy">by press "submit" you agree to <b>term of the Agreement  & contract of Transportation </b></span>
                    		</div>
                            
                            
                        </div>
                       
                        
                    </div>
            	</div>
            </div>
            
        </section>
        <!--/ CONTENT -->
		<?php include "./templates/footer.php"; ?>
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
        <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>
        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->








        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            
			//$(window).on( 'resize', MINOVATE.documentOnResize.init );
			    
			    $(document).ready(function(){
	                $('#datepicker').datetimepicker();
	                $('#datepicker2').datetimepicker();
	                $('#datepicker3').datetimepicker();
	                var txtTextarea= "";//.box-comment textarea

				    $(".box-requiments h6").click(function(e) {
					  var txt = $(e.target).text();
						var cursorPos = $('#txtArea').prop('selectionStart');
						var v = $('#txtArea').val();
						var textBefore = v.substring(0,  cursorPos );
						var textAfter  = v.substring( cursorPos, v.length );
						$('#txtArea').val( textBefore+ ","+$(e.target).text()+ " " +textAfter);
					});
	                $(".list-des .checkbox").click(function(e) {
					  var txt = $(e.target).text();
						var cursorPos = $('#box-add-request').prop('selectionStart');
						var v = $('#box-add-request').val();
						var textBefore = v.substring(0,  cursorPos );
						var textAfter  = v.substring( cursorPos, v.length );
						// console.log(txt);
						// console.log($(e.target).text());
						if (event.target.checked) {
						    $('#box-add-request').val( textBefore+ $(e.target).text()+ " " +textAfter);
						} 
					});
					// $("#ck-return").click(function(e) {
					//   var txt = $(e.target).text();
					// 	var cursorPos = $('#box-add-request').prop('selectionStart');
					// 	var v = $('#box-add-request').val();
					// 	var textBefore = v.substring(0,  cursorPos );
					// 	var textAfter  = v.substring( cursorPos, v.length );
					// 	// console.log(txt);
					// 	// console.log($(e.target).text());
					// 	if (event.target.checked) {
					// 	    $('#box-add-request').val( textBefore+ $(e.target).text()+ " " +textAfter);
					// 	} 
					// });
					
	                $('.dropdown-adult').click(function() {

					      $('.box-adult').slideToggle();
					  });
	            });
			    // button offers disabled removed
	            const checkbox = document.getElementById('chk_offers')

				checkbox.addEventListener('change', (event) => {
					// console.log($('.btn-offers').getAttribute("disabled"));
				  if (event.target.checked) {
				    $('.btn-offers').removeAttr("disabled");
				  } else {
				    $('.btn-offers').attr('disabled', true);
				  }
				})
				// button offers disabled removed
	            const checkbox1 = document.getElementById('ck_returnway')

				checkbox1.addEventListener('change', (event) => {
					// console.log($('.btn-offers').getAttribute("disabled"));
				  if (event.target.checked) {
				    $('.date-return').removeAttr("disabled");
				  } else {
				    $('.date-return').attr('disabled', true);
				  }
				})
				
				$('.box-adult').click(function(e) {
				    e.stopPropagation();
				});
				$('.box-des-list').click(function(e) {
				    e.stopPropagation();
				});

				// insert number adult and child
				var input1 = document.getElementById("input-adult");
				var input2 = document.getElementById("input-child");
				input1.addEventListener("keyup", function(event) {
					var $textAdult = 0;
					var $textChild = 0;
					var txt = $(event.target).text();
					var cursorPos = $('#txt-pass').prop('selectionStart');
					var v = $('#txt-pass').val("");
					// var textBefore = v.substring(0,  cursorPos );
					// var textAfter  = v.substring( cursorPos, v.length );
					$textAdult = $("#input-adult").val();
					$textChild = $("#input-child").val();
				  if (event.keyCode === 13) {
				  	$('#txt-pass').val( "Aduls:" + $textAdult +" Childs:" + $textChild);
				   
				  }

				});
				$(".input-adult").on("focusout",function(){
			        var $textAdult = 0;
					var $textChild = 0;
					var txt = $(event.target).text();
					var cursorPos = $('#txt-pass').prop('selectionStart');
					var v = $('#txt-pass').val("");
					// var textBefore = v.substring(0,  cursorPos );
					// var textAfter  = v.substring( cursorPos, v.length );
					$textAdult = $("#input-adult").val();
					$textChild = $("#input-child").val();
				  // if (event.keyCode === 13) {
				  	$('#txt-pass').val( "Aduls:" + $textAdult +" Childs:" + $textChild);
				   
				  // }
			    });
				
				input2.addEventListener("keyup", function(event) {
					var $textAdult = 0;
					var $textChild = 0;
					var txt = $(event.target).text();
					var cursorPos = $('#txt-pass').prop('selectionStart');
					var v = $('#txt-pass').val("");
					// var textBefore = v.substring(0,  cursorPos );
					// var textAfter  = v.substring( cursorPos, v.length );
					$textAdult = $("#input-adult").val();
					$textChild = $("#input-child").val();
				  if (event.keyCode === 13) {
				  	$('#txt-pass').val( "aduls:" + $textAdult +" childs:" + $textChild);
				   
				  }
				});

				// click box additional request

				$( ".selected" ).each(function(index) {
				    $(this).on("click", function(){
				        // For the boolean value
				        var boolKey = $(this).data('selected');
				        // For the mammal value
				        var mammalKey = $(this).attr('id'); 
				    });
				});
				$( ".list-des .input-number" ).keyup(function(){
					// var $textAdult = 0;
					// var $textChild = 0;
					var txt = $(event.target).text();
					var cursorPos = $('#box-add-request').prop('selectionStart');
					var v = $('#box-add-request').val("");
					txtArea = "";
					
					for (var i = 1; i <= 5; i++) {
					    // var selector = '' + i;
					    if($("#ck" + i).is(":checked")) {
					    	txtArea += $('#lbls' + i).html() + ":" + + $('#ip' + i ).val()+ ", ";
					    }
					    
					    // console.log($('#ip' + i ).val());
					}
					// console.log(txtArea);
				  if (event.keyCode === 13) {
				  	$('#box-add-request').val( txtArea);
				   
				  }
				});
				$('.list-des .checkbox').click(function(e) {
					var txt = $(event.target).text();
					var cursorPos = $('#box-add-request').prop('selectionStart');
					var v = $('#box-add-request').val("");
					txtArea = "";
					// console.log("test");
					for (var i = 1; i <= 5; i++) {
					    // var selector = '' + i;
					    if($("#ck" + i).is(":checked")) {
					    	txtArea += $('#lbls' + i).html() + ":" + + $('#ip' + i ).val()+ ", ";
					    }
					    
					    // console.log($('#ip' + i ).val());
					}
				    // if(this.checked){
				    	$('#box-add-request').val( txtArea);
				    // }
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