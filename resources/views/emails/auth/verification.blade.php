@extends('layouts.email')

@section('heading', 'Confirm Your Email Address')

@section('content')
    <div>
        Hi {{ $name }},<br />
        Welcome to L5 App! Please confirm your email address with the link below.<br />
        <a href="{{ URL::route('verify-email', array('code' => $code, 'user_id' => $user_id)) }}">Confirm</a><br />
        Regards<br />
        The L5 App Team
    </div>
@stop