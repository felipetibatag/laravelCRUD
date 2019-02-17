@extends('layouts.app')
@section('content')
@if ($company)
    
@endif
<div class="d-flex justify-content-center border border-info">
    <form action="{{route('companies.update',$company)}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-row align-items-center">
            <input type="text" name="name" value="{{$company->name}}" placeholder="Name Company" class="form-control mb-1"/>
            <input type="text" name="address" value="{{$company->address}}" placeholder="Address Company" class="form-control mb-1 "/>
        </div>
        <div class="form-row">
            <input type="text" name="website" value="{{$company->website}}" placeholder="Website Company" class="form-control mb-1"/>
            <input type="text" name="email" value="{{$company->email}}" placeholder="Email Company" class="form-control mb-1"/>
        </div>
        <div class="form-row">
                <input type="file" class="form-control-file" id="logo" lang="es" name="logo">
        </div>
        <div class="form-row">
            <input type="submit" value="Enviar" class="form-control btn btn-info"/>
        </div>
    </form>
    <div class="pl-3">
        <img src="{{asset("storage/$company->logo")}}" class="img-thumbnail" style="width:200px;height:210px">
    </div>
</div>
@endsection