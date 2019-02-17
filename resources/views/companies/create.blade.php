@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center border border-info">
    <form action="{{route('companies.store')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row align-items-center">
            <input type="text" name="name" placeholder="Name Company" class="form-control mb-1"/>
            <input type="text" name="address" placeholder="Address Company" class="form-control mb-1 "/>
        </div>
        <div class="form-row">
            <input type="text" name="website" placeholder="Website Company" class="form-control mb-1"/>
            <input type="text" name="email" placeholder="Email Company" class="form-control mb-1"/>
        </div>
        <div class="form-row">
                <input type="file" class="form-control-file" id="logo" lang="es" name="logo">
        </div>
        <div class="form-row">
            <input type="submit" value="Enviar" class="form-control btn btn-info"/>
        </div>
    </form>
</div>
@endsection