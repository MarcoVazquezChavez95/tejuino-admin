<?php

namespace Tejuino\Admin\Traits;

trait HasHistory
{
    /** BOOT */

    protected static function boot()
    {
        parent::boot();

        static::created(function($entity){
            $entity->saveCreatedBy();
        });

        static::updated(function($entity){
            $entity->saveUpdatedBy();
        });

        static::deleted(function($entity){
            $entity->saveDeletedBy();
        });
    }


    /** CLASS METHODS */

    public function getModifierAttribute()
    {
        return $this->updated_by ?: $this->created_by;
    }

    protected function saveCreatedBy()
    {
        if (auth()->check()) {
            $this->created_by_user_id = auth()->user()->id;
            $this->unsetEventDispatcher();
            $this->save(['timestamps' => false]);
        }
    }

    protected function saveUpdatedBy()
    {
        if (auth()->check()) {
            $this->updated_by_user_id = auth()->user()->id;
            $this->unsetEventDispatcher();
            $this->save(['timestamps' => false]);
        }
    }

    protected function saveDeletedBy()
    {
        if (auth()->check()) {
            $this->deleted_by_user_id = auth()->user()->id;
            $this->unsetEventDispatcher();
            $this->save(['timestamps' => false]);
        }
    }


    /** RELATIONSHIPS */


    public function created_by()
    {
        return $this->belongsTo(\App\Models\Users\User::class, 'created_by_user_id', 'id');
    }

    public function updated_by()
    {
        return $this->belongsTo(\App\Models\Users\User::class, 'updated_by_user_id', 'id');
    }

    public function deleted_by()
    {
        return $this->belongsTo(\App\Models\Users\User::class, 'deleted_by_user_id', 'id');
    }

}
