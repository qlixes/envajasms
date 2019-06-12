<?php

namespace qlixes\EnvayaSMS;

namespace qlixes\EnvayaSMS\EnvayaSMS_Event;

/*
 * Instruct the phone to send one or more outgoing messages (SMS or USSD)
 */
class EnvayaSMS_Event_Send extends EnvayaSMS_Event
{
    public $messages;

    function __construct($messages /* array of EnvayaSMS_OutgoingMessage objects */)
    {
        $this->event = EnvayaSMS::EVENT_SEND;
        $this->messages = $messages;
    }
}
