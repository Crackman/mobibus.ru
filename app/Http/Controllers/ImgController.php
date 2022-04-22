<?php

namespace App\Http\Controllers;

use App\Models\Img;
use Illuminate\Http\Request;

class ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $images = Img::all();

        return view('img.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('img.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $image = Img::create([
            'name' => $request->name
        ]);

        if ($image) {
            if ($request->hasFile('image')) {
                $image->addMediaFromRequest('image')->toMediaCollection('images');
            }
        }

        session()->flash('success', 'Image create successfully');

        return redirect()->route('img.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $image = Img::find($id);

        return view('img.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $image = Img::find($id);
        $image->name = $request->name;
        $image->save();

        if ($image) {
            if ($request->hasFile('image')) {
                $image->clearMediaCollection('images');
                $image->addMediaFromRequest('image')->toMediaCollection('images');
            }
        }

        session()->flash('success', 'Image Update successfully');

        return redirect()->route('img.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $image = Img::find($id);
        $image->delete();

        session()->flash('success', 'Image Delete successfully');

        return redirect()->route('img.index');
    }
}
