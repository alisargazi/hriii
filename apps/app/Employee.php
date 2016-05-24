<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';
    
    public function scopeCheckUser($query,$username,$password){
        
        $result = $query->where('em_number',$username)
    			->where('em_password',$password)->first();
        if($result==NULL){
            $result='ไม่ผ่าน';
            return $result;
        }else{
            return $result;
        }   
    }
    /*public function scopSel_file($query,$id){
        
        $result = $query->where($id)->addSelect('em_file')->first();
        
        return $result;
    }*/
    
    public function scopeSel_em_id($query,$id){
        
        $result = $query->where('em_id',$id)->first();
        
        return $result;
        
    }
    
    public function scopeSel_em_list($query){
        
        $result = $query->addSelect('em_id','em_number','em_name','em_tel','em_mail')->get();
        
        return $result;
    }
    
    public function scopeSel_photo_em($query,$id){
        
        $result = $query->where('em_id',$id)->addSelect('em_file')->first();
        
        return $result;
    }
    
    public function scopeUpdate_photo_em($query,$id,$file){
        $result = $query->where('em_id',$id)->update('em_file',$file);
        
        return $result;
    }

    public function  scopeIns_em($query,$data){
        //return $data;
        $result = $query->insert($data);
        
        return $result;    
    }
    
    public function scopeUpdate_em_id($query,$id,$data){
        
        $result = $query->where('em_id',$id)->update($data);
        
        return $result;
        
    }
    
    public function scopeDelete_em_id($query,$id){
        $result = $query->where('em_id',$id)->delete();
    }
    
    
}
