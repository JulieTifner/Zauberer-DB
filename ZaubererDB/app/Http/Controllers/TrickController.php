<?php

namespace App\Http\Controllers;
use App\Models\Person;
use App\Models\Style;
use App\Models\Performance;
use App\Models\Trick;
use App\Models\Media;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TrickController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $times = Trick::select('time')->distinct()->get();
        $ratings = Trick::select('rating')->distinct()->get();
        $saved_at = Trick::select('created_at')->distinct()->get();
        
        $medias = Media::all();
        $tricks = Trick::all();
        $persons = Person::all();
        $styles = Style::all();
        $performances = Performance::all();

 

        return view('index')->with([
            'tricks' => $tricks,
            'persons' => $persons,
            'styles' => $styles,
            'performances' => $performances,
            'times' => $times,
            'ratings' => $ratings,
            'saved_at' => $saved_at,
            'medias' => $medias,
        ]);
    }

    public function create(){

        $styles = Style::all();
        $persons = Person::all();
        $performances = Performance::all();

        return view('create')->with([
            'styles' => $styles,
            'persons' => $persons,
            'performances' => $performances,
        ]);
    }

    public function store(Request $request, $id = null)
    {
        $style = Style::find($request->input('type'));
        $performance = Performance::find($request->input('performance_name'));
        $storage = Person::find($request->input('firstname_storage'));
        $act = Person::find($request->input('firstname_act'));
        

        $trick = new Trick([
            'trickname' => $request->input('trickname'),
            'description' => $request->input('description'),
            'style_id' => $style->id,
            'performance_id' => $performance->id,  
            'rating' => $request->input('rating'),     
            'storage_person_id' => $storage->id,
            'act_person_id' => $act->id,
            'time' => $request->input('time'),
          ]);
        $trick->save();

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $media = Media::find($id);

        $media = $media ? $media : new Media();
        
        $file = $request->file('image');
        $media->path = $file->store('Images');
        
        $media->save();
        $media->trick()->attach($trick);
        

           //$path = request('image')->store('Images', 'public');
           
          // $image = Image::make(public_path("storage/{$path}"))->fit(1000, 1000);
    
        //   Media::create([
        //       'path' => $path,
        //   ]); 

        
        return redirect('/home');
    }

}
