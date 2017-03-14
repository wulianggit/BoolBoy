@extends('layouts.admin')

@section('css')
    <link href="{{ asset('admin/css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="login">
        <div class="wrapper">
            <div class="login">
                <form action="{{ url('/login') }}" method="post" class="container offset1 loginform">
                    <div id="owl-login">
                        <div class="hand"></div>
                        <div class="hand hand-r"></div>
                        <div class="arms">
                            <div class="arm"></div>
                            <div class="arm arm-r"></div>
                        </div>
                    </div>
                    <div class="pad">
                        {{csrf_field()}}
                        <div class="control-group{{ $errors->has('username') ? ' has-error' : '' }}">

                            <div class="controls">
                                <div class="input-group">
                                    <div class="input-group-addon glyphicon glyphicon-user"></div>

                                    <input id="username" type="text" name="username" placeholder="用户名" tabindex="1" autofocus="autofocus" class="form-control input-medium{{ $errors->has('username') ? ' parsley-error' : '' }} " value="{{ old('username') }}">

                                </div>
                                @if ($errors->has('username'))
                                    <div class="col-md-12 error">
                                        <p class="text-danger"><strong>{{ $errors->first('username') }}</strong></p>
                                    </div>
                                @endif
                            </div>
                        </div>


                        <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="controls">
                                    <div class="input-group">
                                        <div class="input-group-addon glyphicon glyphicon-lock"></div>

                                        <input id="password" type="password" name="password" placeholder="密码" tabindex="2" class="form-control input-medium{{ $errors->has('password') ? ' parsley-error' : '' }}" value="{{ old('password') }}">
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="col-md-12 error">
                                            <p class="text-danger"><strong>{{ $errors->first('password') }}</strong></p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="control-group">
                            <div class="row">
                                <div class="controls col-xs-6 col-sm-8 col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"><span>记住我</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="controls col-xs-6 col-sm-4 col-md-4">
                                    <span class="forget-password"><a href="{{ url('/password/reset') }}">忘记密码</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="controls">
                                    <button type="submit" tabindex="4" class="btn btn-primary btn-block">登 录</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('admin/js/login.js') }}"></script>
    <script>
        Login.initLogin;
    </script>
@endsection
