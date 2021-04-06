<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
   
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .btn-primary{
        margin-left:85rem;
        margin-bottom:5rem;
        font-size:2rem;
      }
      h4{
        height:5rem;
      }
      h1{
     
        font-weight: bold;
        color:#B4045F;
        margin-left:5rem;
        font-family:Bradley Hand, cursive;
      }
      h4 .btn{
       
        font-size:1.8rem;
        color: #461B7E	;
        
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;}
    </style>

    
  </head>
  <body>
    
<!-- <header>
 
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Youth </strong>
      </a>
      <a href="{{ route('login') }}">Login</a>
    </div>
  </div>
</header> -->

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-2">
    
        <h1 class="fw-light">National Youth Services Council|ජාතික තරුණ සේවා සභාව</h1>
        <h1>தேசிய இளைஞர் சேவைகள் மன்றம்</h1>
     
    </div>
  </section>


  
 

<div class="album py-5 bg-light">
    <div class="container">
    <a class="btn btn-primary" href="  ">BACK</a> 
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
   
 @foreach ($data as $item) 

 
<!-- <button type="submit" class="btn btn-danger">delete</button> -->
<a   href="{{route('programme.edit',$item->id)}}">
 <div class="con">
        <div class="col">
          <div class="card shadow-sm">
 

          {{-- <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$item->img}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">  --}}
            <img src="images/{{$item->img}}" class="bd-placeholder-img card-img-top" width="100%" height="215" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
            
            <div class="card-body">
        
                <h4 class="card-text">     <button type="button" class="btn "> {{$item->programme}}</button></h4>
              <p class="card-text"> </p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
        
            </div>
          </div>
        </div>
     </div>
     </a> 

 @endforeach

</div>
</div>

</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
