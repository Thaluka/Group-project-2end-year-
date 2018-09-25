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
            <a class="nav-link text-left" href="{{url('products')}}">Products</a>
          </li>
          <li class="mangonav_tab nav-item active ml-0 col-md-3 col-auto mr-auto">
            <a class="nav-link text-left" href="{{url('services')}}">Services</a>
          </li>
          <li class="mangonav_tab nav-item active ml-0 col-md-3 col-auto mr-auto">
            <a class="nav-link text-left" href="{{url('contacts')}}">Contact</a>
          </li>


        </ul>
        <ul class="navbar-nav ml-auto mt-0">
          <li class="mangonav_tab nav-item active col-md-2 col-auto mr-auto">
            <a class="nav-link" href="{{url('user')}}">Login</a>
          </li>
        </ul>
        </div>
        </nav>
      </section>

  <!-- <section>
    @if(Session::has('flash_message_success'))
 -->
      <!--   <div class="col-sm-4 offset-sm-5 alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert"></button>
                     <strong>{!! session('flash_message_success') !!}</strong>
        </div> -->
   <!--   @endif
  </section> -->
    <!--  <section> -->
       <div class="imgshow col-sm-12 mt-0" align="center">

            <!--<img class="slidimg" style="width:100%;  height:400px"src="images/f.jpg"  alt="Responsive image" class="d-inline-block align-left"/>-->
              <img class="slidimg" style="width:100%;  height:550px"src="{{ asset('images/index3.png')}}"  alt="Responsive image" class="d-inline-block align-left"/>
              <img class="slidimg" style="width:100%;  height:550px"src="{{ asset('images/index5.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
              <img class="slidimg" style="width:100%;  height:550px"src="{{ asset('images/14.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
              <img class="slidimg" style="width:100%;  height:550px"src="{{ asset('images/15.jpg')}}"
                alt="Responsive image" class="d-inline-block align-left"/>
              <img class="slidimg" style="width:100%;  height:550px"src="{{ asset('images/16.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
              <img class="slidimg" style="width:100%;  height:550px"src="{{ asset('images/c.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
              <img class="slidimg" style="width:100%;  height:550px"src="{{ asset('images/19.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>
              <img class="slidimg" style="width:100%;  height:550px"src="{{ asset('images/product1.jpg')}}"  alt="Responsive image" class="d-inline-block align-left"/>




      </div>
      <script>
              var myIndex = 0;
              carousel();

              function carousel() {
              var i;
              var x = document.getElementsByClassName("slidimg");
              for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 1500);
              }
       </script>
     <!-- </section> -->
     <br>

     <div class="container">

   <p>
     <h2 align="center" class="text-primary" >ASPARAI</h2>
     <h3 align="center" >Asian Chill Equipment(Pvt) Ltd<br>
     Protector Of The Food, From Kitchen to Display.<br>We provide the best service for your Kithchen equipments.<br></h3>
   </p>

 </div>



     <div class="container">
    <div class="row text-center">
    <div class="card-deck">
        <!--Panel-->
        <div class="card ">
            <div class="card-body">

                <h3 class="card-title" style="color: #031768">Our Vision</h3>


                <div class="col-md-12 ">
            <!-- <img src="img/product1.jpg" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%"> -->
          </div>

                <p align="left">To Be the Leader in Designing Kitchen Concepts as well as Kitchen Manufacturer and Kitchen Equipment Internationally</p>

            </div>

        </div>



      <!--Panel-->
        <div class="card">
            <div class="card-body ">
                <h3 class="card-title" style="color: #031768">Our Mission</h3>

                <div class="col-md-12">
          <!-- <img src="img/product2.jpg" alt="..." class="img-thumbnail rounded-float-right" width="100%" height="100%">  -->
          </div>

                <p align="left">Designing Kitchens as well as Supply and Installation Of Kitchen Equipment!</p>
               <!--  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>



    </div>
  </div>
</div>
<br><br>

<br>
<div class="container">
<div class="row ">
<div class="col-md-6">


  <h3 style="color: #031768">Our Achievements</h3>
  <ul>
    <li>Sri Lanka Entrepreneur of the year 2006</li>
    <li>National Merit Award (Small category by) FCCISL)</li>
    <li>Sri Lanka Entrepreneur of the year 2008<br>
          National Silver Award (Small category by) FCCISL)
    </li>
    <li>Industrial Excellence Award 2007/2013<br>
        By Sri Lanka chamber of small industries</li>
    <li>Implemented the 5S system in factory</li>
    <li>Production improvement program is being carried out with Ministry of Industrial Development</li>

  </ul>
</div>

<div class="col-md-6">
  <img src="images/award.jpg">
</div>
<br><br>
</div>
</div>


<hr>


  <h3 style="margin-left:50px ;color: #031768">Our Clients</h3>

  <div class="container">
    <div class="row text-center">
       <div class="col-sm-2">

        <img  src="images/ps1.jpg" width="150px" height="150px" >
      </div>
       <div class="col-sm-2">
        <img  src="images/cred.jpg"  width="150px" height="150px">
      </div>
       <div class="col-sm-2">
        <img  src="images/puss.jpg"  width="150px" height="150px">
      </div>
      <div class="col-sm-2">
        <img  src="images/cinnamon.jpg"  width="150px" height="150px">
      </div>
        <img  src="images/fab1.jpg"  width="150px" height="150px">
      <div class="col-sm-2">
        <img src="images/kings.png"  width="150px" height="150px">
      </div>
    </div>
  </div>
</div>
</div>







<br>
<br>
     <div class="card-footer text-muted">
    <h4>Get in touch</h4>
    <p>Telephone :- 011-2590758<br>
      Address:- No.252, Golumadama Junction, Rathmalana<br>
        Email:- sales@asparai.com<br>
    </p>















<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="htt                                                          ps://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
 -->
