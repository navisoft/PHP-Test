@extends('layouts.master')

@section('content')
    <form class="form-horizontal" role="form" method="post">
        <h4>Login use your existing account</h4>
        @if(isset($message['summary']))
            <span>{{ $message['summary'] }}</span>
        @endif
        {!! csrf_field() !!}
        <div class="form-group @if(isset($message['username'])) has-error @endif">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="{{$data['username'] or ''}}" />
                @if(isset($message['username'])) <span class="help-block">{{ $message['username'][0]  }}</span> @endif
            </div>
        </div>
        <div class="form-group @if(isset($message['password'])) has-error @endif">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" />
                @if(isset($message['password'])) <span class="help-block">{{ $message['password'][0] }}</span> @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
        <h4>Or Login use your Google account</h4>
        <div class="form-group">
            <div class="col-sm-10">
                <a href="{{ urldecode($data['gLogin']) }}"><img src="{{ url('/') }}/public/images/websites/glogin.png" alt=""></a>
            </div>
        </div>
    </form>
@stop