<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RModel extends Model
{
    use HasFactory;

    protected $primarykey = "id";
    public $timestamps = true; //created_at e update_at
    public $incremeting = true;
    protected $fillable =[];

    public function befareSave(){
        return true;
    }

    public function save(array $options = []){
        try{

            if(!$this->befareSave()){
                return false;
            }

            return parent::save($options);
        }catch(\Exeption $e){
            throw new \Exeption($e->getMessage());
        }
    }
}
