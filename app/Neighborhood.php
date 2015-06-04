<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Neighborhood extends Model {

	use SoftDeletes;

	protected $table = 'neighborhoods';

  	protected $fillable = ['name', 
  						   'description'];

  	protected $guarded = ['id'];

	protected $dates = ['deleted_at'];

	public $timestamps= true;

}
