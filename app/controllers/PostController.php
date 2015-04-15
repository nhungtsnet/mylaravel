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
            $user = User::find($id);
            return View::make('posts.edit')->with('user',$user);
//            $posts = DB::table('project1')->where ('id',$id)->first();
//            return View::make('posts.edit')->with('post',$posts);
        }
        function update($id){
            DB::table('project1')->where('id',$id)->update(['fullname'=>Input::get('fullname'),'email'=>Input::get('email')]);
            $posts = DB::table('project1')->get();
            return View::make('posts.user_list')->with('posts',$posts);
//            return Redirect::route('posts.edited',[$id]);
        }
        function delete($id){
//            $user = User::find($id);
//            $user->delete();
            DB::table('project1')->where('id', $id)->delete();
            $posts = DB::table('project1')->get();
            return View::make('posts.user_list')->with('posts',$posts);
//            return Redirect::route('posts.user_list');
        }
        function search(){
            $search = Input::get('search');
//            $results = DB::table('project1')->where('fullname','LIKE','%'.$search.'%')->orWhere('email', 'LIKE','%'.$search.'%')->get();
            var_dump($search);
//            if($search){
//                $posts = DB::table('project1')->where('fullname','LIKE','%$search%')->get();
//            }else{
//                $posts = DB::table('project1')->all();
//            }
            return View::make('posts.search')->with('search',$search);

        }
        
    }
?>