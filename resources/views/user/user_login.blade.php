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

    <title>Login page</title>
    <style media="screen">


    .mango_mid{
      min-height: 50px;
      background-color:#031768;
    }

    .mango_bottom{
      min-height: 30px;
      background-color:#CCCCCC ;
      border-bottom: solid 2px #CCCCCC ;
    }
    .mango_texthead{
      font-weight: bold;
      font-family: Roboto;
      color: #FFFFFF;
    }

    .mangonav_tab{
      font-size: 20px;
      font-weight: bold;
      font-style: normal;
      font-family:Roboto Medium;
      color: #FFFFFF;
    }
    /*.imgshow{
      border: solid 2px #000000;
      border-bottom: solid 2px #000000;
    }*/
    .mango_logform{
        min-height: 400px;
        background-color:#ffffff;
        border: 2px solid #f2f2f2;
		box-shadow: 1px 1px 1px 1px;

      }
      label{
        font-size: 18px;
        font-weight: bold;
        font-style: normal;
        margin-top: 0PX;
        font-family:sans-serif;
        color: #000;
      }
      .form-group{
        margin-top:30px;
      }
      input[type="password"]{
		 border: solid #bfbfbf 2px;
      }
      input[type="email"]{

        border: solid #bfbfbf 2px;
      }

      h3{
        text-justify:inter-word;
        margin-top:60px;
        margin-bottom:60px;
      }
	  .link_text{
		  font-size:12px;
		  font-weight:bold;
	  }

	  li a{
		  color:#ffffff;
	  }


      input[type="submit"]{
		font-size:18px;
		font-weight:bold;
        float:right;
        margin-top:20px;
      }

	  .card-header{
		  background-color:#00F;
		  color:#FFFFFF;
		  height:50px;
		  font-size:16px;
		  font-weight:bold;
	  }
</style>
<section>
    <nav class="mango_mid navbar navbar-expand-lg navbar-light ">
      <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
           <img src="{{ asset('images/logo.png')}}" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
      </div>
      <ul class="mango_texthead navbar-nav mr-auto mt-0 mt-lg-1">
          <!-- <h2 style="color:#FFFFFF;  text-justify:inter-word;text-align:Center;font-weight:550;">ASPARAI<br><span style="margin-left:15px; margin-right:15px;"> REPAIR</span><span  style="margin-left:5px; margin-right:10px;">  &</span><span  style="margin-left:5px; margin-right:10px;"> MAINTENANCE<span><span  style="margin-left:5px; margin-right:10px;"> SERVICE<span></h2> -->

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
    <a class="navbar-brand" href="{{url('home')}}"></a>
    <ul class="navbar-nav mt-0">
      <li class="mangonav_tab nav-item active ml-0 col-md-3  col-auto mr-auto">
        <a class="nav-link text-left" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="mangonav_tab nav-item active ml-0 col-md-3  col-auto mr-auto">
        <!--<a class="nav-link text-left" href="{{url('products')}}">Products</a>-->
      </li>
      <li class="mangonav_tab nav-item active ml-0 col-md-3 col-auto mr-auto">
        <!--<a class="nav-link text-left" href="{{url('services')}}">Services</a>-->
      </li>
      <li class="mangonav_tab nav-item active ml-0 col-md-3 col-auto mr-auto">
        <!--<a class="nav-link text-left" href="{{url('contacts')}}">Contact</a>-->
      </li>


    </ul>
    <ul class="navbar-nav ml-auto mt-0">
      <li class="mangonav_tab nav-item active col-md-2 col-auto mr-auto">
        <a class="nav-link" href="{{url('regcustomer')}}">Register</a>
      </li>
    </ul>
    </div>
    </nav>
  </section>

<section>
  <div  class="container  mango_logform col-lg-4 col-md-6 col-xs-12 col-10  mt-4">
      <div class="card-header row">
	        <p  class="col-sm-4 offset-sm-4" >Login with us</p>
	   </div>
	   <div class="card-body">
       @if(Session::has('flash_message_success'))

           <div class="col-sm-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert"></button>
                        <strong>{!! session('flash_message_success') !!}</strong>
           </div>
        @endif
            <form action="{{url('user')}}" method="post">{{csrf_field()}}
              <div class="form-group row">
                   <label for="email" class="col-sm-1 offset-sm-1 col-xs-3 offset-xs-1 col-form-label"><span class="mb-1"><img src="{{asset('images/user.png')}}" width="35px" height="35px" alt="Responsive image" class="d-inline-block align-left"></label>
                   <div class="col-sm-9 col-xs-8">
                      <input type="email" class="form-control" name="email" placeholder="Enter Your E-mail" >
                   </div>
              </div>
              <div class="form-group row">
                   <label for="password" class="col-sm-1 offset-sm-1 col-xs-3 offset-xs-1 col-form-label"><span class="mb-1"><img src="{{asset('images/pass.png')}}" alt="Responsive image" width="35px" height="35px" class="align-left"></span></label>
                   <div class="col-sm-9 col-xs-8">
                      <input type="password" class="form-control" name="password" placeholder="Enter Your Password" >
                   </div>
              </div>

              <div class="form-group row mt-0">
                <div class="col-sm-6 offset-sm-2">
                   <p class="link_text text-left"> Register with us <a href="{{url('regcustomer')}}"> Sign up</a></p>
                </div>
              </div>

               <div class="form-group row mt-0">
                    <div class="col-sm-9 offset-sm-2">
                         <button type="submit" class="btn btn-primary col-12 " name="login">Login</button>
                    </div>
              </div>


   </form>
   </div>
</div>
</section>
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
