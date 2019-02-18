@extends('layouts.app')
@section('content')
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Company</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th colspan="2">
                    <a href="{{route('employees.create')}}"><i class="fas fa-plus-circle"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee )        
                <tr>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->firstName}}</td>
                    <td>{{$employee->lastName}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>
                    <td><a class=" btn btn-sm" href="{{route('employees.edit',$employee->id)}}"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('employees.destroy',$employee->id)}}" method="POST" id="frmElimina"> 
                        @csrf
                        <button class="btn btn-sm" onClick='$(#frmElimina).submit()'><i class='fas fa-trash'></i></button>
                        @method("delete")
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection