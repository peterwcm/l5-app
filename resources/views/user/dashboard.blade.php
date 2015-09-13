@extends('layouts.master')

@section('content')
    <div class="page">
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

                    You Are Logged In!
                </div>
            </div>
        </div>
    </div>
@endsection
