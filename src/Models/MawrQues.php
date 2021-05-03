<?php
namespace Edgewizz\Mawr\Models;

use Illuminate\Database\Eloquent\Model;

class MawrQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Mawr\Models\MawrAns', 'question_id');
    }
    protected $table = 'fmt_mawr_ques';
}