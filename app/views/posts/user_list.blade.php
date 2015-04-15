@extends('posts.master')

@section('title')
    ユーザーリスト
@stop

@section('body')

 {{ Form::open(['url'=>'posts/search','method'=>'post'])}}
        {{ Form::text('search')}}
        {{ Form::submit('検索')}}
{{ Form::close()}}
        <br><br>
        <table border="1">
            <tr>
                <td>名前</td>
                <td>メールアドレス</td>
                <td>修正</td>
                <td>削除</td>
            </tr>
             @foreach($posts as $post)  
            <tr>
<!--                {{var_dump($post) }}-->
                <td>{{ $post->Fullname}}</td>
                <td>{{ $post->Email}}</td>
                <td><a href="http://localhost/mylaravel/posts/edit/{{ $post->ID}}"><input type="submit" value="修正"></a></td>
                <td><a href="http://localhost/mylaravel/posts/delete/{{$post->ID}}" onclick="if(!confirm('削除して宜しいでしょうか?')){return false;};" title="Delete this Item"><input type="submit" value="削除"></a></td>
             @endforeach
        </table>
    
        <br><br>
        <a href="http://localhost/mylaravel/posts/index">TOPへ戻る</a>
@stop