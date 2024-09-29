<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
        @if(Session('success'))
   
   <div class="alert alert-success">
   {{ Session('success') }}
   </div>
  
  @endif
        </div>
    </div>
  
    <div class="row justify-content-center">

   
        <div class="col-8 mt-5 card p-3">
        <div class="text-center mb-3 p-3 bg-info text-white card">
    <h3>Add data Form</h3>
    </div>
    <div class="col-4">
    <a href="{{ route('index') }}" class="btn btn-success" >Show Data</a>
    </div>
    <form action="{{route('store')}}" method="post">
        @csrf
       



        <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control  @error ('name')
           is-invalid
        @enderror " name="name" id=""  placeholder="">
        @error ('name')
           <span class="text-danger">  {{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control @error ('email')
           is-invalid
        @enderror " name="email"  placeholder="">
        @error ('email')
           <span class="text-danger">  {{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control @error ('age')
           is-invalid
        @enderror " name="age" id=""  placeholder="">
        @error ('age')
           <span class="text-danger">  {{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control @error ('city')
           is-invalid
        @enderror" name="city" id=""  placeholder="">
        @error ('city')
           <span class="text-danger">  {{ $message }}</span>
        @enderror
      </div>
      <button type="submit"  class="btn btn-primary">Submit</button>
      </form>
        </div>
    </div>
  </div>
  
  </body>
</html>