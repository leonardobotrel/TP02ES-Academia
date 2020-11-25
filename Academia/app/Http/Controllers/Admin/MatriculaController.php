<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Matricula;
use App\Models\Models\Plano;
use App\Models\Models\Turma;
use App\Models\User;
use App\Models\Models\AptidaoFisica;
class MatriculaController extends Controller
{
    private $repository;
    public function __construct(Matricula $matricula){

            $this->repository = $matricula;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $AptidaoFisica = AptidaoFisica::all();
        $matricula = $this->repository->latest()->paginate(10);
        return  view('matricula',compact('matricula','users','AptidaoFisica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plan = Plano::all();
        $user = User::all();
        $turmas = Turma::all();
        return view ('criar_matricula', compact('plan','user','turmas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $matricula = $this->repository->pesquisar($request->filter);

        return view('matricula',compact('matricula'));
    }
    public function store(Request $request)
    {
        $this->repository->create($request->all());
        return redirect()->route('matriculas.index');
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
        if (! $matricula=$this->repository->find($id))  {
            return redirect()->back();
          }
           return view('matricula_edit',compact('matricula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id){
        $matricula = $this->repository->where('id', $id)->first();
      if(!$matricula)
      return redirect()->back();
        return view('matricula_detail',[
            'matricula'=>$matricula        ]);
    }
    public function update(Request $request, $id)
    {
        if (!$matricula=$this->repository->find($id))  {
            return redirect()->back();
          }
           $matricula->update($request->all());
           return  redirect()->back('matriculas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
    $matricula = $this->repository->where('id', $id)->first();
    if(!$matricula)
       return redirect()->back();
    $matricula->delete();
    return redirect()->route('matriculas.index');
  }
}
