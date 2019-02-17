@extends('layouts.app')
@section('content')
    <table class="table table-sm">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Website</th>
            <th>Email</th>
            <th colspan="2" class="text-center">
                <a alt="add company" href="{{route('companies.create')}}"><i class="fas fa-plus-circle"></i></a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company )
            <tr>
                <td class="text-capitalize">{{$company->name}}</td>
                <td>{{$company->address}}</td>
                <td>{{$company->website}}</td>
                <td>{{$company->email}}</td>
                <td style="width:1%">
                    <a href="{{route('companies.edit',$company)}}" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{route('companies.destroy',$company->id)}}" id="form">
                        @method("DELETE")
                        <button class="btn btn-danger btn-sm" onClick="$(#form).submit()">
                            <i class="fas fa-trash"></i>
                        </button>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection