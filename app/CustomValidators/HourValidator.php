<?php

namespace App\CustomValidators;

class HourValidator{
    
    protected function getHour($hour){
        return explode(':', $hour);
    }

    protected function getHourNumber($hour){
        return $this->getHour($hour)[0];
    }

    protected function getMinuteNumber($hour){
        return $this->getHour($hour)[1];
    }

    protected function isClose($hour){
        return $hour === 'close';
    }

    public function validate($attribute, $value, $parameters, $validator){

        if ($this->isClose($value)) return true;

    	$hourMinute = $this->getHour($value);

        if (count($hourMinute) !== 2) return false;

        $hour       = $this->getHourNumber($value);
        $minute     = $this->getMinuteNumber($value);

        if (!is_numeric($hour) || !is_numeric($minute)) return false;

        $hour   = (int)$hour;
        $minute = (int)$minute;

        if ( $hour < 0 || $hour > 24 ) return false;

        if ( $minute !== 0 && $minute !== 30) return false;

        return true;
	}

    public function replacer($message, $attribute, $rule, $parameters){
        return str_replace([':second_hour'], $parameters, $message);
    }
}