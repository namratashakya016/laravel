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
    <x-header componentName="List"/> 
    <div class="container">
    <h3 class="text-center">List of Save Information  <a href="/insert" class="btn btn-primary">Add Data</a></h3> 

   
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Designation</th>
          <th scope="col">Organisation</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody> 
       
          @foreach($cruds as $crud)  
          <tr >  
            <td>{{$crud->id}}</td>  
            <td>{{$crud->full_name}}</td>  
            <td>{{$crud->email}}</td>  
            <td>{{$crud->mobile}}</td>  
            <td>{{$crud->designation}}</td>             
            <td>{{$crud->organisation}}</td>             
            <td><a href="/edit/{{$crud->id}}" class="btn btn-primary">Update</a>&nbsp <a href="/delete/{{$crud->id}}" class="btn btn-danger">Delete</a></td>             
           
          </tr>  
         @endforeach
       
      </tbody>
    </table>


   </div>
</body>
</html>
