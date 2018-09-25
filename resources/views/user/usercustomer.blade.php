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

    <title>Home page</title>
    <style media="screen">

        .mango_mid{
          min-height: 50px;
          background-color:#0000cc;
        }

        .mango_bottom{
          min-height: 30px;
          background-color:#fdfdfd;
          border-bottom: solid 2px #0000cc;
        }
        .mango_texthead{
          font-weight: bold;
          font-family: sans-serif;
        }

        .mangonav_tab{
          font-size: 24px;
          font-weight: bold;
          font-style: normal;
          font-family:sans-serif;
          color: #F5FFFF;
        }
        .imgshow{
          border: solid 2px #000000;
          border-bottom: solid 2px #000000;
        }
        .btn{
        	margin-top:20px;
        	margin-bottom:20px;
        }
    </style>
    <section>
        <nav class="mango_mid navbar navbar-expand-lg navbar-light ">
          <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
               <img src="{{ asset('images/logo.png')}}" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
          </div>
          <ul class="mango_texthead navbar-nav mr-auto mt-0 mt-lg-1">
              <h2 style="color:#FFFFFF;  text-justify:inter-word;text-align:Center;font-weight:545;">ASPARAI<span style="margin-left:5px; margin-right:5px;"> Management </span><span  style="margin-left:5px; margin-right:5px;">  &</span><span  style="margin-left:5px; margin-right:5px;">   Service<span></h2>
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
        <ul class="navbar-nav ml-auto mt-0">
          <li class="mangonav_tab nav-item active ml-0 col-md-2  col-auto mr-auto">
            <a class="nav-link text-left" href="indexmy.php">Customers<span class="sr-only">(current)</span></a>
          </li>
          <li class="mangonav_tab nav-item active ml-0 col-md-2  col-auto mr-auto">
            <a class="nav-link text-left" href="#">Request</a>
          </li>
          <li class="mangonav_tab nav-item active ml-0 col-md-2 col-auto mr-auto">
            <a class="nav-link text-left" href="#">Jobstatus</a>
          </li>
          <li class="mangonav_tab nav-item active ml-0 col-md-2 col-auto mr-auto">
            <a class="nav-link text-left" href="#">Report</a>
          </li>


        </ul>
        <ul class="navbar-nav ml-auto mt-0">
          <li class="mangonav_tab nav-item active col-md-2  col-auto mr-auto">
            <a>hjhjhjh</a>
          </li>
          <li class="mangonav_tab nav-item active col-md-2  col-auto mr-auto">
            <a class="nav-link" href="{{route('logout')}}">{{Auth::user()->fname}}</a>
          </li>
        </ul>
        </div>
        </nav>
      </section>
  <br>
  <section>
    @if(Session::has('flash_message_success'))

        <div class="col-sm-4 offset-sm-5 alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert"></button>
                     <strong>{!! session('flash_message_success') !!}</strong>
        </div>
     @endif
  </section>
     <section>
       <div class="row">
         <div class="col-md-5 col-sm-12">

            <div class="card-body" id="butn">
              <a href="uploadol.php" class="btn col-6 btn-success btn-lg btn-block">Status</a>
              <a href="{{url('complain')}}" class="btn col-6 btn-success btn-lg btn-block">Complain</a>
              <a href="uploadengol.php" class="btn col-6 btn-success btn-lg btn-block">Rate Technican</a>
              <a href="uploadengal.php" class="btn col-6 btn-success btn-lg btn-block">Profile</a>
            </div>

         </div>
      </div>
     </section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="htt                                                          ps://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
