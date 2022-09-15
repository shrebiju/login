<!DOCTYPE html>
<html>
<head>
  <title> Customer Relation Management (CRM)</title>
  <style type="text/css">
  </style>
</head>
<body>
@if (session()->has('success'))
<div class="alert alert-success" id="alert-message">
    @if(is_array(session('success')))
        <ul>
            @foreach (session('success') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @else
        {{ session('success') }}
    @endif
</div>
@endif                       
</body>

<script type="text/javascript">
$(document).ready(function () {
    $('.alert alert-success').delay(5000).slideUp(300);
});
</script>
