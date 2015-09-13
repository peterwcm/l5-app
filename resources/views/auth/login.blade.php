@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="columns small-12 medium-6 small-centered">
            <div class="panel">
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

                <form role="form" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        <div class="columns small-12">
                            <input class="pretty-input" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="columns small-12">
                            <input class="pretty-input" type="password" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="columns small-12">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                            <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="columns small-12">
                            <button type="submit" class="button expand">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
