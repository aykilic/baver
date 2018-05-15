<?php

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
use App\Models\editFirmaObj;
use App\Models\dovizObj;
use App\Models\cbankaObj;
use App\Models\birimObj;
use App\Models\stokObj;
use App\Models\depoObj;
use App\Models\fisturuObj;
use App\Models\stokturObj;
use App\Models\sablonObj;
use App\Models\sablon_turuObj;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return mixed
     */
    //****************CARİİİİİ***************************//
    public function girisler()
                    {

                        $dropbanka = bankaObj::all();
        $dropbanka1 = bankaObj::pluck('bankad','baid');

                        $selectedbanka = bankaObj::first()->baid;
//                        $banka= DB::table('bankalar')
//                            ->select('bankalar.*', 'bankalar.bankad')
//                           ->join('bankalar', 'firmalar.fid', '=', 'bankalar.fid')
//                           ->where('bankalar.baid', 2);



                //        $editfirma = firmaObj::where('fid', $fid)->first();
                        $dropdoviz = dovizObj::all();
                        $selecteddoviz = dovizObj::first()->did;


//
//                        $users = DB::table('users')
//                            ->orderBy('name', 'desc')
//                            ->get();
//


                       $firma = DB::table('firmalar')->get();
//        $firma = DB::table('firmalar')
//            ->select('firmalar.*', 'cbanka.*')
//            ->join( 'cbanka','cbanka.fid', '=', 'firmalar.fid')
//           ->get();
       // dd($firma);
                       /////////////////// TABLO BİRLEŞTİR /////////////////////////
//                        $firma = DB::table('firmalar')
//                            ->select('firmalar.*', 'bankalar.bankad')
//                            ->join('bankalar', 'firmalar.fid', '=', 'bankalar.fid')
////                            ->where('bankalar.baid', 2)
//                            ->get();

//                DB::enableQueryLog();
                        return View::make('Girisler.Cari')
                            ->with('secb', $selectedbanka)
                            ->with('banka', $dropbanka)
                            ->with('banka1', $dropbanka1)
                            ->with('secd', $selecteddoviz)
                            ->with('doviz', $dropdoviz)
                            ->with('firma', $firma);
                //        return view('Girisler.Cari',compact('firma'));
//                        dd(DB::getQueryLog());
                    }
                //    public function cariedit1()
                //    {
                //
                //
                //
                //        return view('Girisler.Cariedit1');
                //    }

    public function kaydet(Request $request)
                        {

//                            dataTable
                     $firma = DB::table('firmalar')->get();
                     // Kayıt
                             $firmaObj= new firmaobj;
                             $firmaObj->cunvan=$request->cunvan;
                             $firmaObj->cadres1=$request->cadres1;
                             $firmaObj->tar=$request->tar;
//                             $firmaobj->save();
                            $firmaObj->save();
//                            $fid = DB::table('firma')->where('cunvan', 'cunvan')->value('fid');


//
        //*********************** isimden id bulma
        $fid = DB::table('firmalar')->where('cunvan', $request->cunvan)->value('fid');


        $a=$request->dbanka;
        $b=$request->did;
       $c= $request->iban;
            if (!in_array("Seciniz", $a)) {
                for ($i = 0; $i < count($a); $i++) {
                    $cbankaObj = new cbankaObj;
                    $cbankaObj->fid = $fid;
                    $cbankaObj->baid = $request->dbanka[$i];
                    $cbankaObj->did = $request->did[$i];
                    $cbankaObj->iban = $request->iban[$i];
                    $cbankaObj->bsube = $request->bsube[$i];
                    $cbankaObj->bsubek = $request->bsubek[$i];
                    $cbankaObj->hesapno = $request->hesapno[$i];
                    $cbankaObj->save();
                }
            }
//


        return Redirect::to('Cari');
    }


//                            foreach ($cbankaObj as $cbankaObj) {
//                                $cbankaObj = new $cbankaObj();
//                                $cbankaObj->fid = $fid[$i];
//                                $cbankaObj->baid = $request->dbanka[$i];
//                                $cbankaObj->did = $request->did[$i];
//                                $cbankaObj->iban = $request->iban[$i];
//                                $cbankaObj->csube = $request->csube[$i];
//                                $cbankaObj->csubek = $request->csubek[$i];
//                                $cbankaObj->cbhesapno = $request->chesapno[$i];
//                                $cbankaObj->save();
////                                DB::table('cbanka')->insert($sqlData);
//
//                                //       return $request->did[$i].$request->iban[$i].$fid[$i];
//
//
//                            }




    public function update(Request $request, $fid)

                {
            //
            //        ***
            //        DB::table('firmalar')->where('fid',$fid)->update(array(
            //        'cunvan' => $request->cunvan,
            //        'cadres1' => $request->cadres1
            //    ));
            //        ***

                  $firmaup=firmaObj::find($fid);
                    //$firmaup = DB::table('firmalar')->find($fid);
                    $firmaup->cunvan=$request->cunvan;
                   $firmaup->cadres1=$request->cadres1;
                    $firmaup->tar=$request->tar;

                    $firmaup->save();

                    return Redirect::to('Cari');

                }
                //****                    Cari düzenle            ***************//
    public function getCariedit($fid)
    {


        $dropbanka = bankaObj::pluck('bankad','baid');
        $dropdoviz = dovizObj::pluck('dad','did');

//        $dropbanka = bankaObj::all();
//        $selectedbanka = bankaObj::first()->baid;
//        //        $editfirma = firmaObj::where('fid', $fid)->first();
//        $dropdoviz = dovizObj::all();
//        $selecteddoviz = dovizObj::first()->did;

//
//                        $users = DB::table('users')
//                            ->orderBy('name', 'desc')
//                            ->get();
//


      //  $firma = DB::table('firmalar')->get();
        $firma = DB::table('cbanka')
            ->leftJoin('firmalar', 'firmalar.fid', '=', 'cbanka.fid')
            ->get();
//          $firma=firmaObj::find('fid', $fid);
//        $firma = firmaObj::select('*')->where('fid', $fid)->get();
//       $firma = firmaObj::("Select * from firmalar where fid=$fid")->get();
        //  $firma = firmaObj::select('fid')->where('fid'>$fid);
//        return view::make('Girisler.Cariedit')
//            ->with('editfirma',editFirmaObj::find($fid));
        $editfirma = firmaObj::where('fid', $fid)->first();
        $editcbanka = cbankaObj::where('fid', $fid)->first();

        $cbankafirma = DB::table('bankalar')
                           ->select('cbanka.*', 'bankalar.*','doviz.*')
                           ->join( 'cbanka','cbanka.baid', '=', 'bankalar.baid')
                            ->join('doviz','doviz.did', '=', 'cbanka.did')
                            ->where('cbanka.fid', $fid )
                          ->get();


//echo $cbankafirma;
        //  gösterim
   //  dd($cbankafirma);

//     return view('Girisler.Cariedit1',compact('editfirma'));
//echo'sdfsdf';
//        // show the view and pass the nerd to it





        return View::make('Girisler.Cariedit')
            ->with('sdf', $editfirma)
            ->with('cbankaObj', $cbankafirma)
            ->with('sdfa', $editcbanka)
            ->with('banka', $dropbanka)
            ->with('doviz', $dropdoviz)
            ->with('sdfa', $editcbanka)
            ->with('firma', $firma);
////        return view('Girisler.Cariedit');


    }

    public function cbankaydet(Request $request)
    {
//


              // $fid = DB::table('firmalar')->where('cunvan', $request->cunvan)->value('fid');

        $cbankaObj= new cbankaObj;
                $cbankaObj->fid = $request->fid;
                $cbankaObj->baid = $request->dbankak;
                $cbankaObj->did = $request->didk;
                $cbankaObj->iban = $request->ibank;
                $cbankaObj->bsube = $request->bsubeka;
                $cbankaObj->bsubek = $request->bsubekk;
                $cbankaObj->hesapno = $request->hesapnok;
                $cbankaObj->save();
                return response()->json($cbankaObj);


//

    }
        public function cbankedit(Request $request,$cbid)
    {

        $cbankaObj=cbankaObj::find($cbid);
        $cbankaObj->baid = $request->dbanka;
        $cbankaObj->did = $request->did;
        $cbankaObj->iban = $request->iban;
        $cbankaObj->bsube = $request->bsube;
        $cbankaObj->bsubek = $request->bsubek;
        $cbankaObj->hesapno = $request->hesapno;
        $cbankaObj->save();
        return response()->json($cbankaObj);






    }
    public function cbanksil($cbid)
    {
        $post = cbankaObj::find($cbid);
        $post->delete();

        return response()->json($post);
    }
    public function carisil($fid)
                {
                    //echo "tamam" .$fid;

                    firmaObj::where("fid", $fid)->delete();
                    //   $firma = DB::table('firmalar')->get();

                    //        return view('Girisler.Cari',compact('firma'));

                    //   return redirect()-> route('/Cari')
                    //  ->with('success','Item deleted successfully');
                    return back();
                }
    //****************CARİİİİİ***************************//

/////////////////////*************Stok**//////
    public function stok()
    {
        $stoktur= stokturObj::pluck('stokturad','stokturid');


        $stokcheck = stokturObj::all();
       // dd($stokcheck);

    $stok = DB::table('stok')
        ->select('stoktur.*', 'stok.*')
        ->join('stoktur', 'stoktur.stokturid', '=', 'stok.stokturid')
        ->get();
   // dd("ibo");

//dd($stok);
        return View::make('Girisler.stok')
            ->with('stok', $stok)
        ->with('post', $stoktur);

    }
    public function stokkaydet(Request $request)
    {
        $stokObj =new stokObj;
        $stokObj->sad=$request->sad;
        $stokObj->stokturid=$request->sturid;
        $stokObj->save();

        return response()->json($stokObj);
    }
    public function stokedit(Request $request, $sid)


    {


        if($request->ajax()) {
            $data = stokObj::find($sid);


            $data->sad = $request->sad;
            $data->stokturid = $request->sturid;
            $data->save();

            return response()->json($data);

        }

    }
    public function stoksil($sid)
    {

        $post = stokObj::findOrFail($sid);
        $post->delete();
//        $dovizObj=new dovizObj;
//        $dovizObj = dovizObj::find($did);
//        $dovizObj->delete();
        //  $data = dovizObj::destroy($did);
//
        return response()->json($post);
    }


                //****************BANKA***************************//
    public function banka()
                {
            $banka = DB::table('bankalar')
                                ->get();
            //DB::enableQueryLog();
            return View::make('Girisler.banka')
            //            ->with('sdf', $editfirma)
            ->with('banka', $banka);
            //        return view('Girisler.Cari',compact('firma'));
            //dd(DB::getQueryLog());
            }
    public function bankaedit1()
    {

        //DB::enableQueryLog();
        return View::make('Girisler.Cariedit1');
            //            ->with('sdf', $editfirma)

        //        return view('Girisler.Cari',compact('firma'));
        //dd(DB::getQueryLog());
    }
    public function bankakaydet(Request $request)
                    {
                        /* DTO::create($request->all());*/
                        $bankaObj= new bankaObj;
                        $bankaObj->bankad=$request->bankad;
                        $bankaObj->save();

                        $banka = DB::table('bankalar')
                            ->orderBy('bankad', 'desc')->get();


                        return view('Girisler.banka',compact('banka'));
                    }
    public function getbankaedit($baid)
    {
                 $getbanka = bankaObj::where('baid', $baid)->first();

        return View::make('Girisler.bankaedit')
            ->with('sdf', $getbanka);
                    }
    public function bankaupdate(Request $request, $baid)

    {
        //
        //        ***
        //        DB::table('firmalar')->where('fid',$fid)->update(array(
        //        'cunvan' => $request->cunvan,
        //        'cadres1' => $request->cadres1
        //    ));
        //        ***

        $banka=bankaObj::find($baid);
        //$firmaup = DB::table('firmalar')->find($fid);
        $banka->bankad=$request->bankad;

        $banka->save();

        return Redirect::to('Banka');

    }
    public function bankasil($baid)
    {
//         dovizObj::destroy($baid);
        bankaObj::where("baid", $baid)
            ->delete();
        //   $firma = DB::table('firmalar')->get();

        //        return view('Girisler.Cari',compact('firma'));

        //   return redirect()-> route('/Cari')
        //  ->with('success','Item deleted successfully');
        return back();
    }
//**********************Banka*******************//







//**********************Döviz*******************//

    public function doviz()
    {
        $dovizd = dovizObj::pluck('dad','did');
        $doviz = dovizObj::all();

        return View::make('Girisler.doviz')
            ->with('dovizd', $dovizd)
            ->with('doviz', $doviz);




    }
    public function dovizkaydet(Request $request)
    {
        $dovizd = dovizObj::pluck('dad','did');
        $doviz = dovizObj::all();




        $dovizObj =new dovizObj;
        $dovizObj->dad=$request->dad;
        $dovizObj->save();

        return response()->json($dovizObj);






    }
    public function dovizedit(Request $request, $edid)


    {
        $dovizd = dovizObj::pluck('dad', 'did');
        $doviz = dovizObj::all();

        if($request->ajax()) {
            $data = dovizObj::find($edid);


            $data->dad = $request->dad;
            $data->save();

	        return response()->json($data);

        }
    }
    public function dovizsil($dovizid)
    {

        $data = dovizObj::findOrFail($dovizid);
        $data->delete();
//        $dovizObj=new dovizObj;
//        $dovizObj = dovizObj::find($did);
//        $dovizObj->delete();
    //  $data = dovizObj::destroy($did);
//
       return response()->json($data);
    }


//  ***************  birim********************//////////////


    public function birim()
    {
        $birim = birimObj::all();

        return View::make('Girisler.birim')
            ->with('post', $birim);
    }
    public function birimkaydet(Request $request)
    {





        $post =new birimObj;
        $post->bad = $request->bad;
        $post->save();

        return response()->json($post);

    }
    public function birimedit(Request $request, $bid)


    {


        if ($request->ajax()) {
            $data = birimObj::find($bid);


            $data->bad = $request->bad;
            $data->save();

            return response()->json($data);

        }
    }
    public function birimsil($bid)
    {

        $post = birimObj::findOrFail($bid);
        $post->delete();
//        $dovizObj=new dovizObj;
//        $dovizObj = dovizObj::find($did);
//        $dovizObj->delete();
        //  $data = dovizObj::destroy($did);
//
        return response()->json($post);
    }
//****************birim***************************//


//****************BANKA***************************//
    public function depo()
    {
        $depo = depoObj::all();

        return View::make('Girisler.depo')
            ->with('post', $depo);
    }

    public function depokaydet(Request $request)
    {





        $depoObj =new depoObj;
        $depoObj->depoad=$request->depoad;
        $depoObj->dadres=$request->dadres;
        $depoObj->dil=$request->dil;
        $depoObj->dilce=$request->dilce;
        $depoObj->deposta=$request->deposta;
        $depoObj->dcep=$request->dcep;
        $depoObj->dsabit=$request->dsabit;
        $depoObj->dvdno=$request->dvdno;
        $depoObj->dvad=$request->dvad;
        $depoObj->dyad=$request->dyad;
        $depoObj->dytel=$request->dytel;


        $depoObj->save();

        return response()->json($depoObj);






    }


    public function depoedit(Request $request, $depoid)


    {


        if ($request->ajax()) {
            $depoObj = depoObj::find($depoid);

            $depoObj->depoad=$request->depoad;
            $depoObj->dadres=$request->dadres;
            $depoObj->dil=$request->dil;
            $depoObj->dilce=$request->dilce;
            $depoObj->deposta=$request->deposta;
            $depoObj->dcep=$request->dcep;
            $depoObj->dsabit=$request->dsabit;
            $depoObj->dvdno=$request->dvdno;
            $depoObj->dvad=$request->dvad;
            $depoObj->dyad=$request->dyad;
            $depoObj->dytel=$request->dytel;


            $depoObj->save();

            return response()->json($depoObj);

        }
    }
    public function deposil($depoid)
    {

        $post = depoObj::findOrFail($depoid);
        $post->delete();
//        $dovizObj=new dovizObj;
//        $dovizObj = dovizObj::find($did);
//        $dovizObj->delete();
        //  $data = dovizObj::destroy($did);
//
        return response()->json($post);
    }

    //****************stoktur***************************//

    public function stoktur()
    {
        $stoktur = stokturObj::all();

        return View::make('Girisler.stoktur')
            ->with('post', $stoktur);
    }
    public function stokturkaydet(Request $request)
    {





        $stokturObj =new stokturObj;
        $stokturObj->stokturad=$request->sad;



        $stokturObj->save();

        return response()->json($stokturObj);






    }


    public function stokturedit(Request $request, $stokturid)


    {


        if ($request->ajax()) {
            $stokturObj = stokturObj::find($stokturid);

            $stokturObj->stokturad=$request->sad;



            $stokturObj->save();

            return response()->json($stokturObj);

        }
    }
    public function stokturusil($stokturid)
    {

        $post = stokturObj::findOrFail($stokturid);
        $post->delete();
//        $dovizObj=new dovizObj;
//        $dovizObj = dovizObj::find($did);
//        $dovizObj->delete();
        //  $data = dovizObj::destroy($did);
//
        return response()->json($post);
    }

    //****************stoktur***************************//



    //****************siparis fisi***************************//



    //****************siparis fisi***************************//
	public function sablon()
	{
		//$firma = DB::table('firmalar')->get();

//		$sablon = DB::table('sablonad')
//		          ->select('sablon.*','sablonad.*','sablon_turu.*')
//		          ->join( 'sablon','sablon.sbladid', '=', 'sablonad.sbladid')
//		         ->join( 'sablon_turu','sablon.sblturuid', '=', 'sablon_turu.sblturuid')
//			->get();
		$sablon = DB::table('sablonad')
			->select('sablonad.*','sablon_turu.*')
			->join( 'sablon_turu','sablonad.sblturuid', '=', 'sablon_turu.sblturuid')
			->get();
//		$sablon = DB::table('sablonad')
//			->select('sablonad.*','sablon_turu.*','sablon.*')
//			->join( 'sablon','sablonad.sbladid', '=', 'sablon.sbladid')
//			->join( 'sablon_turu','sablonad.sblturuid', '=', 'sablon_turu.sblturuid')
//
//		            ->get();


		//dd($sablon);
		return View::make('sablonlar.sablon')
			->with('sablon', $sablon);

	}
	public function design()
	{

		$sbltur = sablon_turuObj::all();

		if ($sbltur!==""){
            $sblid = sablonObj::all();
            $secsbltur = sablon_turuObj::all();
        }
        else{
            $secsbltur = sablon_turuObj::first()->sblturuid;
            $sblid=db::table('sablon')
                ->select('sablon.*','sablonad.*')
                ->join( 'sablonad','sablonad.sbladid', '=', 'sablon.sbladid')
                ->get();
        }



	//	$sbltur= sablon_turuObj::pluck('sblturuad','sblturuid');
		//$secsbltur = sablon_turuObj::all();
//		$secsbltur = sablon_turuObj::first()->sblturuid;





		//$firma = DB::table('firmalar')->get();
		$sbladsonid = DB::table('sablonad')
		           ->orderBy('sbladid', 'desc')
		           ->first();
///



	///


		if (empty($sbladsonid)){
			$sonnumara=1;
		}
		else{
		$sonnumara=$sbladsonid->sbladid +1;
		}
		$data=null;
		$firma = firmaObj::first();
		//dd($firma);
		return View::make('sablonlar.design')
		           ->with('firma', $firma)
		           ->with('sonnumara', $sonnumara)
					->with('sblid', $sblid)
			->with('sblturu', $sbltur)
			->with('secsblturu', $secsbltur)
		           ->with('data', $data);

	}
	public function designedit(Request $request,$id)
	{
		//$sbltur= sablon_turuObj::pluck('sblturuad','sblturuid');

		$sablonadObj = sablonadObj::find($id);
		$sbltur = sablon_turuObj::all();
		$secsbltur = db::table('sablonad')->where('sbladid',$id)->value('sblturuid');

		$sbladsonid = DB::table('sablonad')
	                 ->orderBy('sbladid', 'desc')
	                 ->first();
///
		$sblid=db::table('sablon')
		         ->select('sablon.*','sablonad.*')
		         ->join( 'sablonad','sablonad.sbladid', '=', 'sablon.sbladid')
		         ->get();
		if (empty($sbladsonid)){
			$sonnumara=1;
		}
		else{
			$sonnumara=$sbladsonid->sbladid +1;
		}
		$data=null;
		$firma = firmaObj::first();
		//$data = sablonObj::find($id);
		$datam=DB::table('sablon')->where('sbladid',$id)->get();


$datamt=DB::table('sablon')->where('sbladid',$id)->where('id','tbldongu')->get();
//dd($datamt);
		return View::make('sablonlar.design')
			->with('firma', $firma)
			->with('sonnumara', $sonnumara)
			->with('sblid', $sblid)
			->with('data', $data)
			->with('sblturu', $sbltur)
			->with('secsblturu', $secsbltur)
			->with('sablonad', $sablonadObj)
			->with('sablone', $datam)
			->with('sablonet', $datamt);
//		$sablon = DB::table('sablon')
//		            ->select('sablon.*', 'sablon_turu.*')
//		            ->join( 'sablon_turu','sablon.sblturuid', '=', 'sablon_turu.sblturuid')
//		            ->get();
//		return View::make('sablonlar.design')
//		           ->with('sablon', $sablon);

	}
	public function designajedit(Request $request,$id)
	{
		//$data = sablonObj::find($id);
		$datam=DB::table('sablon')->where('sbladid',$id)->get();
		//dd($datam);

		return View::make('sablonlar.design')
		           ->with('sablone', $datam);
//		$sablon = DB::table('sablon')
//		            ->select('sablon.*', 'sablon_turu.*')
//		            ->join( 'sablon_turu','sablon.sblturuid', '=', 'sablon_turu.sblturuid')
//		            ->get();
//		return View::make('sablonlar.design')
//		           ->with('sablon', $sablon);

	}
	public function designkaydet(Request $request) {

	//	dd($request->all());
		$sablonadObj =new sablonadObj;
		$sablonadObj->sblad=$request->sblad;
		$sablonadObj->sblturuid=$request->sblturuid;




		$sablonadObj->save();

		$aa=json_decode($request->datam, true);
		$aat=json_decode($request->datamt,true);
		foreach ($aat as $trackt) {

			sablonObj::create($trackt);
		}

		foreach ($aa as $track) {
			sablonObj::create($track);
    }
		return response()->json($aat);
			//}
			//return response()->json( $data );


		}

}

