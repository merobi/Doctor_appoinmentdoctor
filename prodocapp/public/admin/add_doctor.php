<?php include("header.php"); ?>
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Add Doctor</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Doctor</a></li>
            <li class="active">Add Doctor</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
		      <!-- .row -->
      <div class="row" style="background:#fff">
	   <form data-toggle="validator" class="form-horizontal">
        <div class="col-sm-6">
          <div class="white-box">
            <h3 class="box-title m-b-0" style="text-align:center">Personal Information</h3>
            <p class="text-muted m-b-30">  </p>
           
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Title</label>
                 <div class="col-sm-9">
					 <select class="selectpicker m-b-0 m-r-10" style="width:100%" data-style="btn-primary btn-outline" required>
						<option value="">Select Title</option>
						<option value="">Mr.</option>
						<option value="">Mrs.</option>
					</select>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  placeholder="Enter Your First Name"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			  <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  placeholder="Enter Your Last Name"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Birthday</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" required>
					<div class="help-block with-errors"></div>
                </div>
              </div>
               <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Registration No.</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  placeholder="Enter Registration Number"  required>
					<div class="help-block with-errors"></div>
                </div>
              </div>
              
            <h3 class="box-title m-b-0" style="text-align:center">Camber Details </h3>
            <p class="text-muted m-b-30"> </p>
           
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Chamber Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  placeholder="Enter Chamber Name" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Address</label>
                <div class="col-sm-9">
                  <textarea type="email" class="form-control"  placeholder="Enter Address"  required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword4" class="control-label col-sm-3">City</label>
                <div class="col-sm-3">
					 <div class="col-sm-9">
					 <select class="selectpicker m-b-0 m-r-10" style="width:100%" data-style="btn-primary btn-outline" required>
						<option value="">Select City</option>
						<option value="">Mr.</option>
						<option value="">Mrs.</option>
					</select>
                  <div class="help-block with-errors"></div>
                </div>	
				</div>
				<label for="inputPassword4" class="control-label col-sm-3">Post Code</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="Post Code" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			  <div class="form-group">
                <label for="inputPassword4" class="control-label col-sm-3">Contact No</label>
                <div class="col-sm-9">
                 <input type="text" class="form-control" placeholder="Enter Contact Number" required>
                  <div class="help-block with-errors"></div>
				</div>				
              </div>
			   <div class="form-group">                
				<label for="inputPassword4" class="control-label col-sm-3">Support No</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="Enter Support Number" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			
           
			
          </div>
        </div>
		<div class="col-sm-6">
          <div class="white-box">
            <h3 class="box-title m-b-0" style="text-align:center">Degree And Speciality</h3>
            <p class="text-muted m-b-30"> </p>
           
               <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Degree</label>
                <div class="col-sm-9">
					 <select class="selectpicker m-b-0 m-r-10" style="width:100%" data-style="btn-primary btn-outline" required>
						<option value="">Select Degree</option>
						<option value="">Mr.</option>
						<option value="">Mrs.</option>
					</select>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Speciality</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="Enter Speciality "  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Sub Speciality</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="Enter Speciality "  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
             
              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                  <button type="submit" class="btn btn-info">Add Another Speciality</button>
                </div>
              </div>
          
		  <h3 class="box-title m-b-0" style="text-align:center">Institution Details</h3>
            <p class="text-muted m-b-30"> </p>
           
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Institution Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  placeholder="Enter Institution Name" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Address</label>
                <div class="col-sm-9">
                  <textarea type="email" class="form-control"  placeholder="Enter Address"  required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword4" class="control-label col-sm-3">City</label>
                <div class="col-sm-3">
                  <select class="selectpicker m-b-0 m-r-10" style="width:100%" data-style="btn-primary btn-outline" required>
						<option value="">Select City</option>
						<option value="">Mr.</option>
						<option value="">Mrs.</option>
					</select>
				</div>
				<label for="inputPassword4" class="control-label col-sm-3">Post Code</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="Post Code" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			
			  
			  <h3 class="box-title m-b-0" style="text-align:center">Account Details</h3>
            <p class="text-muted m-b-30">  </p>
           
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputName4" placeholder="Cina Saffary" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword4" class="control-label col-sm-3">Password</label>
                <div class="col-sm-4">
                  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword4" placeholder="Password" required>
                  <span class="help-block">Minimum of 6 characters</span> </div>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="inputPasswordConfirm4" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                  <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </div>
            </form>
			
          </div>
        </div>
        </div>

      <!-- /.row -->
      <!-- .right-sidebar -->
      <div class="right-sidebar">
        <div class="slimscrollright">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
          <div class="r-panel-body">
            <ul>
              <li><b>Layout Options</b></li>
              <li>
                <div class="checkbox checkbox-info">
                  <input id="checkbox1" type="checkbox" class="fxhdr">
                  <label for="checkbox1"> Fix Header </label>
                </div>
              </li>
              
            </ul>
            <ul id="themecolors" class="m-t-20">
              <li><b>With Light sidebar</b></li>
              <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
              <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
              <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
              <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
              <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
              <li><a href="javascript:void(0)" theme="megna" class="megna-theme working">6</a></li>
              <li><b>With Dark sidebar</b></li>
              <br/>
              <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
              <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
              <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

              <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
              <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
              <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
            </ul>
            <ul class="m-t-20 chatonline">
              <li><b>Chat option</b></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> Design And Develop By : Techcoderz LTD</footer>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!-- Plugin JavaScript -->
<script src="plugins/bower_components/moment/moment.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
// Clock pickers
$('#single-input').clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  'default': 'now'

});

$('.clockpicker').clockpicker({
    donetext: 'Done',
    
})
  .find('input').change(function(){
    console.log(this.value);
});

$('#check-minutes').click(function(e){
  // Have to stop propagation here
  e.stopPropagation();
  input.clockpicker('show')
      .clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
  $('input').prop('readOnly', true);
}
// Colorpicker

$(".colorpicker").asColorPicker();
$(".complex-colorpicker").asColorPicker({
    mode: 'complex'
});
$(".gradient-colorpicker").asColorPicker({
    mode: 'gradient'
});
// Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
      });
      
    jQuery('#date-range').datepicker({
        toggleActive: true
      });
    jQuery('#datepicker-inline').datepicker({
        
        todayHighlight: true
      });

// Daterange picker

$('.input-daterange-datepicker').daterangepicker({
          buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-danger',
                cancelClass: 'btn-inverse'
        });
            $('.input-daterange-timepicker').daterangepicker({
                timePicker: true,
                format: 'MM/DD/YYYY h:mm A',
                timePickerIncrement: 30,
                timePicker12Hour: true,
                timePickerSeconds: false,
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-danger',
                cancelClass: 'btn-inverse'
            });
            $('.input-limit-datepicker').daterangepicker({
                format: 'MM/DD/YYYY',
                minDate: '06/01/2015',
                maxDate: '06/30/2015',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-danger',
                cancelClass: 'btn-inverse',
                dateLimit: {
                    days: 6
                }
            });
</script>
<!--Style Switcher -->
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>
<script src="js/validator.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
