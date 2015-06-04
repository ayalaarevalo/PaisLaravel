<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MemberRequest extends Request {

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
			'neighborhood_id' => 'required',
			'name' => 'required|min:5',
			'surname' => 'required|min:5',
			'document' => 'unique:members|required|min:10|max:10',
			'celullar' => 'min:10|max:10',
			'phone' => 'min:7|max:10',
			
		];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'El campo es requerido!',
	        'name.min' => 'El campo no puede tener menos de 5 carácteres',
	        'surname.required' => 'El campo es requerido!',
	        'surname.min' => 'El campo no puede tener menos de 5 carácteres',
			'document.required' => 'El campo es requerido!',
	        'document.min' => 'El campo no puede tener menos de 10 carácteres',
	        'celullar.min' => 'El campo no puede tener menos de 10 carácteres',
			'phone.min' => 'El campo no puede tener menos de 7 carácteres',
	    ];
	}
}

