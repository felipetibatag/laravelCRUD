@extends('layouts.app')
@section('content')
<form class="form" action="{{route('employees.update',$employee)}}" method="POST">
@csrf
@method("PUT")
    <select name="company_id" class="form-control text-uppercase">
    @foreach ($companies as $company)
         @if ($company->id==$employee->company_id)
             <option value={{$company->id}} selected>{{$company->name}}</option>
        @else
            <option value={{$company->id}}>{{$company->name}}</option>
         @endif
    @endforeach
    </select>
    <input value="{{$employee->firstName}}" placeholder="FirstName" name="firstName" type="text" class="form-control"/>
    <input value="{{$employee->lastName}}" placeholder="LastName" name="lastName" type="text" class="form-control"/>
    <input value="{{$employee->email}}" placeholder="Email" name="email" type="text" class="form-control"/>
    <input value="{{$employee->phone}}" placeholder="Phone" name="phone" type="text" class="form-control"/>
    <input type="submit" value="Guardar" class="form-control btn btn-info">
</form>
{{logger($employee)}}
@endsection