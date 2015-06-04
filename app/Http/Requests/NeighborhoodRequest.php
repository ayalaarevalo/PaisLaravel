<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NeighborhoodRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{

		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [

			'name' => 'required|min:5',
			'description' => 'required|min:2'
			
		];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'El campo es requerido!',
	        'name.min' => 'El campo no puede tener menos de 5 carácteres',			
			'description.required' => 'El campo es requerido!',
	        'description.min' => 'El campo no puede tener menos de 2 carácteres',
			
	    ];
	}
}
