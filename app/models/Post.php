<?php
    class Post extends Eloquent{
        protected $table = 'project1';
        $post = Post::find(1);
        var_dump($user->Name);
//        
//        protected  $fillable = ['Fullname','Email'];
//        public $timestamps = false;
    }
?>