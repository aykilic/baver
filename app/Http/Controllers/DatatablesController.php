<?php

namespace App\Http\Controllers;
use App\Models\editFirmaObj;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\firmaObj;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

/**
 * Class DatatablesController
 * @package App\Http\Controllers
 */

class DatatablesController extends Controller
{


    public function getCarilist()
    {
       // $firma = firmaObj::select([ 'cunvan', 'cadres1', ]);

//return Datatables::of($firma)
//            ->addColumn('action', function ($firma) {
//                return '<a href="/Cari/fid='.$firma->fid.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
//
//                 <a href="/Cari/fid='.$firma->fid.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i> delete</a>
//
//
//                <a href="/Cari/fid='.$firma->fid.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-list-alt"></i> view</a>';
//            })
//            ->editColumn('fid', 'ID: {{$fid}}')
//            ->removeColumn('fid')
         // ->make(true);
              //  return Datatables::of($firma)->make();
         $firma = DB::table('firmalar')->get();

        return view('Girisler.Cari',compact('firma'));


    }


//   public function getCariedit(Request $request, $fid)
//   {
//       $firma = firmaObj::find($fid);
//   }

}
