@extends('layouts.master')

<style>
    	.astricshow {
	margin-left: 5px;
	color: red;
}
</style>
@section('content')

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
   <div class="card-body">
   @include('admin.message')
    <form action="{{ route('customer.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Customer Name <span class="astricshow">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="Enter Here Name" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email Address <span class="astricshow">*</span></label>
            <input type="text" name="email" class="form-control" placeholder="Enter Here Email" required>
        </div>
        <div class="mb-3">
            <label for="">Contact Number <span class="astricshow">*</span></label>
            <input type="phone_number" name="phone_number" class="form-control" placeholder="Enter Here Number" required>
        </div>
        <div class="mb-3">
            <label for="">Date of Birth </label>
            <input type="dob" name="dob" class="form-control" placeholder="Enter Here Date of Birth" >
        </div>
        <div class="mb-3">
            <label for="">Send Message </label>
            <textarea name="message" row="5" class="form-control"  placeholder="Enter Here Message"  required></textarea>
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