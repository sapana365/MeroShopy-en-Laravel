<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">MeroShopy</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="/myorders">Orders</a></li>
            </ul>
            <form action="/search" class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" name="query" class="form-control search-box" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/cartlist"></a></li>
              @if(Session::has('user'))
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/logout">Logout</a></li>
                </ul>
              </li>
              @else
              <li><a href="/login">Login</a></li>
              <li><a href="/login">Register</a></li>
              @endif
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    
</body>
</html>