 

 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
.grid-container {
  display: grid;
  grid-gap: 50px;
  border-style: solid;
  border-color:red;
  padding:80px;
}
.btn{
       
       
       margin-left:30rem;
        }
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px;
  font-size: 30px;
}

.item1 {
  grid-column: 1 / span 2;
  grid-row: 1;
  color:darkblue;
}

.item2 {
  grid-column: 3;
  grid-row: 1 / span 2;
}
 
.item4{
 text-align:left;
 width:40rem;
}
.item5 {
  grid-column: 1 / span 3;
  grid-row: 3;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
 
<form action="{{route('programme.update',$programme->id)}}" method="POST"  >
@method('put')
 @csrf
 

  
 </form>
  
 
<div class="grid-container">
  <div class="grid-item item1"> <h1>{{$programme->programme}}</h1> {{$programme->name}}</div>
  <div class="grid-item item2">
      
      {{-- <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$programme->img}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">  --}}
              <img src="/images/{{$programme->img}}" class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
              
       </div>

  <div class="grid-item item4"> {{$programme->description}}</div>
  <div class="grid-item item5"> <a class="btn btn-primary" href="{{ route('home') }}"><button type="button" class="btn-primary">BACK</button></a></div>

 


</div>

 <h4> CONTACT US {{$programme->title}}</h4>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>