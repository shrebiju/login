
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
            <label  for="date">Date<span class="asteriskField">*</span></label>
         <i class="fa fa-calendar">
         </i>
        
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
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
  <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
   
</script>
</html>

