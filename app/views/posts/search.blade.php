@extends('posts.master')

@section('title')
    検索結果
@stop

@section('body')
<!--{{ var_dump($results)}}-->
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
                 @foreach($results as $result)  
            <tr>
                <td>{{ $result->Fullname}}</td>
                <td>{{ $result->Email}}</td>
                <td><a href="http://localhost/mylaravel/posts/edit/{{ $result->ID}}"><input type="submit" value="修正"></a></td>
                <td><a href="http://localhost/mylaravel/posts/delete/{{ $result->ID}}" onclick="if(!confirm('削除して宜しいでしょうか')){return false;};"><input type="submit" value="削除"></a></td>
             @endforeach
        </table>
    
        <br><br>
        <a href="./index">TOPへ戻る</a>
@stop