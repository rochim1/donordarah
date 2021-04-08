@extends('layouts.master')
@section('title','login page')


@section('style')
<link href="{{asset('assets/css/signup.css')}}" rel="stylesheet">
@endsection


@section('content')
<div class="wpo-login-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="wpo-accountWrapper" method="POST" action="{{route('login-user')}}">
                    @csrf
                    <div class="wpo-accountInfo">
                        <div class="wpo-accountInfoHeader">
                            <a href="#"><img src="assets/images/logo-3.png" alt=""></a>
                            <a class="wpo-accountBtn" href="{{route('register')}}">
                                <span class="">Create Account</span>
                            </a>
                        </div>
                        <div class="image">
                            <img src="assets/images/login.svg" alt="">
                        </div>
                        <div class="back-home">
                            <a class="wpo-accountBtn" href="{{route('home')}}">
                                <span class="">Back To Home</span>
                            </a>
                        </div>
                    </div>
                    <div class="wpo-accountForm form-style">
                        <div class="fromTitle">
                            <h2>Login</h2>
                            <x-jet-validation-errors class="mb-3 rounded-0" />
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <p>Sign into your pages account</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <label>Email</label>
                                <input type="text" id="email" name="email" placeholder="your email">
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="pwd6" type="password" placeholder="password" name="password">
                                </div>
                                <span class="input-group-btn">
                                    <button class="btn btn-default reveal6" type="button"><i
                                            class="glyphicon glyphicon-eye-open"></i></button>
                                </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="check-box-wrap">
                                    <div class="input-box">
                                        <style>
                                            input[type=checkbox] + label:before{
                                                position: relative;
                                                left: 0px;
                                                margin-right: 15px ;
                                            }
                                        </style>
                                        <input type="checkbox" id="fruit4" class="position-relative" name="remember">
                                        <label for="fruit4">Remember Me</label>
                                    </div>
                                    <div class="forget-btn">
                                        <a href="forgot.html">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <button type="submit" class="wpo-accountBtn">Login</button>
                            </div>
                        </div>
                        <h4 class="or"><span>OR</span></h4>
                        <ul class="wpo-socialLoginBtn">
                            <li><button class="facebook" tabindex="0" type="button"><span><i
                                            class="fa fa-facebook"></i></span></button></li>
                            <li><button class="twitter" tabindex="0" type="button"><span><i
                                            class="fa fa-twitter"></i></span></button></li>
                            <li><button class="linkedin" tabindex="0" type="button"><span><i
                                            class="fa fa-linkedin"></i></span></button></li>
                        </ul>
                        <p class="subText">Don't have an account? <a href="{{route('register')}}">Create free account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
