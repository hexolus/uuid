<?php 

namespace Hexolus\Uuid\Traits;

use Hexolus\Uuid\Uuid as Uuid;

trait HasUuid {
    public static function bootHasUuid() {
        self::creating(function($model){
            if(!$model->{$model->getUuidKey()}) {
                $model->{$model->getUuidKey()} = $model->generateUuid();
            }
        });
    }

    public function getUuidKey() {
        return config('uuid.key');
    }

    public function generateUuid() {
        return Uuid::generate();
    }
}