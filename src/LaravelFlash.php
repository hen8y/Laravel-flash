<?php

namespace Hen8y\Flash;

use Illuminate\Session\Store;

class LaravelFlash
{
    protected Store $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function put(string $type, string $message): void
    {
        $data = array(
            "type" => $type,
            "message" => $message
        );
        $this->session->put('flash', $data);
    }
}
