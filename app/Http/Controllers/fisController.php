<?php
/**
 * Created by PhpStorm.
 * User: halil
 * Date: 23.04.2018
 * Time: 13:08
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
use App\Models\sablon_turuObj;

class fisController extends Controller{
//    public function numarala()
//    {
//
//
//
//    }

	public function siparisfisi(request $req, $id)
	{
		$firma = DB::table('firmalar')->get();
		$stok = DB::table('stok')->get();
		$firmam = DB::table('firmalar')->select('cunvan')->get();
		//$stokm = DB::table('stoklar')->select('sad')->get();
		//$firmaz=$firmam->toArray();
$firmay=json_encode($firmam);
		//$stoky=json_encode($stokm);
		//$firmaz=$firmam;
		//$firmaz= firmaObj::pluck('cunvan');
		//$firmaz=$firmam->toJson();
//dd($stok);


        $dropvergi = vergiObj::all();
        $selectedvergi = vergiObj::first()->vid;
        $fistur = fisturuObj::pluck('fisturuad','fisturuid');
        $dropvergim = vergiObj::pluck('vor','vid');
		$dropbirim = birimObj::pluck('bad','bid');
		$dropdoviz = dovizObj::pluck('dad','did');
        $dropdepo = depoObj::pluck('depoad','depoid');
//       $sipfistur = sipfisiObj::all();
        $olayy = olayObj::pluck('olayad','olayid');
        //$fid = DB::table('firmalar')->where('cunvan', $request->cunvan)->value('fid');
//$uzunluk=DB::table('numarala')->where('evrakturuid', $id)->value('uzunluk');
//$index=1;
//$hane=6;
//        $new_index = str_pad($index, $uzunluk, "0", STR_PAD_LEFT);

//dd($new_index);
        $b="001345";

        $number = (int)$b;
     //   dd($number);
//        $number = sprintf('%08d',$number);
//        dd($number);
      //  dd($number);


        //******fis numaralama ******///////////////////
        // id 1 satışsss
                    $numarala=numaralaObj::all();



        $sipfisno = sipfisObj::where('fisturu', $id)->first();
        $sipfisnoadiid=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $id)->first();
        $sipfisnoadi=$sipfisnoadiid->fisturuad;

        // eğer sipariş fişi ilk defa oluşturuluyosa

        if($sipfisno==""){
            $sonnum=0;

        }else{
        // eğer sipariş fişi var ise



            $sonnum=$sipfisno->numara;

        }



      //  dd($sonnum);
        $numarala=numaralaObj::where('evrakturuid', $id)->first();
        $hane=$numarala->uzunluk;

        //eğer numaralama aktif değilse
                    if($numarala->mod==0 || $numarala->mod==""){
                            if ($id=2){
// satış ise



                                $sonnumm=$sonnum + 1;

                                $sonnummm=str_pad($sonnumm, $hane, "0", STR_PAD_LEFT);

                                $numara=$sonnummm;
                            }else{
//
 // alış ise
                                $sonnumm=$sonnum + 1;

                                $sonnummm=str_pad($sonnumm, $hane, "0", STR_PAD_LEFT);

                                $numara=$sonnummm;

                            }


                    }
                    else{
                        // numarayı yeniden duzenle
                        $sonnumara=($numarala->sayi)+1;
                        $new_index = str_pad($sonnumara, $hane, "0", STR_PAD_LEFT);
//bitti
                        $numara=$new_index;
//dd("burdayım");


                    }



//dd($numara);
        if($id=1){

                     $ss=0;


        }


        return View::make('alsat.siparis')
		           ->with('fistur', $fistur)
		           ->with('firma', $firma)
            ->with('numara', $numara)

            ->with('firmay', $firmay)
            ->with('depo', $dropdepo)
            ->with('vergi', $dropvergi)
            ->with('vergim', $dropvergim)
            ->with('olay', $olayy)
            ->with('svergi', $selectedvergi)
			->with('stok', $stok)
			->with('doviz', $dropdoviz)
		->with('birim', $dropbirim)
        ->with('sipfisnoadi', $sipfisnoadi);



    }

    public function sipfiskaydet(request $req, $id)
    {
$fisturu=0;
        return View::make('alsat.siparis')->with('fisturu', $fisturu);

    }









	public function autocompletee(Request $request)
	{
		$data = firmaObj::select ("cunvan as name","fid")->where("cunvan","LIKE","%{$request->input('query')}%")
		                                          ->get();
		return response()->json($data);
	}
	public function autocompletefirma(Request $request)
	{
		//$data = firmaObj::pluck('cunvan','fid');
		$data = DB::table('firmalar')->get();
	//	dd($data);
		return response()->json($data);
	}
	public function autocompletestok(Request $request)
	{
		//$data = firmaObj::pluck('cunvan','fid');
		$datam = DB::table('stok')->get();
		//	dd($data);
		return response()->json($datam);
	}
	public function find($query)
	{
		$al=$query;
		$res = firmaObj::select("cunvan","fid")->where("cunvan","LIKE","%{$al}%")
		                ->get();
		//$res   = firmaObj::where('cunvan', 'LIKE', "%$query%")->get();
		return response()->json($res);

	}






//************************numarala başlangıç
    public function askaydet(request $request)
    {

        if ($request->ajax()) {


           $data = numaralaObj::find($request->evrakturuid);

            $mod=0;
            $data->sayi = $request->sayi;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
    public function ssipnokaydet(request $request)
    {

        if ($request->ajax()) {


            $data = numaralaObj::find($request->evrakturuid);

            $mod=0;
            $data->sayi = $request->sayi;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
    public function ainokaydet(request $request)
    {

        if ($request->ajax()) {


            $data = numaralaObj::find($request->evrakturuid);

            $mod=0;
            $data->sayi = $request->sayi;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
    public function sinokaydet(request $request)
    {

        if ($request->ajax()) {


            $data = numaralaObj::find($request->evrakturuid);

            $mod=0;
            $data->sayi = $request->sayi;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
    public function afnokaydet(request $request)
    {

        if ($request->ajax()) {


            $data = numaralaObj::find($request->evrakturuid);

            $mod=0;
            $data->sayi = $request->sayi;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
    public function sfnokaydet(request $request)
    {

        if ($request->ajax()) {


            $data = numaralaObj::find($request->evrakturuid);

            $mod=0;
            $data->sayi = $request->sayi;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
//************************numarala bitiş
}