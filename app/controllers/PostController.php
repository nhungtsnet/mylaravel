<?php
    class PostController extends BaseController{
        function index(){
            return View::make('posts.index');
        }
        function form(){
            return View::make('posts.form');
        }
        function register(){
//            $messages = array('fullname.required'=>'名前を入力して下さい！','email.required'=>'メールを入力して下さい！','password.required'=>'パスワードを入力して下さい！');
//            $rules = array('fullname' => 'required','email' => 'required|email|unique:users','password' => 'required|min:4');
//            $validator = Validator::make(Input::all(),$rules,$messages);
//            if($validator -> fails()){
//                return Redirect::to('posts.form')->with('message','登録できません！');
//            }
         
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
            $results = User::where('fullname','LIKE',"%$search%")->orWhere('email', 'LIKE',"%$search%")->get();
            return View::make('posts.search')->with('results',$results);

        }
        
    }
?>