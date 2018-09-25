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

    <title>Service page</title>
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


<div class="wpb_wrapper mt-5">
<h1 style="text-align: center; margin-left: 20px; margin-right: 20px;">We supply a wide range of services to the commercial catering industry.</h1>
<h3 style="text-align: center;">Get In Touch If You Would Like To Arrange A Quote</h3>
</div>

<div class="container" style="margin-top:50px;">
   <div class="row">
    <div class="col-sm-6">
    <img src="{{asset('images/i1.png')}}" style="margin-top:10px;">
    <img src="{{asset('images/i2.png')}}" style="margin-top:30px;">
   </div>
    <div class="col-sm-6">
      <h2>Repair Services</h2>

      <p>We are there when our customers need us most. With out 24hr customer line we’re only
       ever a phone call away to advise in the event of a break down with any equipment.
       Our technicians out on the road each day are able to react to any urgent
      jobs and get to the root of the problem and maintain equipment service
      </p>

      <p>Our experienced technicians and can repair all gas and electric
      cooking equipment, including combination and convection ovens, grills, griddles, fryers, microwaves
      and water boilers
      </p>

      <br>
      <h2 style=margin-top:90px>Maintenance Services</h2>

      <p>The servicing and inspection of any commercial catering equipment is vital. It’s an
      opportunity to make sure that components are in good working order and any potential
      problems are spotted before a loss of efficiency or breakdown. We’ll usually carry out a
      preventative maintenance visit every 6 to 12 months
      depending on the level of service you need.
      </p>

      <p>We’ll carry out the servicing outlined in the schedule as well as any repairs,
      making sure you’re compliant and meeting regulatory standards. We’ll recommission the
      equipment as per the
      manufacturer’s instructions and offer advice and quotations for any recommended repairs</p>
      <p></p>
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

</body>
</html>
