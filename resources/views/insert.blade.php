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
    <x-header componentName="create"/> 
    <div class="container">
    <h3 class="text-center">Save Information <a href="/show"  class="btn btn-primary">View List</a></h3> 
      
        <form method="post" action="insert-data">
          @csrf
            <div class="form-group">      
              <label for="full_name">Full Name:</label>  
              <input type="text" class="form-control" name="full_name"/> 
              <span style="color: red">@error('full_name'){{$message}}@enderror</span>
          </div>  
          <div class="form-group">      
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email"/> 
              <span style="color: red">@error('email'){{$message}}@enderror</span> 
          </div>  
          <div class="form-group">      
              <label for="mobile">Mobile:</label>  
              <input type="text" class="form-control" name="mobile"/> 
              <span style="color: red">@error('mobile'){{$message}}@enderror</span>
          </div>  
          <div class="form-group">      
              <label for="designation">Designation:</label> 
              <input type="text" class="form-control" name="designation"/>
              <span style="color: red">@error('designation'){{$message}}@enderror</span>  
          </div>
          <div class="form-group">      
              <label for="organisation">Organisation:</label> 
              <input type="text" class="form-control" name="organisation"/> 
              <span style="color: red">@error('organisation'){{$message}}@enderror</span> 
          </div>  
        <br/>  
        <button type="submit" class="btn btn-primary" >Insert</button>
        </form>
   </div>
</body>
</html>
