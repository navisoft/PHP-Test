@extends('layouts.master')
@section('content')
    @if(!isset($data['success']))
        <script type="text/javascript">
            $(document).ready(function() {
                var nowDateTime = new Date(),
                nowDate = nowDateTime.getDate();
                nowMonth = nowDateTime.getMonth();
                nowYear = nowDateTime.getFullYear();

                $('#datetimepicker1').datetimepicker({
                    format: 'DD/MM/YYYY',
                    minDate: new Date((nowYear - 150) + '-' + (nowMonth + 1) + '-' + nowDate),
                    maxDate: new Date((nowYear - 7) + '-' + (nowMonth + 1) + '-' + nowDate),
                    defaultDate: @if(isset($data['birthday'])) new Date('{{ $data['birthday'] }}') @else new Date((nowYear - 7) + '-' + (nowMonth + 1) + '-' + nowDate) @endif
                });
            });
        </script>
        <form class="form-horizontal" role="form" method="post">
            <h4>Provide your information to register</h4>
            @if(isset($message['summary']))
                <span>{{ $message['summary'] }}</span>
            @endif
            {!! csrf_field() !!}
            <div class="form-group @if(isset($message['username'])) has-error @endif">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="{{$data['username'] or ''}}" />
                    @if(isset($message['username'])) <span class="help-block">{{ $message['username'][0] }}</span> @endif
                </div>
            </div>
            <div class="form-group @if(isset($message['password'])) has-error @endif">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" />
                    @if(isset($message['password'])) <span class="help-block">{{ $message['password'][0] }}</span> @endif
                </div>
            </div>
            <div class="form-group @if(isset($message['email'])) has-error @endif">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$data['email'] or ''}}" />
                    @if(isset($message['email'])) <span class="help-block">{{ $message['email'][0] }}</span> @endif
                </div>
            </div>
            <div class="form-group @if(isset($message['firstname'])) has-error @endif">
                <label class="control-label col-sm-2" for="firstname">Firstname:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" value="{{$data['firstname'] or ''}}" />
                    @if(isset($message['firstname'])) <span class="help-block">{{ $message['firstname'][0] }}</span> @endif
                </div>
            </div>
            <div class="form-group @if(isset($message['lastname'])) has-error @endif">
                <label class="control-label col-sm-2" for="lastname">Lastname:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" value="{{ $data['lastname'] or '' }}" />
                    @if(isset($message['lastname'])) <span class="help-block">{{ $message['lastname'][0] }}</span> @endif
                </div>
            </div>
            <div class="form-group @if(isset($message['birthday'])) has-error @endif">
                <label class="control-label col-sm-2" for="birthday">Birthday:</label>
                <div class="col-sm-10">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" id="birthday" name="birthday" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    @if(isset($message['birthday'])) <span class="help-block">{{ $message['birthday'][0] }}</span> @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    @else
        <h3>{{ $data['success'] }}</h3>
    @endif
@stop