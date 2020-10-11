<?php

namespace App\Http\Controllers\Admin;
use App\Models\Models\Plano;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    private $repository;
    public function __construct(Plano $plan){

        $this->repository = $plan;
    }
 public function index(){

    $planos =$this->repository->all();

    return view ('planos',[
        'planos'=>$planos,
    ]);
 }
}
