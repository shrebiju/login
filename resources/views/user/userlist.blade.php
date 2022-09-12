@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
   <div class="card mt-4">
   <div class="card-header">
    <h4 class=""> Registration List</h4>
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
                        <th>Phone Number</th>
                        <th>Message</th>
                    </tr>
                    </thead>
                    <tbody id="tablebody">
                        
                    <!-- @foreach($user as $index=>$userlist)
                                <tr class="gradeX" id="">
                                    <td class="index">
                                        {{ ++$index }}
                                       } 
                                    </td>
                                    <td class="title">
                                        {{ $userlist->name }}
                                    
                                    </td>
                                    <td class="attachment">
                                        {{ $userlist->email }}
                                    </td>
                                </a>
                                </td> 
                                </tr>
                            @endforeach -->
                            @if( Auth::check())
                            @if(Auth::user()->role_as == 1)
                            @foreach($user as $index=>$userlist)
                            <tr class="gradeX" id="">
                                    <td class="index">
                                        {{ ++$index }}
                                    </td>
                                    <td class="title">
                                        {{ $userlist->name }}
                                    </td>
                                    <td class="attachment">
                                        {{ $userlist->email }}
                                    </td>
                                    <td class="attachment">
                                        {{ $userlist->phone_number }}
                                    </td>
                                    <td class="attachment">
                                        {{ $userlist->message }}
                                    </td>
                                </a>
                                </td> 
                                </tr>
                                @endforeach 
                                @endif
                                @endif
                                @if(Auth::user()->role_as == 0)
                                <tr class="gradeX" id="">
                                    <td class="index">
                                      
                                        {{ Auth::user()->name }} 
                                    </td>
                                    <td class="title">
                                       
                                        {{ Auth::user()->email }} 
                                    </td>
                                    <td class="attachment">
                                    {{ Auth::user()->phone_number }} 
                                    </td>
                                    <td class="attachment">
                                    {{ Auth::user()->message }} 
                                    </td>
                                </a>
                                </td> 
                                </tr>
                                @endif
                               


                            
                    </tbody>
                </table>
            </div>
        </div>
   </div>
    </div>
</div>
@endsection