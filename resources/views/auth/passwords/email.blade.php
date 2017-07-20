@extends('layout')

@section('title', 'Reset Password')

@section('page-title')
    @include('partials._page-title', ['title' => __('authentication.ResetPassword')])
@endsection
            
@section('content')

<div class="container">
    <div class="row mb80">
        <div class="col-sm-4 offset-sm-4">
            <h3 class="page-title-small">@lang('authentication.ResetPassword')</h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {!! Form::open([ 'route' => 'password.email', 'class' => 'mb80' ]) !!}
                <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                    {{ Form::label('email', __('authentication.Email'), ['class' => 'control-label col-form-label'] ) }}
                    {{ Form::email('email', null, ['class' => 'form-control form-control-danger']) }}
                    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">@lang('authentication.SendPasswordResetLink')</button>
                </div>
                <!-- /.form-group -->
            {!! Form::close() !!}
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection


