<?php

namespace App\Http\Controllers\Admin;
use App\Models\Models\Modalidade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    //
    private $repository;
    public function __construct(Modalidade $modadelidade){

            $this->repository = $modadelidade;
        }
    public function index(){

        $modalidade =$this->repository->paginate();

        return view ('modalidade',[
            'modalidades'=>$modalidade,
        ]);
    }
    public function criar(){

        return view('modalidade');
    }
}
