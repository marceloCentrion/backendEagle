<?php

namespace App\Traits;
use illuminate\Support\Str;

trait HasCustomId{

    protected static function bootHasCustomId(){
        static::creating(function($model){
            if(empty($model->{$model->getKeyName()})){
                $model->{$model->getKeyName()} = self::generateCustomId();
            }
        });
    }

    protected static function generateCustomId(): string {
        $timestamp = now()->getTimestampMS();
        $random = Str::lower(Str::random(6));
        return "{$timestamp}X{$random}";
    }

    public function getIncrementing(){
        return false;
    }

    public function getKeyType(){
        return "string";
    }
}