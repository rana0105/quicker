<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Customer extends Model
{
	use FilterPaginateOrder;

    protected $fillable = [
    	'name', 'phone', 'email', 'address'
    ];

    protected $filter = [
    	'id', 'name', 'phone', 'email', 'address', 'created_at'
    ];

    public static function initialize(){
    	return [
    		'name' => '', 'phone' => '', 'email' => '', 'address' => ''	
		];
    }

    public function invoices(){
    	return $this->hasMany(Invoice::class);
    }
}
