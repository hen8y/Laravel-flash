<?php

namespace Hen8y\Flash;

use Illuminate\Session\Store;

class LaravelFlash
{

    protected $session;
    protected $data;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function put($type, $message)
    {
        $this->data = array(
            "type" => $type,
            "message" => $message
        );
        $this->session->flash('flash', $this->data);
        return $this;
    }
}
