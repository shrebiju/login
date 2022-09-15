
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Styles -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="">
    <style>
    .astricshow {
	margin-left: 5px;
	color: red;
    }
    </style>
    <div class="container-fluid px-4">
   <div class="card mt-4">
   <div class="card-header">
    <h4 class="">Add Category</h4>
   </div>
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
   @include('admin.message')
   <div class="card-body">
    <form action="{{ route('frontend.customer.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Customer Name <span class="astricshow">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="Enter Here Name" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email  <span class="astricshow">*</span></label>
            <input type="text" name="email" class="form-control" placeholder="Enter Here Email" data-validation="required">
        </div>
        <div class="mb-3">
            <label for="">Contact Number  <span class="astricshow">*</span></label>
            <input type="number" name="phone_number" class="form-control" placeholder="Enter Here Number" data-validation="required">
        </div>
        <div class="mb-3">
            <label for="">Date of Birth  </label>
            <input type="number" name="dob" class="form-control" placeholder="Enter Here DOB"data-validation="required">
        </div>
        <div class="mb-3">
            <label for="">Send Message </label>
            <textarea name="message" row="5" class="form-control" placeholder="Send Message"data-validation="required"></textarea>
        </div>
        <input type="hidden" name="user_id" value="{{$model}}">
    </div>
        <div class="mb-3">
        <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
  
   </div>
    </div>
</div>
    </body>
  
</html>

