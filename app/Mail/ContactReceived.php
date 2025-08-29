<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public function __construct($data){ $this->data = $data; }
    public function build()
    {
        return $this->subject('New website contact - '.$this->data['name'])
                    ->view('emails.contact_received')
                    ->with(['data'=>$this->data]);
    }
}
