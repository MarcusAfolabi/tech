<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ViewErrorBag;

class SupportController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index()
    {
        $supports = Support::all();
        return view('supports.index', compact('supports'));
    }


    public function create()
    {
        header('Cache-Control: public, max-age=604800');
        return view('supports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:supports|string|max:255',
            'description' => 'required|max:3000',
            'category' => 'required|string|max:255',
            'tag' => 'required|string|max:255',
            'image' => 'required|file|mimes:png,jpg,jpeg,svg|dimensions:min_width=390,min_height=260,max_width=1290,max_height=700',
        ]);

        $image = $request->file('image');
        $imagePath = $image->store('support-images');

        $image390x260 = Image::make($image->getRealPath())->fit(390, 260);
        $image390x260Path = "support-images/" . pathinfo($imagePath, PATHINFO_FILENAME) . '-390x260.' . $image->getClientOriginalExtension();
        Storage::put($image390x260Path, $image390x260->stream());

        $image1290x700 = Image::make($image->getRealPath())->fit(1290, 700);
        $image1290x700Path = "support-images/" . pathinfo($imagePath, PATHINFO_FILENAME) . '-1290x700.' . $image->getClientOriginalExtension();
        Storage::put($image1290x700Path, $image1290x700->stream());

        $support = Support::create([
            'title' => $request['title'],
            'slug' => $request['slug'],
            'description' => $request['description'],
            'category' => $request['category'],
            'view' => 0,
            'tag' => $request['tag'],
            'image' => $imagePath,
        ]);
        // $support = new Support();
        // $support->title = $request->input('title');
        // $support->slug = Str::slug($request->input('name'), '-');
        // $support->description = $request->input('description');
        // $support->category = $request->input('category');
        // $support->tag = $request->input('tag');
        // $support->image = 'storage/' . $request->file('image')->store('postImages', 'public');
        // $support->save();

        return redirect()->back()->with('status', 'Support created successfully');
    }



    public function show(Support $support)
    {
        //
    }


    public function edit(Support $support)
    {
        //
    }


    public function update(Request $request, Support $support)
    {
        //
    }


    public function destroy(Support $support)
    {
        //
    }
}
