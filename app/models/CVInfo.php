<?php
class CVInfo extends Eloquent
{

    protected $table = 'personal_info';

   	/**
 	* To return only the value of the current row
 	*
 	*
 	* @return Mixed
 	*/
    public function getValue()
    {
        return $this->value();
    }

    public function scopeKey($query, $key)
    {
        return $query->where('key', '=', $key)->first();
    }

}