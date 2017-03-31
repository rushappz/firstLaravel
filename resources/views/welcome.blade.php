@extends('layouts.master')

@section('title')
Welcome to Laravel
@endsection

@section('content')
@if(count($errors)>0)
<div class="row">
    <div class="col-md-6 col-md-offset-4">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('signup') }}" method="post">
            <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ Request::old('email') }}" />
            </div>
            <div class="form-group {{ $errors->has('firstname') ? 'has-error':'' }}">
                <label for="firstname">Your Firstname</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="{{ Request::old('firstname') }}" />
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">
                <label for="password">Your Password</label>
                <input type="password" class="form-control" name="password" id="password" value="{{ Request::old('password') }}" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
        </form>
    </div>
    <div class="col-md-6">
        <form action="{{ route('signin') }}" method="post">
            <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ Request::old('email') }}" />
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">
                <label for="password">Your Password</label>
                <input type="password" class="form-control" name="password" id="password" value="{{ Request::old('password') }}" />
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
        </form>
    </div>
</div>    
@endsection
