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
use App\Models\editFirmaObj;
use App\Models\dovizObj;
use App\Models\cbankaObj;
use App\Models\birimObj;
use App\Models\stokObj;
use App\Models\depoObj;
use App\Models\fisturuObj;
use App\Models\stokturObj;
use App\Models\sipfisObj;
use App\Models\sablon_turuObj;

class fisController extends Controller{

	public function siparisfisi()
	{
		$firma = DB::table('firmalar')->get();
		$fistur = fisturuObj::pluck('fisturuad','fisturuid');
//       $sipfistur = sipfisiObj::all();

		return View::make('alsat.siparis')
		           ->with('fistur', $fistur)
		           ->with('firma', $firma);
	}











	public function autocomplete(Request $request)
	{
		$data = firmaObj::select ("cunvan as name","fid")->where("cunvan","LIKE","%{$request->input('query')}%")
		                                          ->get();
		return response()->json($data);
	}
	public function find(Request $request, $id)
	{
		//$query = $request->input('a');

		$res = firmaObj::where("cunvan","LIKE","%{$request->input('a')}%")
		                ->get();
		//$res   = firmaObj::where('cunvan', 'LIKE', "%$query%")->get();
		return response()->json($res);

	}



}