<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Profile;

class ProfileController extends Controller
{
    private $repository;
    public function __construct(Profile $profile){

            $this->repository = $profile;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = $this->repository->latest()->paginate(10);
        return  view('profile',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('criar_profile');
    }
    public function search(Request $request)
    {
        $profiles = $this->repository->pesquisar($request->filter);

        return view('profiles',[
           'profiles' => $profiles,
        ]); 
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());
         return redirect()->route('profiles.index');
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if (! $profile=$this->repository->find($id))  {
        return redirect()->back();
      }
       return view('profiles_edit',compact('profile'));
    }
    public function detail($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        if (!$profile=$this->repository->find($id))  {
            return redirect()->back();
          }
           $profile->update($request->all());
           return  redirect()->back('profiles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
