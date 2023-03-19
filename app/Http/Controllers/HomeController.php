<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class  HomeController extends Controller {

    public function  index()
    {
//           $data = Country::all();
//           $data = Country::limit(5)->get();
//           $data = Country::where('Code','<','ALB') -> select('Code', 'Name') -> offset(1)->
//           limit(2)-> get();
//           $data = City::find(5);//получил пятерку
//            $data = Country::find('AGO');
//           dd($data);
//            $post = new Post();
//            $post->title = 'Post 4';
//            $post->content = 'Lorem ip';
//            $post->save();
//        Post::create(['title'=>'Post 5','content'=>'Lorem']);
//            $post = new Post();
//            $post = Post::find(2);
//            dump($post->title,$post->rubric);
//        $posts = Rubric::find(1)->post()->select('title')->where('id','>','0')->get();
//        dump($posts);


//            $post ->fill(['title'=>'Porubric->title,$rubric->post)st 555','content'=>'Lorem1']);
//            $post->save();
//          $post = new Post();
//          $post->title = 'Статья 2';
//          $post->content ='Lorem2';
//          $post->save();
////        $data = DB::table('country')->take(5)->get()
//        $data = DB::table('country')->select('Code','Name')->orderBy('Code','desc')
//        ->first();
//        $data = DB::table('city')->select('ID','Name')->where([['ID','=',3]])->orWhere([['ID','=',2]])->get();
//          $data = DB::table('country')->limit(10)->pluck('Name','CODE');
//          $data = DB::table('city')->select('CountryCode')->distinct()->get();
//        $data = DB::table('city')->select('city.ID','city.Name as city_name','country.Code','country.Name as country_name')
//            ->limit(10)->join('country','city.CountryCode', '=','country.Code')
//            ->orderBy('city.ID')->get();
//        dd($data);

//        try {
//            DB::beginTransaction();
////        $query = DB::insert("INSERT INTO posts(title,content) VALUES(?,?)",
////        ['Статья 4','Lorem ipsum']);
////        DB::update("UPDATE posts SET created_at = ?, updated_at= ? WHERE id=1",[now(),now()]);
////        DB::delete("DELETE FROM posts WHERE id = ?",[4]);
//       DB::commit();
//        } catch (\Exception $e)
//        {
//            DB::rollBack();
//            echo $e->getMessage();
//        }
//        $posts = DB::select("SELECT * FROM posts WHERE id>:id",['id'=>-1]);
//        return $posts;
//
////        dump($_ENV['DB_DATABASE']);
////        dump(env('MY_SETTING'));
////
////        dump(config('app.timezone'));
////        dump($_ENV);
//        $posts = Post::with('rubric')->where('id', '>', '0')->get(); //where ... in()
//        foreach ($posts as $post)
//        {
//            dump($post->title, $post->rubric->title);
//        }
//        $post = Post::find(1); //join
//        dump($post->title);
//        foreach ($post->tags as $tag)
//        {
//            dump($tag->title);
//        }
//        $tag = Tag::find(1);
//        dump($tag->title);
//        foreach ($tag->posts as $post)
//        {
//            dump($post->title);
//        }
        $posts = Post::orderBy('id','desc')->get();
        $title = 'Home Page';
        return view('home', compact('title','posts'));
//        $h1 = '<h1>home page</h1>';
//        $data1 = range(0,20);
//        $data2 = [
//            'title'=> 'Title',
//            'content' => 'Content',
//            'keys' => 'Keywords',
//        ];
//        return view('home', compact('title','h1','data1','data2'));
//        return view('home', ['res'=>5,'name'=>'John']);
    }
    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title','id')->all();
        return view('create',compact('title','rubrics'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:5|max:100',
            'content'=>'required',
            'rubric_id'=>'required',
        ]);
//        dd($request->input('title'));
 //       dd($request->all());
        Post::create($request->all());
        return redirect()->route('home');
    }
}
