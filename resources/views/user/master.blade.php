<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>
<body>
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
                <a class="navbar-brand" href="#">FITNESS-D</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">MEMBERS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">COURSES</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">CONCACT US</a>
                          </li>
                  </ul>
                </div>
              </nav>


              

    @yield('content')
    
</body>

    <footer>
        
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                     <br>
                    </nav>

        @yield('footer')
    
    </footer>
    
</html>