@extends('layouts.landing')

@section('content')
    <div class="parent">
        <div class="child">
            <div class="row">
                <div class="small-12 large-6 columns">
                    Phone Image
                </div>
                <div class="small-12 large-6 columns">
                    <p>Logo</p>
                    <p>Description</p>
                    <form action="">
                        <div class="row collapse">
                            <div class="small-12 large-9 columns">
                                <input type="email" placeholder="Enter your email to get notified...">
                            </div>
                            <div class="small-12 large-3 columns">
                                <button type="submit" class="postfix">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <p class="text-center">Copyright &copy; {{ date('Y') }}, L5 App. All right reserved.</p>
                </div>
            </div>
        </div>
    </div>
@stop
