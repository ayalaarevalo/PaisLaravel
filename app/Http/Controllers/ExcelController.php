<?php  namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Neighborhood;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;

class ExcelController extends Controller
{

	public function index($neighborhood_id)
	{
		
		$members = Member::neighborhood($neighborhood_id)->get();

		\Excel::create('Filename', function($excel) use ($members)
		{

		   $excel->sheet('Sheetname', function($sheet) use ($members)
		   {
				
				$data = [];

				// Font family
				$sheet->setFontFamily('Comic Sans MS');

				// Set font with ->setStyle()`
				$sheet->setStyle(array(
				    'font' => array(
				        'name'      =>  'Calibri',
				        'size'      =>  12,
				        'bold'      =>  false
				    )
				));
		   		
		   		array_push($data, array('Barrio', 'Nombre', 'Apellido', 'Cedula', 'Celular', 'Convencional', 'Firma'));

		   		foreach ($members as $key => $member)
		   		{
		   			array_push(
		   				$data, 
		   				array(	$member->neighborhood->name, 
		   					  	$member->name, 
		   				      	$member->surname, 
		   				      	$member->document, 
		   				      	$member->celullar, 
		   				      	$member->phone
		   				)
		   			);
		   		}

		   		
		   		
		   		$sheet->fromArray($data, null, 'A1', false, false);
		   });

		})->download('xlsx');
	}

}
