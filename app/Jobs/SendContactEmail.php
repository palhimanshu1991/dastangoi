<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Mail;

class SendContactEmail
{

    /**
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function handle()
    {

        $data = $this->data;

        Mail::raw('Text to e-mail', function ($message) use ($data) {
            $message->from($data['email'], $data['from']);
            $message->to('himanshu@instaveritas.com');
        });

    }

}