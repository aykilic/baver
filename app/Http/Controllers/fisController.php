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

        $sipfisno = sipfisObj::where('fisturu', $id)->orderBy('sipfisid', 'desc')
            ->first();

        //dd($sipfisno);
        //dd($sipfisno->numara);
         $sipfisnoadiid=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $id)->first();
         $sipfisnoadi=$sipfisnoadiid->fisturuad;

        // eğer sipariş fişi ilk defa oluşturuluyosa

//        if($sipfisno==""){
//            $sonnum=0;
//
//        }else{
//        // eğer sipariş fişi var ise
//
//
//
//            $sonnum=$sipfisno->sonnumara;
//
//        }



      // dd($sipfisnoadi);
        $numarala=numaralaObj::where('evrakturuid', $id)->first();
        $hane=$numarala->uzunluk;
// dd($hane);
        //eğer numaralama aktif değilse
//                    if($numarala->mod==0 || $numarala->mod==""){
                            if ($id==2){
// satış ise



                                $sonnumm=$numarala->sonnumara + 1;
//dd($sonnum);
                                $sonnummm=str_pad($sonnumm, $hane, "0", STR_PAD_LEFT);

                                $numara=$sonnummm;
                            }
                            elseif ($id==1){
//
 // alış ise
                                $sonnumm=$numarala->sonnumara + 1;

                                $sonnummm=str_pad($sonnumm, $hane, "0", STR_PAD_LEFT);

                                $numara=$sonnummm;

                            }


//                    }
//                    else {
//                        // numarayı yeniden duzenle
//                        $sonnumara=($numarala->sayi)+1;
//                        $new_index = str_pad($sonnumara, $hane, "0", STR_PAD_LEFT);
////bitti
//                        $numara=$new_index;
//
//
//
//                    }
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
    public function sipfisedit(request $request, $id, $fisturum)
    {

        $sipfis=DB::table('sipfis')->where('sipfisid', $id)
            ->leftjoin('firmalar','firmalar.fid','=','sipfis.fisfid')
            ->first();
        $sipfissat=DB::table('sipfissatir')->where('sipfisid', $id)
            ->leftjoin('stok','stok.sid','=','sipfissatir.fissid')
            ->get();

//dd($sipfissat);

        $fisturu=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $sipfis->fisturu)->first();
        $sipfisnoadi=$fisturu->fisturuad;

//        $olay=DB::table('olay')->get();

        $olay= olayObj::pluck('olayad','olayid');
        $depo=DB::table('depo')->get();
        $doviz=DB::table('doviz')->get();
        $dropvergi = vergiObj::all();

        $dropbirim = birimObj::pluck('bad','bid');
        $dropvergim = vergiObj::pluck('vor','vid');

//        $sipfisObj= new sipfisObj;
//        $sipfisObj->sipfistar=$request->tar;
//        $sipfisObj->fisturu=$request->fisturu;
//        $sipfisObj->numara=$request->sfisno;
//        $sipfisObj->fisfid=$request->fisfid;
//        $sipfisObj->depo=$request->depo;
//        $sipfisObj->doviz=$request->did;
//        $sipfisObj->durumid=$request->durumid;







        return View::make('alsat.sipfisedit')
            ->with('fisturuid', $fisturum)
            ->with('sipfis', $sipfis)
            ->with('sipfisid', $sipfis->sipfisid)
            ->with('sipfissat', $sipfissat)
            ->with('fisturu',$fisturu->fisturuad)
            ->with('olay', $olay)
            ->with('secolay', $sipfis->olayid)
            ->with('depo', $depo)
            ->with('secdepo', $sipfis->depo)
            ->with('doviz', $doviz)
            ->with('secdoviz', $sipfis->doviz)
            ->with('birim', $dropbirim)
            //->with('secbirim', $dropbirim)
            ->with('vergim', $dropvergim)
            ->with('numara', $sipfis->numara)
        ->with('sipfisnoadi', $sipfisnoadi);



    }



    public function numara($a)
    {
        $sipfisno = sipfisObj::where('fisturu', $a)->orderBy('numara', 'desc')
            ->first();

        $numarala=numaralaObj::where('evrakturuid', $a)->get();
        $hane=$numarala->uzunluk;


        $sonnumm=$numarala->sonnumara;
//dd($sonnum);
        $sonnummm=str_pad($sonnumm, $hane, "0", STR_PAD_LEFT);

        //$numara=$sonnummm;
       // dd($sonnummm);
        return ($sonnummm);


    }

    ///////////////////////////////////////***********************************///////////////////////////////////////////////////
    public function irsonnumara(request $req)
            {

                $modObj=numaralaObj::where('evrakturuid', $req->irturu)->first();

//                if(($mod->mod)==1){
//eğer numarlama aktif ise
                    $sonnumara=$modObj->sonnumara+1;
                    $new_index = str_pad($sonnumara, $modObj->uzunluk, "0", STR_PAD_LEFT);
//
                    $numara=$new_index;


//                }
//                else{
////                    $sipfisno = numaralaObj::where('fisturu', $req->fisturu)->orderBy('irnumara', 'desc')
////                        ->first();
//
////                    $numarala=numaralaObj::where('evrakturuid', $req->fisturu)->value('uzunluk');
//                    $numaralaObj=numaralaObj::where('evrakturuid', $req->fisturu)->get();
//                    $hane=$numaralaObj->uzunluk;
//                    $sayi=$numaralaObj->sonnumara;
//
////
//                    $sonnumm=$numaralaObj->sonnumara;
////            //dd($sonnum);
//                    $numara=str_pad($sayi, $hane, "0", STR_PAD_LEFT);
//
//                    //$numara=$sonnummm;
//                    // dd($sonnummm);
////                return ($sonnummm);
//
//                }


//                if($numara==null || $numara==""){
//
//                    $numara="";
//                }
                return response()->json($numara);

            }
    public function iraktarnokaydet(request $request)
                {
                    $sipfisObj = sipfisObj::where('sipfisid', $request->sipfisid)->first();

                    $sipfisObj->irtar=$request->irtarih;
                    $sipfisObj->irnumara=$request->irnumara;
                    $sipfisObj->olayid=4;
//                    $sipfisObj->durumid=4;  // gereksiz
                    $numaralaObj=numaralaObj::where('numaralaid',$request->numaralaid)->first();
//                    $numaralaObj=numaralaObj::find($request->numaralaid);
//                    $numaralaObj=DB::table('numarala')->where('numaralaid',$request->numaralaid)->get();
                    $numaralaObj->sonnumara=$request->irnumara;
                    $sipfisObj->save();
                    $numaralaObj->save();
                    return response()->json($sipfisObj);
                }

    public function siparisfisleri(request $req,$a)
    {


        $sipfislist=DB::table('sipfis')
            ->leftjoin('firmalar','firmalar.fid','=','sipfis.fisfid')
            ->leftjoin('doviz','doviz.did','=','sipfis.doviz')
            ->where('sipfis.fisturu', $a)
            //->orderBy('sipfis.sipfistar', 'desc')
            ->get();

//        $firma = DB::table('cbanka')
//            ->leftJoin('firmalar', 'firmalar.fid', '=', 'cbanka.fid')
//            ->get();
//


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
        $para=$request->gtoplam;
       // number_format($para,2,",",".");
        $para=str_replace( ".", "", $para );
        $para=str_replace( ",", ".", $para );
        //$para=number_format($para,2,",",".");
        //dd($sipfislist);
        $sipfisObj= new sipfisObj;
        $sipfisObj->sipfistar=$request->tar;
        $sipfisObj->fisturu=$request->fisturu;
        $sipfisObj->numara=$request->sfisno;
        $sipfisObj->fisfid=$request->fisfid;
        $sipfisObj->depo=$request->depo;
        $sipfisObj->doviz=$request->did;
//        $sipfisObj->durumid=$request->durumid;
        $sipfisObj->olayid=1;
//        setlocale(LC_MONETARY, 'tr_TR');
//        $rtoplam=money_format('%i', $para);
        //$rtoplam=sprintf('TL %s', number_format($para, 2));
        //dd($rtoplam);
        $sipfisObj->gtoplam=$para;
        //dd($request->gtoplam);
       $sipfisObj->save();




        $sonid=sipfisObj::all()->last()->sipfisid;
//dd($sonid);
        for ($i = 0; $i < count($satirsay); $i++) {
            $sipfissatirObj = new sipfissatirObj;
//            $sipfissatirObj->numara = $request->sfisno;
            $sipfissatirObj->sipfisid = $sonid;
            $sipfissatirObj->fissid = $request->fissid[$i];

//            $miktarr=str_replace( ",", ".", $request->miktar[$i] );
//            $sipfissatirObj->miktar = $miktarr;
//            $sipfissatirObj->birim = $request->birim[$i];
//            $bfiyatt=str_replace( ",", ".", $request->bfiyat[$i] );
//            $sipfissatirObj->bfiyat = $bfiyatt;
//
//
//            $sipfissatirObj->kdv = $request->kdv[$i];
//
//            $tutarr=str_replace( ",", ".", $request->tutar[$i] );
            $miktarr=str_replace( ".", "", $request->miktar[$i] );
            $miktarr=str_replace( ",", ".", $miktarr );
            $sipfissatirObj->miktar = $miktarr;
            $sipfissatirObj->birim = $request->birim[$i];
            $bfiyatt=str_replace( ".", "", $request->bfiyat[$i] );
            $bfiyatt=str_replace( ",", ".", $bfiyatt );
            $sipfissatirObj->bfiyat = $bfiyatt;


            $sipfissatirObj->kdv = $request->kdv[$i];
            $tutarr=str_replace( ".", "", $request->tutar[$i] );
            $tutarr=str_replace( ",", ".", $tutarr );
            $sipfissatirObj->tutar = $tutarr;
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
            ///*************///////////7
//            return view::make('alsat.alissiparisfis')
//                ->with('fisturu',$a)
//                ->with('sipfisnoadi',"Alış")
//                ->with('sipfislistt',$sipfislist);
            ///**/////////////////
            ///
            $numaralaObj=numaralaObj::find(2);
//            $numaralaObj=numaralaObj::where('numaralaid',2)->first();
                $numaralaObj->mod=0;
            $numaralaObj->sonnumara=$request->sfisno;
            $numaralaObj->save();

            return redirect('/siparisfisleri/2')
                ->with('fisturu',$a)
             ->with('sipfisnoadi',"Alış")
               ->with('sipfislistt',$sipfislist);
//            Route::get('/', function () {
//                return view('alsat.alissiparisfis', ['fisturu' => 'dgf']);
//            });

        }else{
            $numaralaObj=numaralaObj::find(1);
//            $numaralaObj=numaralaObj::where('numaralaid', 1)->first();
            $numaralaObj->mod=0;
            $numaralaObj->sonnumara=$request->sfisno;
            $numaralaObj->save();

            return redirect('/siparisfisleri/1')
                ->with('fisturu',$a)
                ->with('sipfisnoadi',"Satış")
                ->with('sipfislistt',$sipfislist);

        }

    }
    public function sipfiseditkaydet(request $request)
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

//dd($request->fisturuid);
        $satirsay=$request->fissid;
        $para=$request->gtoplam;
        // number_format($para,2,",",".");
        $para=str_replace( ".", "", $para );
        $para=str_replace( ",", ".", $para );
        //$para=number_format($para,2,",",".");
        //dd($sipfislist);
        $sipfisObj=sipfisObj::find($request->sipfisid);
        //$sipfisObj= new sipfisObj;
        $sipfisObj->sipfistar=$request->tar;
        $sipfisObj->fisturu=$request->fisturuid;
        $sipfisObj->numara=$request->sfisno;
        $sipfisObj->fisfid=$request->fisfid;
        $sipfisObj->depo=$request->depo;
        $sipfisObj->doviz=$request->did;
        $sipfisObj->durumid=$request->durumid;
        $sipfisObj->olayid=1;
//        setlocale(LC_MONETARY, 'tr_TR');
//        $rtoplam=money_format('%i', $para);
        //$rtoplam=sprintf('TL %s', number_format($para, 2));
        //dd($rtoplam);
        $sipfisObj->gtoplam=$para;
        //dd($request->gtoplam);
        $sipfisObj->save();


//dd($sonid);
        // sdfsdlfksdlfksdşfkdsşfskdfşlskfsdşkfsşdfksşdfksşdfksşfksşdfs

        for ($i = 0; $i < count($satirsay); $i++) {
            $sipfissatirObj =sipfissatirObj::find($request->sipfissatirid[$i]);
            $sipfissatirObj->fissid = $request->fissid[$i];
            $miktarr=str_replace( ".", "", $request->miktar[$i] );
            $miktarr=str_replace( ",", ".", $miktarr );
            $sipfissatirObj->miktar = $miktarr;
            $sipfissatirObj->birim = $request->birim[$i];
            $bfiyatt=str_replace( ".", "", $request->bfiyat[$i] );
            $bfiyatt=str_replace( ",", ".", $bfiyatt );
            $sipfissatirObj->bfiyat = $bfiyatt;


            $sipfissatirObj->kdv = $request->kdv[$i];
            $tutarr=str_replace( ".", "", $request->tutar[$i] );
            $tutarr=str_replace( ",", ".", $tutarr );
            $sipfissatirObj->tutar = $tutarr;
            $sipfissatirObj->save();
        }

        //sdfjlsdjflsdfdslfjsdlkfjdslksdhfodsıfdsovnbdsofusfpsiıfspbfs

        if($request->fisturuid == 2){
            //return Redirect::to('/alissiparisfisi/2');
            //return view('alsat.alissiparisfis');

            //return view('alsat.alissiparisfis',compact('a'));
            // return redirect()->route('/alissiparisfisi');
            //return view('alsat.alissiparisfis',compact('a'));
            //return View::make(‘alsat.alissiparisfis’)->nest( ‘foo/baz’, $a);
            //dd($sipfislist->fisturu);
            ///*************///////////7
//            return view::make('alsat.alissiparisfis')
//                ->with('fisturu',$a)
//                ->with('sipfisnoadi',"Alış")
//                ->with('sipfislistt',$sipfislist);
            ///**/////////////////

            return redirect('/siparisfisleri/2')
                ->with('fisturu',$a)
                ->with('sipfisnoadi',"Alış")
                ->with('sipfislistt',$sipfislist);
//            Route::get('/', function () {
//                return view('alsat.alissiparisfis', ['fisturu' => 'dgf']);
//            });

        }else{
            return redirect('/siparisfisleri/1')
                ->with('fisturu',$a)
                ->with('sipfisnoadi',"Satış")
                ->with('sipfislistt',$sipfislist);

        }

    }

    public function siparissil($sipfisid)
    {

        $post = sipfisObj::findOrFail($sipfisid);

        //$postt=sipfissatirObj::finOrFail($sipfisid);
        sipfissatirObj::where("sipfisid", $sipfisid)->delete();
//dd($post);
        $post->delete();
      //  $postt->delete();
//        $dovizObj=new dovizObj;
//        $dovizObj = dovizObj::find($did);
//        $dovizObj->delete();
        //  $data = dovizObj::destroy($did);
//
        return response()->json($post);
    }
    public function gtoplam(Request $request)
    {


        $sipfisObj =sipfisObj::find($request->sipfisid);

        $gtoplam=str_replace( ".", "", $request->gtoplam );
        $gtoplam=str_replace( ",", ".", $gtoplam );

        $sipfisObj->gtoplam=$gtoplam;



        $sipfisObj->save();

        return response()->json($sipfisObj);
    }


    public function sipsatsil(Request $request,$id)
    {

        $sipsat = sipfissatirObj::find($id);

        //$postt=sipfissatirObj::finOrFail($sipfisid);
        //sipfissatirObj::where("sipfisatirid", $id)->delete();
//dd($sipsat);


        $sipsat->delete();
//        $q = DB::table('sipfissatir')
//            ->where('sipfisid', $request->sipfisid)
//            ->sum('tutar') ;
//        $sipfisObj =sipfisObj::find($request->sipfisid);
////
////        $gtoplam =str_replace( ".", "", $request->gtoplam );
////        $gtoplamm =str_replace( ",", ".", $gtoplam );
//        $sipfisObj->gtoplam=$q;
//        $sipfisObj->save();
        return response()->json($sipsat);
    }

    public function sipfissatekle(Request $request)
    {


        $sipfissatirObj = new sipfissatirObj;
//        $sipfissatirObj->numara=$request->numara;
        $sipfissatirObj->sipfisid=$request->sipfisid;
        $sipfissatirObj->save();
        $sonsatid = sipfissatirObj::orderBy('sipfisatirid', 'desc')->value('sipfisatirid');

        return response()->json($sonsatid);
    }
    public function siparisfislist(Request $request)
    {
        $data = DB::table('sipfis')->where('sipfis.fisturu',$request->fisturu)
            ->select('sipfis.*','firmalar.*','olay.*','doviz.*')
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

            $mod=1;
            $data->sayi = $request->sayi;
            $data->gorunum = $request->assayigorunum;
            $data->sonnumara = $request->assayigorunum;
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

            $mod=1;
            $data->sayi = $request->sayi;
            $data->gorunum = $request->sssayigorunum;
            $data->sonnumara = $request->sssayigorunum;
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
            $data->gorunum = $request->aigorunum;
            $data->sonnumara = $request->aigorunum;
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
            $data->gorunum = $request->sigorunum;
            $data->sonnumara = $request->sigorunum;
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
            $data->gorunum = $request->afgorunum;
            $data->sonnumara = $request->afgorunum;
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
            $data->gorunum = $request->sfgorunum;
            $data->sonnumara = $request->sfgorunum;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
    public function tfnokaydet(request $request)
    {

        if ($request->ajax()) {


            $data = numaralaObj::find($request->evrakturuid);

            $mod=0;
            $data->sayi = $request->sayi;
            $data->gorunum = $request->tfgorunum;
            $data->sonnumara = $request->tfgorunum;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
    public function ofnokaydet(request $request)
    {

        if ($request->ajax()) {


            $data = numaralaObj::find($request->evrakturuid);

            $mod=0;
            $data->sayi = $request->sayi;
            $data->gorunum = $request->ofgorunum;
            $data->sonnumara = $request->ofgorunum;
            $data->uzunluk = $request->uzunluk;
            $data->mod =$mod;
            $data->save();

            return response()->json($data);

        }



    }
//************************numarala bitiş
    public static function den(request $request){

	    return $a=1;

}
}