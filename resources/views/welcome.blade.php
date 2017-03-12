@extends('layouts.master')

@section('title')
Welcome to Laravel
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('signup') }}" method="post">
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="firstname">Your Firstname</label>
                <input type="text" class="form-control" name="firstname" id="firstname" />
            </div>
            <div class="form-group">
                <label for="password">Your Password</label>
                <input type="password" class="form-control" name="password" id="password" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
        </form>
    </div>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="password">Your Password</label>
                <input type="password" class="form-control" name="password" id="password" />
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>
</div>    
@endsection
