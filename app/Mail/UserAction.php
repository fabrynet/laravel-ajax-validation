<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $prod;
    public $action;

    public function __construct($user, $prod, $action)
    {
        $this -> user = $user;
        $this -> prod = $prod;
        $this -> action = $action;
    }

    public function build()
    {
      $email = "fabrynet@alice.it";
      return $this  -> from($email)
                    -> view('mail.product');
    }
}
