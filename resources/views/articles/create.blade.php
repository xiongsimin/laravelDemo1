@extends('layout')
@section('content')
<h1>撰写新文章</h1>
    {!! Form::open(['url'=>'articles'])!!}
    <div class="form-group">
        {!!Form::label('标题')!!}
        {!!Form::text('title',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('内容')!!}
        {!!Form::textarea('content',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control'])!!}
    </div>
    {!!Form::submit('发表文章',['class'=>'btn btn-primary form-control'])!!}
    {!!Form::close()!!}
@stop