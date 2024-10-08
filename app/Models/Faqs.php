<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    protected $guarded = [];
    protected $fillable = ['faq_id','faq_question','faq_answer','prog_id','cd_id','display_university_main','display_college_main','display_programme_page','status'];
    public function programme_name(){
        return $this->belongsTo(Programmes::class,'prog_id','prog_id');
    }

    
    public function college_name(){
        return $this->belongsTo(Colleges::class,'cd_id','cd_id');
    }
}
