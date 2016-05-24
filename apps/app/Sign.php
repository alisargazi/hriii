<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    //
    protected $table = 'sign';
    
    public function  scopeIns_sing($query,$data){
       
        $result = $query->insert($data);
        
        return $result;    
    }
    
    public function scopeDelete_sign_cusId($query,$id){
        $result = $query->where('customer_id',$id)->delete();
    }
    
}
