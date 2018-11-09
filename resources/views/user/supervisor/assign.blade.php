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


    <title>ASSIGN page</title>
    
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


    <nav class="mango_bottom navbar navbar-expand-lg navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#"></a>
      <ul class="navbar-nav mt-0">
        <li class="mangonav_tab nav-item active ml-0   col-auto mr-auto">
          <a class="nav-link text-left" href="#" >Technician Assign<span class="sr-only">(current)</span></a>
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


    <section>

       <div class="container">

      <div class="row">
        <div class="col-8">
                <div class="row">
          <div class="col-4">
            <br>

          <b> Complaint Details</b><br><br>


          <img src="{{ asset('images/barbeque.jpg')}}" alt="..." class="img-thumbnail rounded-float-left" width="100%" height="100%">
        </div>
        <div class="col-8">
          <br><br><br>

          <ul>
            <li>Company Name :- </li>
            <li>Email:- </li>
            <li>Product Category :-</li>
            <li>Message :- </li>
            <li>Address  :-</li>
            <li>City :-</li>
          </ul>
          </div>
        </div>


          
          <!-- <div class="col-lg-10 mt-4"> -->
           <!--  <table class="table  table-striped table-responsive" width="100%">
              <thead>
                <tr class="bg-primary"  style="color:#FFFFFF;">
                    <th class="bg-primary"></th>
                    <th class="bg-primary">Company name</th>
                    <th class="bg-primary">Customer's mail</th>
                    <th class="bg-primary">Message</th>
                    <th class="bg-primary">Location</th>
                    <th class="bg-primary">Date & time</th>
                    <th class="bg-primary">Action</th>
                </tr>
              </thead>

              <tbody class="table-dark">
                @foreach ($complains as $complain)
                <tr>
                    <td>{{$complain->jobid}}</td>
                    <td>{{$complain->company}}</td>
                    <td>{{$complain->customeremail}}</td>
                    <td>{{$complain->description}}</td>
                    <td>{{$complain->location}}</td>
                    <td>{{$complain->created_at}}</td>
                    <td class="center">

                      <a href="{{url('/assign')}}" class="btn btn-success btn-min mr-1">Assign Technician</a>
                      <a href="#" class="btn btn-danger btn-min ml-1">Reject</a></td>
                </tr> 

                @endforeach
 
              </tbody>
            </table> -->
          </div>
      
      <div class="col-4" style="background-color: grey" ><br><br> SEARCH TECHNICIAN</div>
    </div>


    </section>

 
  




















  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="htt                                                          ps://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
