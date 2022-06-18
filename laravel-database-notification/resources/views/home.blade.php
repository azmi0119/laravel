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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    {{ __('Welcome !') }} {{Auth::user()->name}} <br>
                    <form action="{{ route('send.db.notification') }}" method="post">
                        @csrf
                        <input type="hidden" name="auth_id" value="{{Auth::user()->id}}">
                        <input type="submit" name="submit" value="Send DB Notification">
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">{{ __('Read Notification') }}</div>
                            <div class="card-body">
                                @foreach(Auth::user()->readNotifications as $readnotification)
                                    <li>{{ $readnotification->data['order_id'] }}</li>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">{{ __('Unread Notification') }}</div>
                            <div class="card-body">
                                @foreach(Auth::user()->unreadNotifications as $readnotification)
                                    <li>{{ $readnotification->data['order_id'] }}</li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection




