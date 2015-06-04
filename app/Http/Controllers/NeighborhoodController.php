<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Neighborhood;
use App\Http\Requests\NeighborhoodRequest;


class NeighborhoodController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function __construct()
	{

		$this->middleware('auth', ['except' => 'index']);

	}
	
	public function index()
	{
		
		$neighborhoods = Neighborhood::paginate(10);

		return View('neighborhoods.index',compact('neighborhoods'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View('neighborhoods.createUpdate');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(NeighborhoodRequest $request)
	{
		
		Neighborhood::create($request->all());

		return redirect('neighborhoods');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Neighborhood $neighborhood)
	{
		
		return View('neighborhoods.show',compact('neighborhood'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Neighborhood $neighborhood)
	{
		
		return View('neighborhoods.createUpdate', compact('neighborhood'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Neighborhood $neighborhood, Request $request)
	{
		
		$neighborhood->update($request->all());		

		return redirect('neighborhoods');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$neighborhood = Neighborhood::find($id);

		$neighborhood->delete();

		return redirect('neighborhoods')->with('deleted', $id);
	}

	public function restore($id)
   	{
       //Indicamos que la busqueda se haga en los registros eliminados con withTrashed
 
       $neighborhood = Neighborhood::withTrashed()->where('id', '=', $id)->first();
 
       //Restauramos el registro
       $neighborhood->restore();
 
       return redirect('neighborhoods')->with('restored' , $id );
   	}

   	public function search(Request $request)
	{

		$neighborhoods = Neighborhood::where('name','like','%'.$request->name.'%')
					     ->orWhere('description','like','%'.$request->name.'%')
					     ->paginate(5);
        
        return View('neighborhoods.index', compact('neighborhoods'));

	}
}
