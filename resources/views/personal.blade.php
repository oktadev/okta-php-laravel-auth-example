@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Personal Home Page</div>
                <div class="card-body">
                    You are logged in as {{ Auth::user()->name }}! <br>
                    Your email address is {{ Auth::user()->email }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
