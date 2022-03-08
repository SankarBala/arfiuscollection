<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $sender;
    public $subject;
    public $messages;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->name = $request['name'];
        $this->sender = $request['email'];
        $this->subject = $request['subject'];
        $this->messages = $request['message'];
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->sender)->subject($this->subject)->view('mails.contact-request')->with([
            'name' => $this->name,
            'message' => $this->messages,
        ]);
    }
}
