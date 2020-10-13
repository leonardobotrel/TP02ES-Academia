<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    //
    public function index(){

        $modalidades =$this->repository->paginate();

        return view ('modalidades',[
            'modalidades'=>$modalidades,
        ]);
    }
    public function criar(){

        return view('modalidades');
    }
}
