<?php

namespace qlixes\EnvayaSMS;

use qlixes\EnvayaSMS\EnvayaSMS_Event;

/*
 * Appends a message to the app log.
 */
class EnvayaSMS_Event_Log extends EnvayaSMS_Event
{
    public $message;

    function __construct($message)
    {
        $this->event = EnvayaSMS::EVENT_LOG;
        $this->message = $message;
    }
}
