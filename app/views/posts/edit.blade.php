@extends('posts.master')

@section('title')
    修正画面
@stop

@section('body')
        <h1>ユーザー修正画面</h1><br>
        {{ Form::open(['url'=>['posts/user_list',$user->ID],'method'=>'post'])}}
<!--            {{var_dump($user)}}-->
                {{ Form::label('fullname','名前')}}<br>
                {{ Form::text('fullname', $user->Fullname)}}<br><br>

                {{ Form::label('email','メールアドレス')}}<br>
                {{ Form::text('email', $user->Email)}}<br><br>
                {{ Form::submit('更新')}}
        {{ Form::close()}}
@stop
