@extends('layouts.app')
@section('content')
<form class="form" action="{{route('employees.store')}}" method="POST">
@csrf
    <select name="company_id" class="form-control text-uppercase">
        @foreach ($companies as $company )    
            <option value={{$company->id}}>{{$company->name}}</option>
        @endforeach
    </select>
    <input placeholder="FirstName" name="firstName" type="text" class="form-control"/>
    <input placeholder="LastName" name="lastName" type="text" class="form-control"/>
    <input placeholder="Email" name="email" type="text" class="form-control"/>
    <input placeholder="Phone" name="phone" type="text" class="form-control"/>
    <input type="submit" value="Guardar" class="form-control btn btn-info">
</form>
@endsection