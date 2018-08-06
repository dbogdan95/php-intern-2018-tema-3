<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id', 'name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

	public function Company()
	{
		return $this->hasOne('App\Company', 'id', 'company_id');
	}
}