<?php

namespace App\Http\Controllers;
Use App\Models\Service;
Use App\Models\Category;
Use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
class HomeController extends Controller
{
    //automatic index execute
    public function index(){
      $services = Service::latest()->paginate(8);
      return view('home')->with(['services' => $services]);
    }

    public function show($slug){
        $service = Service::where('slug',$slug)->first();
        return view('show')->with(['services' => $service]);
    }

    public function create(){
        $categories = Category::all();
        return view('create', compact('categories'));
    }
    public function store(Request $request){
            // dd($request->all());

            $this->validate($request, [
                'titre' => 'required|string|min:3|max:255',
                'fname' => 'required|string|min:3|max:100',
                'lname' => 'required|string|min:3|max:100',
                'user_email' => 'required|email|max:255',
                'user_phone' => 'required|string|max:20',
                'body' => 'required|string|min:10|max:1000',
                'prix' => 'required|numeric',
                'cat_id' => [
                    'required',
                    Rule::in(Category::pluck('id')->toArray()),
                ],
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg', // Validate that image is an image file
                'image_user' => 'image|mimes:jpeg,png,jpg,gif,svg', // Validate that image is an image file
            ]);
            $categories = Category::all();

            // $service =new Service();
            if($request->has('image')){
                $file=$request->image;
                $image_name=time().'_' .$file->getClientOriginalName();
                $file->move(public_path('uploads'),$image_name);
            }
            //image user :
            if($request->has('image_user')){
                $file=$request->image_user;
                $image_name_user=time().'_' .$file->getClientOriginalName();
                $file->move(public_path('uploads'),$image_name_user);
            }
            $service = Service::create([
                'titre' => $request->titre,
                'slug' => Str::slug($request->titre),
                'fname' => $request->fname,
                'lname' => $request->lname,
                'user_email' => $request->user_email,
                'user_phone' => $request->user_phone,
                'body' => $request->body,
                'prix' => $request->prix,
                'cat_id' => $request->cat_id,
                'image' => $image_name,
                'image_user' => $image_name_user,
            ]);
            // $service->titre=$request->titre;
            // $service->slug= Str::slug($request->titre);
            // $service->fname=$request->fname;
            // $service->lname=$request->lname;
            // $service->user_email=$request->user_email;
            // $service->user_phone=$request->user_phone;
            // $service->body=$request->body;
            // $service->prix=$request->prix;
            // $service->cat_id =$request->cat_id ;
            // $service->image ="https://via.placeholder.com/640x480.png/00aa33?text=new service";
            echo 'article ajouter';
             return view('create', compact('categories'));

    }
   
}
