<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FleetsuLib
{

    public static function uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0x0fff ) | 0x4000,
            mt_rand( 0, 0x3fff ) | 0x8000,
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

    public static function formatDateTime($dateTime, $timeZone) {
        $dt = new \DateTime($dateTime);
        $tz = new \DateTimeZone($timeZone);
        $dt->setTimezone($tz);
        return $dt->format('Y-m-d H:i:s');
    }
}
