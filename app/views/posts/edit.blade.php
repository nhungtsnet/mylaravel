@extends('posts.master')

@section('title')
    修正画面
@stop

@section('body')
        <h1>ユーザー修正画面</h1><br>
<!--            {{ Form::open(['url'=>['posts.edited',$post->id],'method'=>'PUT'])}}-->
            
            @foreach($posts as $post)
<!--            {{var_dump($post)}}-->
            {{ Form::label('fullname','名前')}}<br>
            {{ Form::text('fullname', $post->Fullname)}}<br><br>
            
            {{ Form::label('email','メールアドレス')}}<br>
            {{ Form::text('email', $post->Email)}}<br>
            @endforeach
            {{ Form::submit('修正')}}

            {{ Form::close()}}
@stop
