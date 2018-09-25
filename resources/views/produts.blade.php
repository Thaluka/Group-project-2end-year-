
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

    <title>Products page</title>
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




















<br><br>
<h2 align="center">Products</h2>
<div class="container">
    <div class="row text-center">
		<div class="card-deck">

    		<!--Panel-->
    		<div class="card">
        		<div class="card-body">

            		<h5 class="card-title">Barbeque machine</h5>


             		<div class="col-md-12 col-md-offset-1">
						<img src="{{ asset('images/barbeque.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
					</div>

            		<!-- <p class="card-text">This is a longer panel with supporting text below as a natural lead-in to additional content.
                                                This content is a little bit longer.</p> -->
        		</div>
    		</div>
            <!--end Panel-->


    	    <!--Panel-->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Four Burner Cooker</h5>

                    <div class="col-md-12">
                    <img src="{{ asset('images/4burner.jpg')}}" alt="..." class="img-thumbnail rounded-float-right" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <!--end Panel-->



            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Burner Wok</h5>

                    <div class="col-md-12">
                    <img src="{{ asset('images/burnerwok.jpg')}}" alt="..." class="img-thumbnail rounded-float-right" width="100%" height="100%">
                    </div>

                </div>
            </div>


    <!--Panel-->
   			<div class="card">
        		<div class="card-body">
            		<h5 class="card-title">Food Display Cabinet</h5>

            		<div class="col-md-12">
					<img src="{{ asset('images/product5.png')}}" alt="..." class="img-thumbnail rounded-float-right" width="100%" height="100%">

					</div>
        		</div>
    		</div>
    <!--/.Panel-->
		</div>
	</div>
</div>

<br><br>


<div class="container">
    <div class="row text-center">
        <div class="card-deck">

        <!--Panel-->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Stockpot Burner</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/stockpot.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Wine cooler</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/winecooler.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Meat display cabinets</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/meatdisplay.png')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Salad Counter</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/salad.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

<br><br>


<div class="container">
    <div class="row text-center">
        <div class="card-deck">


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Table top cake display</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/caketop.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>



             <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Boiling Pan</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/boilingpan.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dish washer</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/dishwasher.png')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>


             <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bratt Pan</h5>
                    <div class="col-md-12 col-md-offset-1">
                        <img src="{{ asset('images/brattpan.png')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
                    </div>

                </div>
            </div>




        </div>
    </div>
</div>

<br> <br>
<br>
     <div class="card-footer text-muted">
    <h4>Get in touch</h4>
    <p>Telephone :- 011-2590758<br>
      Address:- No.252, Golumadama Junction, Rathmalana<br>
        Email:- sales@asparai.com<br>
    </p>
