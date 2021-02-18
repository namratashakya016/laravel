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
    <x-header componentName="Update"/> 
    <div class="container">
      @if(Session::has('msg'))
       <div class="alert alert-danger" role="alert">       
       <h4>{{Session::get('msg')}}</h4>
      </div> 
     @endif
    <h3 class="text-center">Update Information <a href="/show"  class="btn btn-primary">View List</a> <a href="/insert" class="btn btn-primary">Add Data</a></h3> 
      
        <form method="post" action="{{route('data.update')}}">
          @csrf
            <div class="form-group">      
              <label for="full_name">Full Name:</label>  
              <input type="hidden" class="form-control" name="id" value="{{$crud->id}}" /> 
              <input type="text" class="form-control" name="full_name" value="{{$crud->full_name}}" /> 
              <span style="color: red">@error('full_name'){{$message}}@enderror</span>
          </div>  
          <div class="form-group">      
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" value="{{$crud->email}}"/> 
              <span style="color: red">@error('email'){{$message}}@enderror</span> 
          </div>  
          <div class="form-group">      
              <label for="mobile">Mobile:</label>  
              <input type="text" class="form-control" name="mobile" value="{{$crud->mobile}}"/> 
              <span style="color: red">@error('mobile'){{$message}}@enderror</span>
          </div>  
          <div class="form-group">      
              <label for="designation">Designation:</label> 
              <input type="text" class="form-control" name="designation" value="{{$crud->designation}}"/>
              <span style="color: red">@error('designation'){{$message}}@enderror</span>  
          </div>
          <div class="form-group">      
              <label for="organisation">Organisation:</label> 
              <input type="text" class="form-control" name="organisation" value="{{$crud->organisation}}"/> 
              <span style="color: red">@error('organisation'){{$message}}@enderror</span> 
          </div>  
        <br/>  
        <button type="submit" class="btn btn-primary" >Update</button>
        </form>
   </div>
</body>
</html>
