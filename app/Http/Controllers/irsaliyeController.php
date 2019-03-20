<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 20.03.2019
 * Time: 15:35
 */

namespace App\Http\Controllers;
use App\Models\bankaObj;
use App\Models\sablonadObj;
use App\Models\User;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\firmaObj;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\numaralaObj;
use App\Models\dovizObj;
use App\Models\olayObj;
use App\Models\birimObj;
use App\Models\stokObj;
use App\Models\depoObj;
use App\Models\fisturuObj;
use App\Models\stokturObj;
use App\Models\vergiObj;
use App\Models\sipfisObj;
use App\Models\sipfissatirObj;
use App\Models\sablon_turuObj;

class irsaliyeController
{
    public function irsaliyefisleri(request $req, $id){

        $sipfisnoadiid=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $id)->first();
        $sipfisnoadi=$sipfisnoadiid->fisturuad;





        return View::make('alsat.irsaliye')

            ->with('fisturu',$id)
            ->with('sipfisnoadi', $sipfisnoadi);


    }
    public function irsaliyefislist(Request $request)
    {
        $data = DB::table('sipfis')->where('sipfis.fisturu',$request->fisturu)
            ->select('sipfis.*','firmalar.*','olay.*','doviz.*')
//            ->where('sipfis.olayid','<>', 1)
//            ->whereRaw("users.id BETWEEN 1003 AND 1004")
//                aynı ifade
            ->whereIn('sipfis.olayid', [2,3,4,5])
            ->leftjoin('firmalar', 'firmalar.fid', '=', 'sipfis.fisfid')

            ->leftjoin('olay', 'olay.olayid', '=', 'sipfis.olayid')
            ->leftjoin('doviz', 'doviz.did', '=', 'sipfis.doviz')
//            ->leftjoin('sipdurum', 'siparis.durumid', '=', 'sipdurum.sipdurumid')
//            ->leftjoin('musteriler', 'siparis.mid', '=', 'musteriler.mid')
//            ->orderByRaw('YEAR(tarih) ASC, MONTH(tarih) ASC, DAY(tarih) ASC')
            ->get();


        $json_data = array(
////            "draw"            => intval(""),
////            "recordsTotal"    => intval(""),
////            "recordsFiltered" => intval(""),
            "data"            => $data
        );
        return  response()->json($json_data);
    }
}