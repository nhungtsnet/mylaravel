@extends('posts.master')

@section('tilte')
    検索結果
@stop

@section('body')
        <table border="1">
            <tr>
                <td>名前</td>
                <td>メールアドレス</td>
                <td>修正</td>
                <td>削除</td>
            </tr>
<!--             @foreach($posts as $post)  
            <tr>
                {{var_dump($post) }}
                <td>{{ $post->Fullname}}</td>
                <td>{{ $post->Email}}</td>
                <td>{{ Form::open(['url'=>'../edit','method'=>'get'])}}
                        {{ Form::button('修正')}}
                    {{ Form::close()}}</td>
                <td>{{ Form::open(['url'=>'../destroy','method'=>'delete'])}}
                        {{ Form::button('修正')}}
                    {{ Form::close()}}</td>
             @endforeach-->
        </table>
    
        <br><br>
        <a href="./index">TOPへ戻る</a>
@stop