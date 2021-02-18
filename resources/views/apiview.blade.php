<!DOCTYPE html>
<html>
<head>
    <title>Laravel Cruds</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</head>
<body>
    <x-header componentName="api"/> 
    <div class="container">
    <h3 class="text-center">Get api by using http client</h3> 
  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
        </tr>
    @foreach($collection as $user)
        <tr >  
          <td>{{$user['id']}}</td>  
          <td>{{$user['first_name']}} {{$user['last_name']}}</td>  
          <td>{{$user['email']}}</td>  
        </tr>

    @endforeach
        
   </div>
</body>
</html>
