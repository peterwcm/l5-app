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

            <form role="form" method="POST" action="{{ url('/auth/signup') }}">
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
                        <input class="pretty-input" type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="columns small-12">
                        <input class="pretty-input" type="text" name="last_name" placeholder="Last name" value="{{ old('last_name') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="columns small-12">
                        <button type="submit" class="button expand">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
