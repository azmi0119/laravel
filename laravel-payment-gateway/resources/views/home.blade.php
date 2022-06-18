@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to Dashboard') }}
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{url('/stripe-payment')}}" target="_blank" class="btn btn-primary">Strip Payment Gateway</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{url('/razorpay-payment')}}" target="_blank" class="btn btn-primary">RazorPay Payment Gateway</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{url('/subscribe-process')}}" target="_blank" class="btn btn-primary">PayU Money Payment Gateway</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
