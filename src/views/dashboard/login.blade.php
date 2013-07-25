@extends('syntara::layouts.dashboard.master')

@section('content')
<script type="text/javascript" src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/login.js') }}"></script>
<script type="text/javascript" src="{{ asset('packages/mrjuliuss/syntara/assets/js/forms/check.js') }}"></script>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="container">
            <div class="row-fluid">
                <div class="span4 offset4">
                    <form id="login-form" method="post" class="form-horizontal">
                        <p class="account-username">
                            <input type="text" class="span12" placeholder="Username" name="login" id="login">
                        </p>
                        <p class="account-password">
                            <input type="password" class="span12" placeholder="Password" name="pass" id="pass">
                        </p>
                        <button class="btn btn-block btn-large btn-primary">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop