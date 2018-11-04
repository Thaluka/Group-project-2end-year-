<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png" />

    <title>Employee Register page</title>
     <link href="{{ asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />

    <section>
      <nav class="mango_mid navbar navbar-expand-lg navbar-light ">
        <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
          <img src="{{ asset('images/logo.png')}}" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
        </div>
        <ul class="mango_texthead navbar-nav mr-auto mt-0 mt-lg-1">

          <h2 class=" font-weight-bold " style="margin-right:100px; color:#FFFFFF">ASPARAI<span style="margin-left:15px; margin-right:15px; ">REPAIR & MAINTENANCE SERVICE</span></h2>
         </ul>
      </nav>
    </section>

     <section>
    <nav class="mango_bottom navbar navbar-expand-lg navbar-light ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"></a>
    <ul class="navbar-nav mt-0">
      <li class="mangonav_tab nav-item active ml-0   col-auto mr-auto">
        <a class="nav-link text-left" href="{{url('employreg')}}">Employee Registration<span class="sr-only">(current)</span></a>
      </li>
      <li class="mangonav_tab nav-item active ml-0   col-auto mr-auto">
        <a class="nav-link text-left" href="#">Job details</a>
      </li>

      <li class="mangonav_tab nav-item active ml-0  col-auto mr-auto">
        <a class="nav-link text-left" href="#">Customer Details</a>
      </li>


      <li class="mangonav_tab nav-item active ml-0  col-auto mr-auto">
        <a class="nav-link text-left" href="#">Employee Details</a>
      </li>


    </ul>
    <ul class="navbar-nav ml-auto mt-0">
      <li class="nav-item dropdown mangonav_tab">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <strong style="font-weight:bold; font-size:18px;">{{ Auth::user()->fname }}(<span>{{ Auth::user()->admin }}</span>) <span class="caret"></span></strong>
                </a>

                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
    </ul>
    </div>
    </nav>
  </section>
    <br>

  <section>
  <div class="container mango_regform col-lg-4 col-md-6 col-xs-12 col-10 card">
       <div class="card-header row">
	        <p class="col-sm-8" >Register with us</p>
	   </div>
	   <div class="card-body">
	   <form action="{{url('regcustomer')}}" method="post" >{{csrf_field()}}



              <div class="form-group row">

                   <div class="col-sm-6 mb-1">
                      <input type="text" class="form-control"  name="fname" value="{{old('fname')}}" placeholder="Employee's first name" required>
                   </div>

                   <div class="col-sm-6 mb-1">
                      <input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Employee's last name" required>
                   </div>
              </div>


               <div class="form-group row">
                   <div class="col-sm-12 mt-1">
                        <input type="text" class="form-control" name="company" value="{{old('company')}}" placeholder="Employee ID" required>
                    </div>
              </div>


               <div class="form-group row">
                   <div class="col-sm-12 mt-1">
                        <input type="text" class="form-control" name="company" value="{{old('company')}}" placeholder="Job Role" required>
                    </div>
              </div>

              <div class="form-group row">

                   <div class="col-sm-12 mt-1">
                      <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter e-mail address" required>
                   </div>
              </div>

			  <div class="form-group row">
          @if($errors->has('password'))
          <div class="alert alert-danger col-sm-12 " role="alert">
               <strong>'At least 6 characters required'</strong>
               <button type="button" class="close" data-dismiss="alert"></button>

          </div>
          @endif

                   <div class="col-sm-12 mt-1">
                      <input type="password" class="form-control" name="password"  id="password" placeholder="Enter a password" required>
                   </div>
              </div>

              <div class="form-group row">

                   <div class="col-sm-12 mt-1">
                      <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm the password">
                   </div>
              </div>

			  <div class="form-group row">

                   <div class="col-sm-12 mt-1">
                      <input type="text" class="form-control" name="nid" value="{{old('nid')}}" placeholder="Enter NIC Number" required>
                   </div>
              </div>

              <div class="form-group row">

                    <div class="col-sm-12 mt-1">
                        <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}" placeholder="Enter contact number" required>
                    </div>
              </div>


              <div class="form-group row">
                   <div class="col-sm-12 mt-1">
                        <input type="text" class="form-control" name="company" value="{{old('company')}}" placeholder="Enter adress" required>
                    </div>
              </div>

               <!-- <div class="form-group row">

                     <div class="col-sm-12 mt-1">
                         <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Enter your work place address" required>
                     </div>
               </div> -->






               <div class="form-group row mt-0">
                    <div class="col-sm-8 offset-sm-2">
                         <button type="submit" class="btn btn-primary col-12 " name="login">Register</button>
                    </div>
              </div>


   </form>
   <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

 <style>
    #form label{float:left; width:140px;}
    #error_msg{color:red; font-weight:bold;}
 </style>

 <script>
    $(document).ready(function(){
        var $submitBtn = $("#form input[type='submit']");
        var $passwordBox = $("#password");
        var $confirmBox = $("#confirm_password");
        var $errorMsg =  $('<span id="error_msg">Passwords do not match.</span>');

        // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
        $submitBtn.removeAttr("disabled");

        function checkMatchingPasswords(){
            if($confirmBox.val() != "" && $passwordBox.val != ""){
                if( $confirmBox.val() != $passwordBox.val() ){
                    $submitBtn.attr("disabled", "disabled");
                    $errorMsg.insertAfter($confirmBox);
                }
            }
        }

        function resetPasswordError(){
            $submitBtn.removeAttr("disabled");
            var $errorCont = $("#error_msg");
            if($errorCont.length > 0){
                $errorCont.remove();
            }
        }


        $("#confirm_password, #password")
             .on("keydown", function(e){
                /* only check when the tab or enter keys are pressed
                 * to prevent the method from being called needlessly  */
                if(e.keyCode == 13 || e.keyCode == 9) {
                    checkMatchingPasswords();
                }
             })
             .on("blur", function(){
                // also check when the element looses focus (clicks somewhere else)
                checkMatchingPasswords();
            })
            .on("focus", function(){
                // reset the error message when they go to make a change
                resetPasswordError();
            })

    });
  </script>
	   </div>
  </div>
  </section>
<br/>


</div>
<br>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="htt                                                          ps://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
