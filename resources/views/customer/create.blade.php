@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
   <div class="card mt-4">
   <div class="card-header">
    <h4 class="">Add Category</h4>
   </div>
   <div class="card-body">
   @include('admin.message')
    <form action="{{ route('customer.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Customer Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Here Name" data-validation="required">
        </div>
        <div class="mb-3">
            <label for="">Email Address </label>
            <input type="text" name="email" class="form-control" placeholder="Enter Here Email" data-validation="required">
        </div>
        <div class="mb-3">
            <label for="">Contact Number </label>
            <input type="phone_number" name="phone_number" class="form-control" placeholder="Enter Here Number" data-validation="required">
        </div>
        <div class="mb-3">
            <label for="">Date of Birth </label>
            <input type="dob" name="dob" class="form-control" placeholder="Enter Here Date of Birth" >
        </div>
        <div class="mb-3">
            <label for="">Send Message </label>
            <textarea name="message" row="5" class="form-control"  placeholder="Enter Here Message"  data-validation="required"></textarea>
        </div>
        <input type="hidden" name="user_id" class="form-control" value="{{auth()->user()->id ?? ''}}">
        <div class="mb-3">
        <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
   </div>
    </div>
</div>
@endsection