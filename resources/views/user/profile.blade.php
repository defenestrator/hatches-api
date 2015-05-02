@extends('layouts.master')

@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Profile</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!! Form::model($data = Input::all(), ['profile/update' => '']) !!}
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-0">
                                {!! Form::label('gender', 'Gender: ') !!}
                                {!! Form::label('gender', 'Unspecified ') !!}
                                {!! Form::radio('gender', 'unspecified', 'true') !!}
                                {!! Form::label('gender', 'Male ') !!}
                                {!! Form::radio('gender', 'male') !!}
                                {!! Form::label('gender', 'Female ') !!}
                                {!! Form::radio('gender', 'female') !!}
                                {!! Form::label('gender', 'Other ') !!}
                                {!! Form::radio('gender', 'other') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-0">
                                {!! Form::label('facebook', 'Facebook:')!!}
                                {!! Form::text('facebook')!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-0">
                                {!! Form::label('youtube', 'YouTube:')!!}
                                {!! Form::text('youtube')!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-0">
                                {!! Form::label('google', 'Google+:')!!}
                                {!! Form::text('google')!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-0">
                                {!! Form::label('twitter', 'Twitter:')!!}
                                {!! Form::text('twitter')!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-0">
                                {!! Form::label('instagram', 'Instagram:' )!!}
                                {!! Form::text('instagram')!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-0">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                    <div class="title-container">
                        <div class="content">

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection