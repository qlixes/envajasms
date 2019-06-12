<?php

namespace qlixes\EnvayaSMS;

/*
 * An 'action' is the term for a HTTP request that app sends to the server.
 */

class EnvayaSMS_Action
{
    public $type;
    public $request;

    function __construct($request)
    {
        $this->request = $request;
    }
}
