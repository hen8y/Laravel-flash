<?php

namespace Hen8y\Flash;

use Livewire\Features\SupportEvents\HandlesEvents;
use Illuminate\Session\Store;

class LaravelFlash
{
    use HandlesEvents;

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

    // public function live()
    // {
    //     // $data = [
    //     //     "type" => "error",
    //     //     "message" => "500"
    //     // ];
    //     // $this->session->flash('flash', $data);

    // }
}
