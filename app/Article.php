<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['title','content','published_at','user_id'];

    protected $dates = ['published_at']; // 将设置的字段作为Carbon对象进行处理，
    //可以使用Carbon对象的方法，有 year成员变量 表示年份
    //，有diffForHumans()距离现在多少小时


    public function setPublishedAtAttribute($date)
    {
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    public function  scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
