@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
   <div class="card mt-4">
   <div class="card-header">
    <h4 class=""> Customer List</h4>
   </div>
   <div class="card-body">
    <div class="box-body px-4">
            <div class="dataTables_wrapper dt-bootstrap4">
                <table id="example1" class="table table-bordered table-hover role-table">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Message</th>
                        <th class="dt-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="tablebody">
                    @foreach($data as $index=>$customerlist)
                                <tr class="gradeX" id="">
                                    <td class="index">
                                        {{ ++$index }}
                                    </td>
                                    <td class="title">
                                        {{ $customerlist->name }}
                                    </td>
                                    <td class="attachment">
                                        {{ $customerlist->email }}
                                    </td>
                                    <td class="attachment">
                                        {{ $customerlist->phone_number }}
                                    </td>
                                    <td class="attachment">
                                        {{ $customerlist->description }}
                                    </td>
                                    <td class="justify-content-center d-flex p-2">
                                    <form action="{{ route('customer.destroy', $customerlist->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                    </form>
                                            </a>    &nbsp&nbsp   
                                        &nbsp&nbsp  
                                     <a href="{{route('customer.edit',$customerlist->id)}}" id="">
                                    <button type="button" class="btn btn-primary btn-flat">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>
                                </td> 
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   </div>
    </div>
</div>
@endsection