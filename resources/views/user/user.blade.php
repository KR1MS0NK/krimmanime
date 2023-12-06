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
                       <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                      </li>  -->

                     
                    </ul>
                    <ul class="navbar-nav me mb-2 mb-lg-0">
                      <li>
                        <a class="nav-link active" aria-current="page" href="{{'/upload'}}">
                        Upload Anime
                        </a>
                      </li>
                      <li>
                        <a class="nav-link active" aria-current="page" href="{{'/create'}}">
                          New User
                        </a>
                      </li>
                      <li class="nav-item">
                       <a class="nav-link active " aria-current="page" href="{{'/logout'}}">
                         <button class="btn btn-sm btn-danger btn-block" >Logout</button>
                       </a>
                      </li>
                    </ul>
                    <!-- <form class="d-flex" action="{{ url('/s-result') }}" mehod="GET">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                      <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form> -->
                  </div>
                </div>
            </nav>
        
        <div class="bodystyle">

          <div class="container">

          
            
           <div>
             <table class="table table-black table-bordered words " style="width:350px">
              <thead>
               <tr>
                 <th scope="col">Name</th>
                 <th scope="col">E-mail</th>
               </tr>
              </thead>
              <tbody>
               @foreach($list as $user)
                <tr>
                 <td class="words">
                   {{ $user->name }}
                 </td>
                 <td class="words">
                   {{ $user->email }}
                 </td>
                </tr>
                @endforeach
              </tbody>
             </table>

           </div>


          
             

               
          </div>
    
        </div>
      

        <footer>

         <div class="container">
          
          <div class=" row align-items-end">
          <div class="col foot1">
            <p><img src= "logo.jpg" alt="logo" width="150" /></p>
          </div>

          <div class="col foot2">
            <p style="margin-bottom:-3px">Arthur: KRIMSONkay</p>
            <p class="ft" style="margin-top:-5px">© KRIManime. All Rights Reserved.</p>
          </div>

          <div class="col foot3">
            <p class="navbar-dark"> 
              <a class="a" href="https://instagram.com/krimson_kay/"><i class="bi bi-instagram"></i></a>
              <a class="a" href="https://www.facebook.com/kwame.ansah.9028"><i class="bi bi-facebook"></i></a>
              <a class="a" href="https://t.me/krimsonkay"><i class="bi bi-telegram "></i></a>
              <a class="a" href="mailto:ansahkwame@yahoo.com" target="blank" ><i class="bi bi-envelope "></i></a>
            </p>
          </div>
          </div>


         </div>


         </footer>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    </body>
</html>