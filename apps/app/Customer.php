<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
     protected $table = 'customer';
     
     public function scopeSel_cus_id($query,$id){
        
        $result = $query->where('customer_id',$id)->first();
        
        return $result;
        
    }
    
    public function scopeSel_cus_list($query){
        
        $result = $query->addSelect('customer_id','customer_name','customer_status','customer_tel','customer_mail','customer_level')->get();
        
        return $result;
    }
    
    public function scopeSel_cus_name($query,$name){
        
         $result = $query->where('customer_name',$name)->addSelect('customer_id')->first();
        
        return $result;
    }


    public function  scopeIns_cus($query,$data){
        //return $data;
        $result = $query->insert($data);
        
        return $result;    
    }
    
    public function scopeUpdate_cus_id($query,$id,$data){
        
        $result = $query->where('customer_id',$id)->update($data);
        
        return $result;
        
    }
    
    public function scopeDelete_cus_id($query,$id){
        $result = $query->where('customer_id',$id)->delete();
    }
}
