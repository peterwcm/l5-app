@extends('layouts.email')

@section('heading', 'Reset Your Password')

@section('content')
    <div>
        You can reset your password with the link below.<br />
        <a class='button' href="{{ URL::route('password.reset', array($token)) }}">Reset</a><br />
        This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.<br />
        Regards<br />
        The L5 App Team
    </div>
@stop