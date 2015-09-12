@extends('layouts.master')

@section('content')
<div class="row">
    <div class="panel">
        <div>Sign Up</div>
        <div>
            @if (count($errors) > 0)
                <div data-alert class="alert-box alert">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <a href="javascript:void(0)" class="close">&times;</a>
                </div>
            @endif

            <form role="form" method="POST" action="{{ url('/auth/signup') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="columns small-12 medium-6">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="columns small-12 medium-6">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="columns small-12 medium-6">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation">
                    </div>
                </div>

                <div class="row">
                    <div class="columns small-12 medium-6">
                        <label>First Name</label>
                        <input type="text" name="first_name" value="{{ old('first_name') }}">
                    </div>
                    <div class="columns small-12 medium-6">
                        <label>Last Name</label>
                        <input type="text" name="last_name" value="{{ old('last_name') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="columns small-12 medium-4">
                        <button type="submit" class="button expand">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
