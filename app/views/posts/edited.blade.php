@extends('posts.master')

@section('title')
    変更画面
@stop

@section('body')
    <table border="1">
            <tr>
                <td>名前</td>
                <td>メールアドレス</td>
                <td>修正</td>
                <td>削除</td>
            </tr>
             @foreach($results as $result)  
            <tr>
<!--                {{var_dump($result) }}-->
                <td>{{ $result->Fullname}}</td>
                <td>{{ $result->Email}}</td>
                <td><a href="./../edit/{{ $result->ID}}"><input type="submit" value="修正"></a></td>
                <td><a href="./../delete/{{ $result->ID}}"><input type="submit" value="削除"></a></td>
                
             @endforeach
    </table>
    
        <br><br>
        <a href="./../index">TOPへ戻る</a>
@stop