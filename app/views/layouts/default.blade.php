<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="css/bootstrap.css" media="screen">
  <style>
  .red {background-color:#F00;}
  .green {background-color:#0F0;}
  .blue {background-color:#00F;}
    .login {margin-left: 160px;}


  </style>
<head>
  <title>@yield('pageTitle')</title>
</head>
<body>

    

<div class="container">
  <div class="welcome">
  @yield('welcome')
  </div>


<div class="navbar navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/">Home</a>
                  <a class="navbar-brand" href="#">FAQ</a>
                  <a class="navbar-brand" href="#">Signup</a>
                  <a class="navbar-brand" href="#">Community</a>
                  <a class="navbar-brand" href="#">Blog</a>
                  <a class="navbar-brand" href="#">Register</a>
                  <form class="navbar-form navbar-right login" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>

                </div>
</div> <!-- end container -->




    <div class="container">
      <!-- Main home page content -->
      <div class="row">
        <div class="col-md-8">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
      

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>