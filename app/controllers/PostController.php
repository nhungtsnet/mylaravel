<?php
    class PostController extends BaseController{
        function index(){
            return View::make('posts.index');
        }
        function form(){
            return View::make('posts.form');
        }
        function register(){
//            $data = Input::all();
//            $rules = array(
//                'fullname' => 'required',
//                'email' => 'required\email\unique:users',
//                'password' => 'required\min:4'
//            );
//            $validator = Validator::make($data,$rules);
//            if($validator -> fails()){
//                return Redirect::to('posts.form')->withErrors($validator)->withInput();
//            }
//            return View::make('posts.register'); 
            DB::table('project1')->insert([
                'fullname'=>Input::get('fullname'),
                'email'=>Input::get('email'),
                'password'=> Input::get('password'),
                'sex'=>Input::get('sex'),
                'comment'=>Input::get('comment')
            ]);
            return View::make('posts.register');   
        }
        function user_list(){
            $posts = DB::table('project1')->get();
            return View::make('posts.user_list')->with('posts',$posts);
        }
        function edit($id){
            $posts = DB::table('project1')->where ('id',$id)->first();
            return View::make('posts.edit')->with('post',$posts);
        }
        function destroy($postid){
            DB::table('project1')->where('id', $postid)->delete();
            return Redirect::route('posts.index');
        }
        function search(){
            $search = Request::get('search');
            var_dump($search);
//            if($search){
//                $posts = DB::table('project1')->where('Fullname','LIKE','%$search%')->get();
//            }else{
//                $posts = DB::table('project1')->get();
//            }
//            return View::make('posts.search')->with('posts',$posts);

        }
        
    }
?>