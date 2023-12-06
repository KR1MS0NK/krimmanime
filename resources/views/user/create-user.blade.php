<!DOCTYPE html>
<html>
    <head>

        <title class="h1">KRIManime</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{'/style.css'}}" rel="stylesheet" >
        <link href="{{'/signin.css'}}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
        


        

    </head>

    <body class="mainstyle">
        
            <nav class="navbar navbar-expand-lg navbar-dark bg-black">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/"><img src= "{{'logo.jpg'}}" alt="logo" width="150" /></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/anime-list">Anime List</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Other Sites
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="https://animekaizoku.com/">Animekaizoku</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="https://gogoanime.ai/">Gogoanime</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{'/upload'}}">Upload Anime</a>
                      </li>
                       <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                      </li>  -->
                    </ul>
                    <ul class="navbar-nav me mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{'/user'}}">Users</a>
                      </li>

                    </ul>
                    <form class="d-flex" action="{{ url('/s-result') }}" mehod="GET">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                      <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        
        <div class="bodystyle words body">

          <div class="container text-center ">

            
           @if(session('success'))

              <h4 class="words alert alert-danger"> {{session('success')}}</h4>

           @endif


            <form class="form-signin" method="post" action="{{route('createUser')}}">
             @csrf
             <h1 class="h3 mb-3 font-weight-normal">Create User</h1>

             <label  class="sr-only"></label>
             <input type="name" name="name" class="form-control" placeholder="Name" required="" value="{{old('name')}}" >

             <label for="inputEmail" class="sr-only"></label>
             <input type="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="" value="{{old('name')}}">

             <label for="inputPassword" class="sr-only"></label>
             <input type="password" name="password" class="form-control" placeholder="Password" required="" value="{{old('name')}}">

             <button class="btn btn-lg btn-danger btn-block" type="submit">Create</button>

          
            </form>
             

          
           
           
          

        
            
          </div>
    
        </div>
      

        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    </body>
</html>