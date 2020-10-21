<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\AptidaoFisica;

class AptidaoFisicaController extends Controller
{
    private $repository;
    public function __construct(AptidaoFisica $aptidao)
    {
        $this->repository = $aptidao;
    }
    public function index(){

        $aptidaoFisica =$this->repository->latest()->paginate(10);

        return view ('aptidaoFisica/index',[
            'index'=>$aptidaoFisica,
        ]);
    }
}
