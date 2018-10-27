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
    <link href="{{ asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />


    <title>Request services</title>
    <style media="screen">


</style>
<section>
  
    <nav class="mango_mid navbar navbar-expand-lg navbar-light ">
      <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
           <img src="http://localhost:8000/images/logo.png" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
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
      <li class="mangonav_tab nav-item  ml-0 active col-auto mr-auto">
        <a class="nav-link text-left" href="#" >Service request<span class="sr-only">(current)</span></a>
      </li>
      <li class="mangonav_tab nav-item  ml-0   col-auto mr-auto">
        <a class="nav-link text-left" href="#">Status</a>
      </li>

      <li class="mangonav_tab nav-item  ml-0  col-auto mr-auto">
        <a class="nav-link text-left" href="#">Rating</a>
      </li>


    </ul>
    <ul class="navbar-nav ml-auto mt-0">
      <li class="nav-item dropdown mangonav_tab">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <strong style="font-weight:bold; font-size:18px;">{{ Auth::user()->fname }} <span class="caret"></span>(<span>{{ Auth::user()->admin }}</span>)</strong>
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
  <section>
           <div  class="container  mango_form col-lg-6 col-md-8 col-xs-12 col-10  mt-4 mb-4">
      <div class="card-header row">
	        <p  class="col-sm-8 offset-sm-4" >Write your request</p>
	   </div>
	   <div class="card-body">
       @if(Session::has('flash_message_success'))

           <div class="col-sm-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert"></button>
                        <strong>{!! session('flash_message_success') !!}</strong>
           </div>
        @endif

            <form action="{{url('complain')}}" method="post">{{csrf_field()}}



	       
             <div class="form-group">
                  <label for="exampleFormControlTextarea1">Product Category</label>
                   <!-- <input type="text" class="form-control" name="address" value="" id="exampleFormControlInput1" placeholder="Enter your product name" required> -->
                   <select name="kitchen equipments">
                    <option value="none">-</option>
                    <option value="">Food Display Cabinet</option>
                    <option value="">Burner</option>
                    <option value="">Cooler</option>
                    </select>

              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Product Name</label>
                   <input type="text" class="form-control" name="address" value="" id="exampleFormControlInput1" placeholder="Enter your product name" required>
                 
             </div>


             <div class="form-group">
                  <label for="exampleFormControlTextarea1">Message</label>
                  <textarea class="form-control message" name="complain" id="exampleFormControlTextarea1" rows="3" required></textarea>
             </div>

              <div class="form-group">
                  <label for="exampleFormControlInput1">Image</label><br>
                  input a image of the product if can:
                  <input type="file" name="myFile"><br><br>
  
             </div>


			 <div class="form-group">
                  <label for="exampleFormControlInput1">Address</label>
                  <input type="text" class="form-control" name="address" value="{{old('address')}}" id="exampleFormControlInput1" placeholder="Enter your place address" required>
             </div>

			 <div class="form-group">
                  <label for="exampleFormControlInput1">City</label>
                  <input type="text" class="form-control" name="region" value="{{old('region')}}" id="exampleFormControlInput1" placeholder="Enter the city near by your place" required>
             </div>

			 <div class="form-group row mt-0">
                    <div class="col-sm-4 offset-sm-8">
                         <button type="submit" class="btn btn-primary col-12 " name="login">Submit</button>
                    </div>
              </div>
       </form>
   </div>
</div>

  </section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="htt                                                          ps://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
