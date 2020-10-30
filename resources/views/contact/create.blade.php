@extends('layouts.app')
@section('content')
<div class="container">
    @if ($errors->all())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
    @endif
    {!! Form::open(['action' => 'ContactController@store' , 'method'=>'POST']) !!}
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('NAME') !!}
            {!! Form::text('name',null,["class" => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('E-MAIL') !!}
            {!! Form::text('email',null,["class" => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('PHONE') !!}
            {!! Form::text('phone',null,["class" => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('GENDER') !!}
            {!! Form::select('gender',array('Male' => 'Male', 'Female' => 'Female'),["class" => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DATE OF BIRTH') !!}
            {!! Form::date('date_of_birth',null,["class" => 'form-control']) !!}
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
        <a href="/contact" class="btn btn-success">back</a>
    </div>
    {!! Form::close() !!}
</div>
@endsection
