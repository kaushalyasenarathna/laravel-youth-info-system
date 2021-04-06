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
      .card-body{
            background-color:#B4045F;
            height:13rem;
            
            text-align:center;
            font-family: 'Poppins', sans-serif;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            border-radius: 25px;

      }
      h4 .btn{
        height:10rem;
        font-size:2rem;
        color: white;
    
    
 
       
      }
      h1{
           font-weight: bold;
     
        margin-left:5rem;
        font-family: 'Poppins', sans-serif;
      }
      body{
        background-image: url("public/nysc.jpg");
      }
      h2{
        text-align:center;
        color:#E6BF52;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
      }
      .card-text {
        color:#B6153A;
        text-decoration: none;
      }

      .album{
      
      } 
      body{
        background-color:#FDD7E4	;
      }
    </style>


    
  </head>
  <body>
    

  <main>

<section class="py-5 text-center container">
      <div class="row py-lg-2">
               <h1 class="fw-light">National Youth Services Council|ජාතික තරුණ සේවා සභාව</h1>
                    <h1>தேசிய இளைஞர் சேவைகள் மன்றம்</h1>
   
      </div>
</section>

                                   <h2>INFORMATION CENTER-MAHARAGAMA</h2>




<div class="album py-5">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
 @foreach ($divition as $item)
 
        <div class="col">
        <a href="{{ route('getpost', $item->id)}}">
          
            <div class="card-body">
               
                <h4 >
                <button type="button" class="btn "> {{$item->divitionName}}</button>
         
                </h4>
                
                
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div> 
          </a>
        </div>
    
 @endforeach
</div>
</div>
</div>

</main>




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
