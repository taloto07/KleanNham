<?php

namespace App\CustomValidators;

use Carbon\Carbon;

class HourBeforeValidator extends HourValidator{
    
    public function validate($attribute, $value, $parameters, $validator){

        if ($this->isClose($value) || $this->isClose($parameters[0])) return true;

    	$thisHour = $this->getHour($value);
        $otherHour = $this->getHour($parameters[0]);

        $thisHour = Carbon::createFromTime($thisHour[0], $thisHour[1]);
        $otherHour = Carbon::createFromTime($otherHour[0], $otherHour[1]);

        return $thisHour->lt($otherHour);
	}

}