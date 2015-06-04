<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model {
	
	use SoftDeletes;

	protected $table = 'members';

  	protected $fillable = [
                  'neighborhood_id',
                  'name', 
  						    'surname', 
  						    'document', 
  						    'celullar', 
  						    'phone'];

  protected $guarded = ['id'];

	protected $dates = ['deleted_at'];

	public $timestamps= true;

  public function neighborhood()
  {

    return $this->belongsTo('App\Neighborhood');

  } 

  public function scopeName($query, $name)
  {

    if($name != "")
    {

      $query->where('name','like','%'.$name.'%')
            ->orWhere('surname','like','%'.$name.'%')
            ->orWhere('document','like','%'.$name.'%')
            ->orWhere('celullar','like','%'.$name.'%')
            ->orWhere('phone','like','%'.$name.'%');
    }

  }

  public function scopeNeighborhood($query, $neighborhood)
  {

    if($neighborhood != "" && isset($neighborhood))
    {

      $query->where('neighborhood_id', $neighborhood);
    }

  }

}
