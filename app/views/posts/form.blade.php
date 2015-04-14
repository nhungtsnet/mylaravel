@extends('posts.master')

@section('title')
    登録画面
@stop

@section('body')
        <h1>登録画面</h1>
        {{ Form::open(['url'=>'posts','method'=>'post'])}}
            {{ Form::label('name','名前')}}<br>
            {{ Form::text('fullname')}}<br><br>
            {{ Form::label('email','メールアドレス')}}<br>
            {{ Form::text('email')}}<br><br>
            {{ Form::label('pass','パスワード')}}<br>
            {{ Form::password('password')}}<br><br>
            {{ Form::label('name','性別')}}<br>
            {{ Form::radio('sex','1')}}男
            {{ Form::radio('sex','0',true)}}女<br><br>
            {{ Form::label('name','お問い合わせ')}}<br>
            {{ Form::textarea('fullname')}}<br><br>
            {{ Form::submit('登録')}}<br><br>
        {{ Form::close()}}
<!--        <form method="post" action="../posts">
            <label for="name">名前</label><br>
            <input type="text" name="fullname"><br><br>
            <label for="email">メールアドレス</label><br>
            <input type="text" name="email"><br><br>
            <label for="pass">パスワード</label><br>
            <input type="password" name="password"><br><br>
            <label for="sex">性別</label><br>
            <input type="radio" name="sex" value="male">男
            <input type="radio" name="sex" value="female" checked>女<br><br>
            <label for="cmt">お問い合わせ</label><br>
            <textarea name="comment" rows="3" cols="30"></textarea><br><br>
            <input type="submit" name="submit" value="登録"><br><br>
        </form>-->
        <a href="./index">TOPへ戻る</a>
@stop
