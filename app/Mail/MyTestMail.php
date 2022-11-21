<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;
 
    public function __construct($email)
    {
        $this->email = $email;
    }
    public function build()
    {
        return $this
            ->subject('Thank you for subscribing to our newsletter')
            ->markdown('mailfb');
    }
}