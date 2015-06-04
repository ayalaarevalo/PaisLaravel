<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Neighborhood;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{

		$this->middleware('auth', ['except' => 'index']);

	}

	public function index(Request $request)
	{

		$neighborhoods = Neighborhood::all()->lists('name', 'id');
		
		$members = Member::name($request->get('name'))->neighborhood($request->get('neighborhood_id'))->paginate();

		return View('members.index', compact('members', 'neighborhoods'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$neighborhoods = Neighborhood::all()->lists('name', 'id');

		return View('members.createUpdate', compact('neighborhoods'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MemberRequest $request)
	{
		
		Member::create($request->all());

		return redirect('members');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Member $member)
	{
		
		return View('members.show',compact('member'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Member $member)
	{
		$neighborhoods = Neighborhood::all()->lists('name', 'id');

		return View('members.createUpdate', compact('member', 'neighborhoods'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Member $member, MemberRequest $request)
	{
		
		$member->update($request->all());		

		return redirect('members');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$member = Member::find($id);

		$member->delete();

		return redirect('members')->with('deleted', $id);
	}

	public function restore($id)
   	{
       //Indicamos que la busqueda se haga en los registros eliminados con withTrashed
 
       $member = Member::withTrashed()->where('id', '=', $id)->first();
 
       //Restauramos el registro
       $member->restore();
 
       return redirect('members')->with('restored' , $id );
   	}
   	public function search(Request $request)
	{

		$members = Member::where('name','like','%'.$request->name.'%')
					     ->orWhere('surname','like','%'.$request->name.'%')
					     ->orWhere('document','like','%'.$request->name.'%')
					     ->orWhere('celullar','like','%'.$request->name.'%')
					     ->orWhere('phone','like','%'.$request->name.'%')
					     ->paginate(5);
        
        return View('members.index', compact('members'));

	}

}
