<?php

class SpeedSensor {
    public function checkSpeed(float $speed): string{
        if ($speed<=0 || $speed>300){
            return "Unexpected speed";
        }
        if ($speed<30){
            return "Slow Speed";
        }
        if ($speed<=60){
            return "Appropiate Speed";
        }
        if ($speed<=80){
            return "Slight Speeding";
        }
        if ($speed<=100){
            return "Moderate Speeding";
        }
        return "Serious Speeding";
    }
    
}