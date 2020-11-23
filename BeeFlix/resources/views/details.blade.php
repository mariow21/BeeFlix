<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Details</title>
  </head>
  <body>
        <div class="container bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">BeeFlix</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-nav">
                        <a class="nav-link" href="{{ route('drama') }}">Drama <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-nav">
                        <a class="nav-link" href="{{ route('kids') }}">Kids <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tv') }}">TV Show <span class="sr-only">(Current)</span></a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
            </nav>

            <div class="btn-group" role="group" aria-label="Basic example">
                <a type="button" class="btn btn-secondary btn-dark txt-light" href="{{ url()->previous() }}">Kembali</a>
                <a type="button" class="btn btn-secondary btn-light btn-outline-secondary txt-dark" href="{{ route('home') }}">Lihat Semua Menu</a></a>
            </div>
            
            <div class="container bg-white mt-4 py-3">
                <div class="row">
                    <div class="col">
                            <img src={{ asset('/' . $movie->photo)}} class="card-img-top" alt="...">
                    </div>
                    <div class="col">
                    <h5 class="title">{{$movie -> title}}</h5>
                        <h5 class="rating">Rating </h5><p>{{$movie -> rating}}</p>
                        <p>{{$movie -> desc}}</p>
                        <h6>Kategori</h6><p>{{ $movie -> genre -> name }}</p>
                    </div>
                    <div class="col"> 
                        <h6>Episode</h6>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Episode</th>
                                <th scope="col">Judul</th>
                              </tr>
                            </thead>
                            @foreach ( $paginate as $pag)
                            <tbody>
                              <tr>
                                <th scope="row"><h6>{{$pag -> episode}}</h6></th>
                                <td>{{$pag -> title}}</td>
                              </tr>
                            @endforeach                                                     
                        </table>
                        {{$paginate-> links()}}  
                    </div>
                </div>
            </div>

        <h1 style="color: lightyellow">.</h1>
        </div>
 



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>