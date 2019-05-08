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
use Illuminate\Support\Facades\Input;
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
    public function irsaliyefisi(request $req, $id = null)
    {
        if($id==null){$idd=$req->fisturu;}
        //
        if($req->input('button2'))   {
            return "dfgcvhbj";
    }


//        if(input::get('button2')) {
//            if(input::get('button2')){
//
//            return View::make('alsat.veri')
//                ->with('fisturu',$req->fisturu);
//
//        }elseif(input::get('button1')){
//            dd("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
//
//
//        }
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


//        $dropvergi = vergiObj::all();

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

        //******fis numaralama ******///////////////////
        // id 1 satış
        $numarala=numaralaObj::all();

        if($id==3){
            $idd=1;
        }elseif($id==4){
            $idd=2;
        }elseif($idd==1){$id=3;}elseif($idd==2){$id=4;}


        $sipfisno = sipfisObj::where('fisturu', $id)->orderBy('sipfisid', 'desc')
            ->first();



        $sipfisnoadiid=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $idd)->first();
        $sipfisnoadi=$sipfisnoadiid->fisturuad;




        // dd($sipfisnoadi);
        $numarala=numaralaObj::where('evrakturuid', $id)->first();
        $hane=$numarala->uzunluk;
// dd($hane);
        //eğer numaralama aktif değilse
//                    if($numarala->mod==0 || $numarala->mod==""){
        if ($id==3){
// satış ise



            $sonnumm=$numarala->sonnumara + 1;
//dd($sonnum);
            $sonnummm=str_pad($sonnumm, $hane, "0", STR_PAD_LEFT);

            $numara=$sonnummm;
        }
        elseif ($id==4){
//
            // alış ise
            $sonnumm=$numarala->sonnumara + 1;

            $sonnummm=str_pad($sonnumm, $hane, "0", STR_PAD_LEFT);

            $numara=$sonnummm;

        }


//


        return View::make('alsat.irsaliyefis')
            ->with('fistur', $fistur)
            ->with('firma', $firma)
            ->with('numara', $numara)
            ->with('fisturu',$idd)
            ->with('firmay', $firmay)
            ->with('depo', $dropdepo)
//            ->with('vergi', $dropvergi)
            ->with('vergim', $dropvergim)
            ->with('olay', $olayy)
//            ->with('olayid', $olayid)
            ->with('svergi', $selectedvergi)
            ->with('stok', $stok)
            ->with('doviz', $dropdoviz)
            ->with('birim', $dropbirim)
            ->with('sipfisnoadi', $sipfisnoadi);
//
    }
    public function irsaliyefisleri(request $req, $fisturu){

        if($fisturu==3){
            $idd='1';
        }else {
            $idd='2';
        }

        $sipfisnoadiid=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $idd)->first();
        $sipfisnoadi=$sipfisnoadiid->fisturuad;
        return View::make('alsat.irsaliye')

            ->with('fisturu',$idd)
            ->with('sipfisnoadi', $sipfisnoadi);

    }
    public function irsaliyefislist(Request $request)
    {
        $data = DB::table('sipfis')->where('sipfis.fisturu',$request->fisturu)
            ->groupBy('irnumara')
            ->select('sipfis.*','firmalar.*','olay.*','doviz.*')
//            ->where('sipfis.olayid','<>', 1)
//            ->whereRaw("users.id BETWEEN 1003 AND 1004")
//                aynı ifade
            ->whereIn('sipfis.olayid', [3,4,5])
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
    public function fatsonnumara(request $req)
    {

        $modObj=numaralaObj::where('evrakturuid', $req->fatturu)->first();

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
    public function sonnumara($evrakturu)
    {

        $numarala=numaralaObj::where('evrakturuid', $evrakturu)->first();
        $sayi=($numarala->sonnumara)+1;
        $hane=$numarala->uzunluk;
        $sonnum=str_pad($sayi, $hane, "0", STR_PAD_LEFT);
        return ($sonnum);


    }
    public function sipaktarlist(Request $request)
    {
        $data = DB::table('sipfis')
            ->select('sipfis.*','firmalar.*','olay.*')
            ->where('sipfis.fisturu',$request->fisturu)
            ->where('sipfis.fisfid', $request->fid)
            ->where('sipfis.olayid', 1)

            ->leftjoin('firmalar', 'firmalar.fid', '=', 'sipfis.fisfid')
            ->leftjoin('olay', 'olay.olayid', '=', 'sipfis.olayid')
//            ->leftjoin('doviz', 'doviz.did', '=', 'sipfis.doviz')
//            ->leftjoin('sipdurum', 'siparis.durumid', '=', 'sipdurum.sipdurumid')
//            ->leftjoin('musteriler', 'siparis.mid', '=', 'musteriler.mid')
//            ->orderByRaw('YEAR(tarih) ASC, MONTH(tarih) ASC, DAY(tarih) ASC')
            ->get();


        $json_dat = array(
////            "draw"            => intval(""),
////            "recordsTotal"    => intval(""),
////            "recordsFiltered" => intval(""),
            "data"            => $data
        );
        return  response()->json($json_dat);
    }
    public function sipaktarok(Request $req)
    {

//        $firmad = DB::table('firmalar')->where('fid', $requ->fisfid)->value('cunvan');
////        dd($firmad);
//        $sipfisnoadiid=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $requ->fisturum)->first();
//        $sipfisnoadi=$sipfisnoadiid->fisturuad;
////
//////        $fisturu=$request;
//////        dd($request);
//////        return View::make('alsat.veri')
//////            ->with('fisturu',$req->fistur);
$ibo=1;
        $sipidarray=explode(",",$req->sipaktarray); //numaraları dizi haline getirdik
        $sipfisnoadiid=DB::table('sipfissatir')
            ->select('sipfissatir.*','stok.sad','vergi.vor','birim.bad')
            ->leftjoin('stok', 'stok.sid', '=', 'sipfissatir.fissid')
            ->leftjoin('vergi', 'vergi.vid', '=', 'sipfissatir.kdv')
            ->leftjoin('birim', 'birim.bid', '=', 'sipfissatir.birim')
            ->whereIn('sipfisid', $sipidarray)->get();

//        $stokad = DB::table('firmalar')->where('fid', $requ->fisfid)->value('cunvan');



        return response()->json($sipfisnoadiid);
//////        return view ('alsat.irsaliyefis', compact('data'))->render() ;
////
//        return View::make('alsat.irsaliyefis')
//            ->with('doviz', $dropdoviz)
//            ->with('birim', $dropbirim)
//            ->with('vergim', $dropvergim)
//            ->with('depo', $dropdepo)
//            ->with('olay', $olayy)
//            ->with('firma', $requ->fisfid)
//            ->with('firmad', $firmad)
//            ->with('numara', $requ->sfisnumara)
//            ->with('fisturu',$requ->fisturum)
//            ->with('sipfisnoadi', $sipfisnoadi)
////            ->render()
//                ;


    }
    public function irsaliyekaydet(request $request)
    {
//$fisturu=0;
        // return View::make('alsat.siparis')->with('fisturu', $fisturu);
        $a=$request->fisturu;
        $satirsay=$request->fissid;

        $para=$request->gtoplam;
        // number_format($para,2,",",".");
        $para=str_replace( ".", "", $para );
        $para=str_replace( ",", ".", $para );
       if($request->fisturu==1){
           $evrakturu=3;
       }else{
           $evrakturu=4;
       }
        if($request->edit != 1) //edit değilse
        {

            $sipfisObj= new sipfisObj;
            $sipfisObj->numara=$this->sonnumara($request->fisturu);
            $sipfisObj->irtar=$request->tar;
            $sipfisObj->sipfistar=$request->tar;
            $sipfisObj->fisturu=$request->fisturu;
            $sipfisObj->irnumara=$request->irno;
            $sipfisObj->fisfid=$request->fisfid;
            $sipfisObj->depo=$request->depo;
            $sipfisObj->doviz=$request->did;
            $sipfisObj->olayid=4;
            $sipfisObj->gtoplam=$para;
            $sipfisObj->save();

            $sonsipid=sipfisObj::all()->last()->sipfisid;
            for ($i = 0; $i < count($satirsay); $i++) {
//            $sipfissatirObj =sipfissatirObj::find($request->sipfissatirid[$i]);
                $sipfissatirObj=new sipfissatirObj();
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
                $sipfissatirObj->numara=$this->sonnumara($request->fisturu);
                $sipfissatirObj->sipfisid = $sonsipid;
                $sipfissatirObj->save();
            }

            $numaralaObj=numaralaObj::find($evrakturu);
            $numaralaObj->sonnumara=$this->sonnumara($evrakturu);
            $numaralaObj->save();

            $numaralaObj=numaralaObj::find($request->fisturu);
            $numaralaObj->sonnumara=$this->sonnumara($request->fisturu);
            $numaralaObj->save();

        }else
            {
                $sipidarrays=explode(",",$request->sipaktarrayf);

                foreach($sipidarrays as $sipidarray)
                {
                    $sipfisObj=sipfisObj::find($sipidarray);
                    $sipfisObj->irtar=$request->tar;
                    $sipfisObj->irnumara=$request->irno;
                    $sipfisObj->olayid=4;
                    $sipfisObj->save();

                }
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


                $numaralaObj=numaralaObj::find($evrakturu);
                $numaralaObj->sonnumara=$this->sonnumara($evrakturu);
                $numaralaObj->save();

            }

        if($request->fisturu == 2){


            return redirect('/irsaliyelist/4')
//
                ;
//

        }else{
            return redirect('/irsaliyelist/3')
//
                ;
//

        }

    }
    public function irsaliyedit(request $request, $irnumara, $fisturum)
    {

//         $sipnobul=sipfisObj::where('irnumara', $irnumara)->select('sipfisid')->get();
        $sipnobuls = DB::table('sipfis')->where('irnumara', $irnumara)->select('sipfisid')->get();

        if($fisturum==3){$fisturu=1;}else{$fisturu=2;}

        $sipfis=DB::table('sipfis')->where('irnumara', $irnumara)
//            ->select('sipfis.sipfisid')
            ->leftjoin('firmalar','firmalar.fid','=','sipfis.fisfid')
            ->first();

        $sipfissat = DB::table('sipfissatir')                       //birden çok aynı irnolu satırları listele
            ->leftjoin('stok','stok.sid','=','sipfissatir.fissid')
            ->whereIn('sipfissatir.sipfisid',
                        function ($query) use ($irnumara) {
                        $query->from('sipfis')->select('sipfis.sipfisid')
                        ->where('sipfis.irnumara', $irnumara);
                        })->get();

        $fisturu=DB::table('fisturu')->select('fisturuad')->where('fisturuid', $fisturu)->first();
        $sipfisnoadi=$fisturu->fisturuad;



        $olay= olayObj::pluck('olayad','olayid');
        $depo=DB::table('depo')->get();
        $doviz=DB::table('doviz')->get();
        $dropvergi = vergiObj::all();

        $dropbirim = birimObj::pluck('bad','bid');
        $dropvergim = vergiObj::pluck('vor','vid');

        return View::make('alsat.irsaliyedit')
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
            ->with('numara', $irnumara)
            ->with('sipfisnoadi', $sipfisnoadi);

    }
    public function irsaliyeditkaydet(request $request)
    {
        $sipfisObj = DB::table('sipfis')->select('sipfisid')->where('irnumara', $request->irno)->get();
        $irnumara = $request->irno;
//        dd($irnumara);
        $sipfisids = [];
        foreach($sipfisObj as $sipfisObjs)
        {
//            array_push($sipfisids, $sipfisObjs->sipfisid); //dizi içindeki idleri sıralama
////            $fisturu = DB::table('sipfis')->where('irnumara', $sipfisObjs->sipfisid)->first();
//            dd($request->irno);

//            $sipfisObj=sipfisObj::find($sipfisObjs->sipfisid);
            $sipfisObj = DB::table('sipfis')->where('sipfisid', $sipfisObjs->sipfisid)->get();
            $sipfisObj->irnumara=$irnumara;
            $sipfisObj->irtar=$request->tar;
            $sipfisObj->save();
    }
//
//        $sipfisids = DB::table('sipfis')                       //aynı id den birden fazla olursa
//                ->select('sipfis.sipfisid')
//                ->whereIn('sipfis.sipfisid',
//                    function ($query) use ($irnumara) {
//                        $query->from('sipfis')->select('sipfis.sipfisid')
//                            ->where('sipfis.irnumara', $irnumara);
//                    })->pluck('sipfisid')->toarray();

//        foreach($sipfisids as $sipfisid)
//        {
////            dd($sipfisid);
//            $sipfisObj=sipfisObj::find($sipfisid);
//            $sipfisObj->irnumara=$request->irno;
//            $sipfisObj->irtar=$request->tar;
//            $sipfisObj->save();
////            dd($sipfisid);
////            array_push($competition_all, $sipfisid); //dizi içindeki idleri sıralama
//       }
//        dd($sipfisids);
//
//        $sipfisObj->save();
//        $satirsay=$request->fissid;
//
//        for ($i = 0; $i < count($satirsay); $i++) {
//            $sipfissatirObj = sipfissatirObj::find($request->sipfissatirid[$i]);
//            $sipfissatirObj->fissid = $request->fissid[$i];
//            $miktarr = str_replace(".", "", $request->miktar[$i]);
//            $miktarr = str_replace(",", ".", $miktarr);
//            $sipfissatirObj->miktar = $miktarr;
//            $sipfissatirObj->birim = $request->birim[$i];
//            $bfiyatt = str_replace(".", "", $request->bfiyat[$i]);
//            $bfiyatt = str_replace(",", ".", $bfiyatt);
//            $sipfissatirObj->bfiyat = $bfiyatt;
//            $sipfissatirObj->kdv = $request->kdv[$i];
//            $tutarr = str_replace(".", "", $request->tutar[$i]);
//            $tutarr = str_replace(",", ".", $tutarr);
//            $sipfissatirObj->tutar = $tutarr;
//            $sipfissatirObj->save();
//
//        }
        if($request->fisturu == 2){


            return redirect('/irsaliyelist/4')
//
                ;
//

        }else{
            return redirect('/irsaliyelist/3')
//
                ;
//

        }
    }
}