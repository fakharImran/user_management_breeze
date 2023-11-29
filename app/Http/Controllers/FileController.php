<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = File::latest()->paginate(5);
        return view('files.index', compact('files'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('files.form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // dd($request->all());
            request()->validate([
                'name' => 'required',
                'dob' => 'required',
                'age' => 'required',
                'passport_photo' => 'required',
                'recommended_source' => 'required',
                'recommended_source_address' => 'required',
            ]);
    
            $request->merge(['user_id' => Auth::user()->id]);

            // dd($request->all());
            if($request->hasFile('passport_photo'))
            {
                $url = $request->file('passport_photo')->store('passport_photo', 'public');
            }
            else
            {
                $url=null;
            }
    
            $request->passport_photo=$url;
    
            $files = File::create($request->all());
            $files->passport_photo=$url;
            $files->save();
            return redirect()->route('files.index')
                ->with('success', 'File created successfully.');
            //

    }
        //

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $file = File::find($id);
        return view('files.show', compact('file'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $file = File::find($id);
       

        return view('files.form', compact('file'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // dd($request->all());
         request()->validate([
            'name' => 'required',
           'dob' => 'required',
            'age' => 'required',
            'passport_photo' => 'required',
           'recommended_source' => 'required',
           'recommended_source_address' => 'required',
       ]);

       $request->merge(['user_id' => Auth::user()->id]);

       if($request->hasFile('passport_photo'))
       {
           $url = $request->file('passport_photo')->store('passport_photo', 'public');
       }
       else
       {
           $url=null;
       }

       $request->passport_photo=$url;



       // Create the UserDetail model with the updated request data
       $file = File::find($id);
       
       if (!$file) {
           return response()->json(['message' => 'file not found'], 404);
       }
       
       $file->update($request->all());
       $file->passport_photo= $url;
       $file->save();
       return redirect()->route('files.index')
           ->with('success', 'File Updated successfully.');
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        //
    }
}
