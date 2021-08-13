
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Material Bootstrap Wizard by Creative Tim</title>

  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" />
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />

 

  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
   <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  
  <link href="{{asset('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
  <!-- Google Tag Manager -->
  
  <!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
  
  <!-- End Google Tag Manager (noscript) -->
  <div class="image-container set-full-height" style="background-image: url('Admin_Assit/assets/img/form-image.jpg')">
      <!--   Creative Tim Branding   -->
   

    <!--  Made With Material Kit  -->
   

      <!--   Big container   -->
      <div class="container">
          <div class="row">
            <div class="col-sm-12 col-sm-offset-0">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="" method="" id="datain">
                    <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                          <div class="wizard-header">
                              <h3 class="wizard-title">
                                Welcome to
15 Campbell Street, Amityville, NY 11701
Sign-in to get Started
                              </h3>
                  <!--<h5>This information will let us know more about you.</h5>-->
                          </div>
                <div class="wizard-navigation">
                  <ul>
                                 <li><a href="#details" data-toggle="tab"></a></li>
                                  <li><a href="#captain" data-toggle="tab"></a></li>
                                  <li><a href="#description" data-toggle="tab"></a></li>
                                  <li><a href="#description1" data-toggle="tab"></a></li>
                                   <li><a href="#description2" data-toggle="tab"></a></li>
                                   <li><a href="#description3" data-toggle="tab"></a></li>
                                  

                                  
                              </ul>
                </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="details">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Let's start with the basic details.1</h4>
                                    </div>
                                      <div class="col-sm-6">
                                          <div class="input-group">
                                              <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                              </span>
                                              <div class="form-group label-floating">
                                                  <label class="control-label">First Name</label>
                                                  <input name="FirstName" type="text" id="FirstName"  class="form-control">
                                              </div>


                                          </div>

                                           <div class="input-group">
                                                <span class="input-group-addon">
                                                   <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                     <label class="control-label">Email Address</label>
                                                     <input name="EmailID" id="EmailID" type="Email" class="form-control">
                                               </div>
                                          </div>
                                      </div>

                                      <div class="col-sm-6">
                                          <div class="input-group">
                                              <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                              </span>
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Last Name</label>
                                                  <input name="LastName" id="LastName" type="text" class="form-control">
                                              </div>


                                          </div>

                                           <div class="input-group">
                                                <span class="input-group-addon">
                                                   <i class="material-icons">lock_outline</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                     <label class="control-label">Your Password</label>
                                                     <input name="Pass" id="Pass" type="password" class="form-control">
                                               </div>
                                          </div>
                                      </div>
                                   
                                  </div>
                                      
                                      
                                  
                                </div>


                                <div class="tab-pane" id="captain">
                                    <h2 class="info-text">Are You Pre-Approved for a Home Loan? </h2>
                                   
                                        <div class="col-sm-10 col-sm-offset-1">
                                          
                                          <div class="row">
                                          <div class="form-check ">
                                              <input class="form-check-input" type="radio" name="Home_Loan" id="Home_Loan" value="Yes" style=" border: 0px;width: 10%;height: 2em;">
                                               <label class="form-check-label" for="inlineRadio1" style="font-size:30px;">Yes</label>
                                          </div>
                                          <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="Home_Loan" id="Home_Loan" value="No" style=" border: 0px;width: 10%;height: 2em;">
                                            <label class="form-check-label" for="inlineRadio2" style="font-size:30px;">No</label>
                                          </div>
                                                  
                                              
                                           </div>
                                           
                                        </div>
                                    
                                </div>
                                <div class="tab-pane" id="description">
                                    <div class="row">
                                        <h2 class="info-text"> Are You Working With a Real Estate Agent?</h2>
                                        
                                        <div class="col-sm-10 col-sm-offset-1">
                                          
                                          <div class="row">
                                          <div class="form-check ">
                                              <input class="form-check-input" type="radio" name="Working_Real_Estate" id="Working_Real_Estate" value="Yes" style=" border: 0px;width: 10%;height: 2em;">
                                               <label class="form-check-label" for="inlineRadio1" style="font-size:30px;">Yes</label>
                                          </div>
                                          <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="Working_Real_Estate" id="Working_Real_Estate" value="No" style=" border: 0px;width: 10%;height: 2em;">
                                            <label class="form-check-label" for="inlineRadio2" style="font-size:30px;">No</label>
                                          </div>
                                                  
                                              
                                           </div>
                                           
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="description1">
                                    <div class="row">
                                    <div class="col-sm-12">
                                        <!--<h4 class="info-text"> Let's start with the basic details.</h4>-->
                                    </div>
                                      <div class="col-sm-6">
                                          <div class="input-group">
                                              <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                              </span>
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Agent's First Name</label>
                                                  <input name="Agent_First_Name" type="text" id="Agent_First_Name"  class="form-control" placeholder="Agent's First Name">
                                              </div>


                                          </div>

                                           <div class="input-group">
                                                <span class="input-group-addon">
                                                   <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                     <label class="control-label">Agent's Email</label>
                                                     <input name="Agent_Email" id="Agent_Email" type="Email" class="form-control" placeholder="Agent's Email">
                                               </div>
                                          </div>
                                      </div>

                                      <div class="col-sm-6">
                                          <div class="input-group">
                                              <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                              </span>
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Agent's Last Name</label>
                                                  <input name="Agent_Last_Name" id="Agent_Last_Name" type="text" class="form-control" placeholder="Agent's Last Name">
                                              </div>


                                          </div>

                                           <div class="input-group">
                                                <span class="input-group-addon">
                                                   <i class="material-icons">phone</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                     <label class="control-label">Agent's Phone</label>
                                                     <input name="Agent_Number" id="Agent_Number" type="text" class="form-control" placeholder="Agent's Phone">
                                               </div>
                                          </div>
                                      </div>
                                   
                                  </div>
                                 
                                </div>

                                <div class="tab-pane" id="description2">
                                    <div class="row">
                                        <h2 class="info-text"> Would to See Mortgage Options for This Home?</h2>
                                        
                                        <div class="col-sm-10 col-sm-offset-1">
                                          
                                          <div class="row">
                                          <div class="form-check ">
                                              <input class="form-check-input" type="radio" name="Mortgage_Options" id="Mortgage_Options" value="Yes" style=" border: 0px;width: 10%;height: 2em;">
                                               <label class="form-check-label" for="inlineRadio1" style="font-size:30px;">Yes</label>
                                          </div>
                                          <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="Mortgage_Options" id="Mortgage_Options" value="No" style=" border: 0px;width: 10%;height: 2em;">
                                            <label class="form-check-label" for="inlineRadio2" style="font-size:30px;">No</label>
                                          </div>
                                                  
                                              
                                           </div>
                                           
                                        </div>
                                       
                                    </div>
                                </div>

                                 <div class="tab-pane" id="description3">
                                    <div class="row">
                                        <h2 class="info-text"> Have You Signed The Covid-19 Disclosure?</h2>
                                        
                                        <div class="col-sm-10 col-sm-offset-1">
                                          
                                          <div class="row">
                                          <div class="form-check ">
                                              <input class="form-check-input" type="radio" name="Covid_19_Disclosure" id="Covid_19_Disclosure" value="Yes" style=" border: 0px;width: 10%;height: 2em;">
                                               <label class="form-check-label" for="inlineRadio1" style="font-size:30px;">Yes</label>
                                          </div>
                                          <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="Covid_19_Disclosure" id="Covid_19_Disclosure" value="No" style=" border: 0px;width: 10%;height: 2em;">
                                            <label class="form-check-label" for="inlineRadio2" style="font-size:30px;">No</label>
                                          </div>
                                                  
                                              
                                           </div>
                                           
                                        </div>
                                       
                                    </div>
                                </div>

                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                      <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' onclick="savedata();" />
                                      <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish'   onclick="step5();" />
                                  </div>
                                  <div class="pull-left">
                                      <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' onclick="pre();"/>

                    
                                  </div>
                                  <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->

      

    
    </div>

  </div>

</body>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="{{asset('assets/js/demo.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/material-bootstrap-wizard.js')}}" type="text/javascript"></script>

  <!--  More information about jquery.validate here: https://jqueryvalidation.org/   -->
  <script src="{{asset('assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>

  <script type="text/javascript">
    


function step0()
{ 
   //alert("test");
     
   var _data = {
       FirstName:  $("#FirstName").val(),
       LastName:  $("#LastName").val(),
       EmailID:  $("#EmailID").val(),
       Pass:  $("#Pass").val(),
     }
     
     $.ajax({
                url: "{{url('/welcome/Signin')}}",
                //data: $("#datain").serialize(),
                method: 'post',
                data:_data,
                dataType: 'html',
                success: function (result) {
                    //alert(result);
                },
            })

}
function step1()
{
    //alert("test1");
  //alert($('input[name="Home_Loan"]:checked').val());
   var _data = {
       Home_Loan:  $('input[name="Home_Loan"]:checked').val(),
       
     }

     $.ajax({
                url: "{{url('/welcome/step1')}}",
                //data: $("#datain").serialize(),
                method: 'get',
                data:_data,
                dataType: 'html',
                success: function (result) {
                    //alert("hello");
                },
            })
}
function step2()
{
  //alert("test1");
  //alert($('input[name="Home_Loan"]:checked').val());
   var _data = {
       Working_Real_Estate:  $('input[name="Working_Real_Estate"]:checked').val(),
       
     }

     $.ajax({
                url: "{{url('/welcome/step2')}}",
                //data: $("#datain").serialize(),
                method: 'get',
                data:_data,
                dataType: 'html',
                success: function (result) {
                    //alert("hello1");
                },
            })
}
function step3()
{
  //alert("test1");
  //alert($('input[name="Home_Loan"]:checked').val());
   var _data = {
       Agent_First_Name:  $("#Agent_First_Name").val(),
       Agent_Last_Name:  $("#Agent_Last_Name").val(),
       Agent_Email:  $("#Agent_Email").val(),
       Agent_Number:  $("#Agent_Number").val(),
     }

     $.ajax({
                url: "{{url('/welcome/step3')}}",
                //data: $("#datain").serialize(),
                method: 'get',
                data:_data,
                dataType: 'html',
                success: function (result) {
                   // alert("hello2");
                },
            })
}
function step4()
{
  //alert("test1");
  //alert($('input[name="Home_Loan"]:checked').val());
   var _data = {
       Mortgage_Options:  $('input[name="Mortgage_Options"]:checked').val(),
       
     }

     $.ajax({
                url: "{{url('/welcome/step4')}}",
                //data: $("#datain").serialize(),
                method: 'get',
                data:_data,
                dataType: 'html',
                success: function (result) {
                   // alert("hello3");
                },
            })
}
function step5()
{
  //alert("test1");
  //alert($('input[name="Home_Loan"]:checked').val());
   var _data = {
       Covid_19_Disclosure:  $('input[name="Covid_19_Disclosure"]:checked').val(),
       
     }

     $.ajax({
                url: "{{url('/welcome/step5')}}",
                //data: $("#datain").serialize(),
                method: 'get',
                data:_data,
                dataType: 'html',
                success: function (result) {
                   alert("Data save successfully");
                },
            })
}

  </script>


 

</html>
