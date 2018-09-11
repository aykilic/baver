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
use App\Models\sipfissatirObj;
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
        //
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
        // id 1 satış
                    $numarala=numaralaObj::all();

// asdsddddddddddsssssdsd
// sdsdsdsdsdsdsd

        $sipfisno = sipfisObj::where('fisturu', $id)->orderBy('numara', 'desc')
            ->first();

        //dd($sipfisno);
        //dd($sipfisno->numara);
         $sipfisnoadiid=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $id)->first();
         $sipfisnoadi=$sipfisnoadiid->fisturuad;

        // eğer sipariş fişi ilk defa oluşturuluyosa

        if($sipfisno==""){
            $sonnum=0;

        }else{
        // eğer sipariş fişi var ise



            $sonnum=$sipfisno->numara;

        }



      // dd($sipfisnoadi);
        $numarala=numaralaObj::where('evrakturuid', $id)->first();
        $hane=$numarala->uzunluk;
// dd($hane);
        //eğer numaralama aktif değilse
                    if($numarala->mod==0 || $numarala->mod==""){
                            if ($id==2){
// satış ise



                                $sonnumm=$sonnum + 1;
//dd($sonnum);
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



                    }
       // $sipfislist=sipfisObj::where('fisturu', 2)->get();

//        foreach ($sipfislist as $sipfislistt)
//
//           $test[]= array($sipfislistt->numara);
//            // print $test;
//
//        dd($test);


//dd($numara);
        

        return View::make('alsat.siparis')
            ->with('fistur', $fistur)
            ->with('firma', $firma)
            ->with('numara', $numara)
            ->with('fisturu',$id)
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
//        ->with('id', $id);



    }
    public function numara($a)
    {
        $sipfisno = sipfisObj::where('fisturu', $a)->orderBy('numara', 'desc')
            ->first();

        $numarala=numaralaObj::where('evrakturuid', $a)->get();
        $hane=$numarala->uzunluk;


        $sonnumm=$sipfisno->numara;
//dd($sonnum);
        $sonnummm=str_pad($sonnumm, $hane, "0", STR_PAD_LEFT);

        //$numara=$sonnummm;
       // dd($sonnummm);
        return ($sonnummm);


    }


    public function siparisfisleri(request $req,$a)
    {


        $sipfislist=DB::table('sipfis')
            ->select('firmalar.*','sipfis.*')
            ->join('firmalar','firmalar.fid','=','sipfis.fisfid')
            ->where('sipfis.fisturu', $a)
            //->orderBy('sipfis.sipfistar', 'desc')
            ->get();

        if($a == 2){
            //return Redirect::to('/alissiparisfisi/2');
            //return view('alsat.alissiparisfis');

            //return view('alsat.alissiparisfis',compact('a'));
            // return redirect()->route('/alissiparisfisi');
            //return view('alsat.alissiparisfis',compact('a'));
            //return View::make(‘alsat.alissiparisfis’)->nest( ‘foo/baz’, $a);
            //dd($sipfislist->fisturu);
            return view::make('alsat.alissiparisfis')
                ->with('fisturu',$a)
                ->with('sipfisnoadi',"Alış")
                ->with('sipfislistt',$sipfislist);
//            Route::get('/', function () {
//                return view('alsat.alissiparisfis', ['fisturu' => 'dgf']);
//            });

        }else{
            return view::make('alsat.alissiparisfis')
                ->with('fisturu',$a)
                ->with('sipfisnoadi',"Satış")
                ->with('sipfislistt',$sipfislist);

        }
       // return Redirect::to('alissiparisfisi');
    }
    public function sipfiskaydet(request $request)
    {
//$fisturu=0;
       // return View::make('alsat.siparis')->with('fisturu', $fisturu);

        $a=$request->fisturu;

       // $sipfislist=sipfisObj::where('fisturu', $a)->get();

        $sipfislist=DB::table('sipfis')
            ->select('firmalar.*','sipfis.*')
            ->join('firmalar','firmalar.fid','=','sipfis.fisfid')
            ->where('sipfis.fisturu', $a)->get();
//dd($sipfislist);

//        $cbankafirma = DB::table('bankalar')
//            ->select('cbanka.*', 'bankalar.*','doviz.*')
//            ->join( 'cbanka','cbanka.baid', '=', 'bankalar.baid')
//            ->join('doviz','doviz.did', '=', 'cbanka.did')
//            ->where('cbanka.fid', $fid )
//            ->get();

//        foreach ($sipfislist as $sipfislistt)
//        {
//           $test= $sipfislistt->numara;
//           // print $test;
//        }

//fonksiyon çağırma
//dd($this->numara($a));

//dd($sipfislist);
        $satirsay=$request->fissid;



        $sipfisObj= new sipfisObj;
        $sipfisObj->sipfistar=$request->tar;
        $sipfisObj->fisturu=$request->fisturu;
        $sipfisObj->numara=$request->sfisno;
        $sipfisObj->fisfid=$request->fisfid;
        $sipfisObj->depo=$request->depo;
        $sipfisObj->doviz=$request->did;
        $sipfisObj->durumid=$request->durumid;
        $sipfisObj->gtoplam=$request->gtoplam;
        //dd($request->gtoplam);
       $sipfisObj->save();



        for ($i = 0; $i < count($satirsay); $i++) {
            $sipfissatirObj = new sipfissatirObj;

            $sipfissatirObj->numara = $request->sfisno;
            $sipfissatirObj->fissid = $request->fissid[$i];
            $sipfissatirObj->miktar = $request->miktar[$i];
            $sipfissatirObj->birim = $request->birim[$i];
            $sipfissatirObj->bfiyat = $request->bfiyat[$i];
            $sipfissatirObj->kdv = $request->kdv[$i];
            $sipfissatirObj->tutar = $request->tutar[$i];
            $sipfissatirObj->save();
        }


        if($request->fisturu == 2){
            //return Redirect::to('/alissiparisfisi/2');
            //return view('alsat.alissiparisfis');

            //return view('alsat.alissiparisfis',compact('a'));
           // return redirect()->route('/alissiparisfisi');
           //return view('alsat.alissiparisfis',compact('a'));
            //return View::make(‘alsat.alissiparisfis’)->nest( ‘foo/baz’, $a);
            //dd($sipfislist->fisturu);
            return view::make('alsat.alissiparisfis')
                ->with('fisturu',$a)
                ->with('sipfisnoadi',"Alış")
                ->with('sipfislistt',$sipfislist);
//            Route::get('/', function () {
//                return view('alsat.alissiparisfis', ['fisturu' => 'dgf']);
//            });

        }else{
            return view::make('alsat.alissiparisfis')
                ->with('fisturu',$a)
                ->with('sipfisnoadi',"Satış")
                ->with('sipfislistt',$sipfislist);

        }

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
            $data->gorunum = $request->assayigorunum;
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
            $data->gorunum = $request->sssayigorunum;
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