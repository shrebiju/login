@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
   <div class="card mt-4">
   <div class="card-header">
    <h4 class="">Edit Category</h4>
   </div>
   <div class="card-body">
    <form action="{{ route('customer.update',$customers->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{$customers->name}}">
        </div>
        <div class="mb-3">
            <label for="">Email </label>
            <input type="text" name="email" class="form-control" value="{{$customers->email}}">
        </div>
        <div class="mb-3">
            <label for="">Contact Number </label>
            <input type="phone_number" name="phone_number" class="form-control" value="{{$customers->phone_number}}">
        </div>
        <div class="mb-3">
            <label for="">Send Message </label>
            <textarea name="message" row="5" class="form-control">
            {{  $customers->message  }}
            </textarea>
        </div>
        <div class="col-md-6">
        <button type="submit" class="btn btn-primary">update</button>
        </div>
    </form>
   </div>
    </div>
</div>
@endsection