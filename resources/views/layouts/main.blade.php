<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model</title>

    @vite('resources/js/app.js')
</head>
<body>
    <section id="movies">
        <div class="container">
           <h1 class="my-3 text-center">Home</h1>
           <div class="d-flex flex-wrap">
               @forelse ($movies as $movie)
               <div class="card m-2" style="width: 18rem;">
                   <div class="card-body">
                     <h5 class="card-title">{{$movie->title}}</h5>
                     <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                     <p class="card-text">{{$movie->nationality}}</p>
                     <p class="card-text">{{$movie->vote}}</p>
                     <p class="card-text">{{$movie->date}}</p>
                   </div>
                 </div>
                   
               @empty
                   <h1>tutt appost</h1>
               @endforelse
           </div>
        </div>
       </section>
</body>
</html>