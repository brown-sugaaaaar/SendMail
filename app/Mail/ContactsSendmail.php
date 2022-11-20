<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactsSendmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $subject;
    public $inquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $inputs )
    {
        $this->email = $inputs['email'];
        $this->title = $inputs['name'];
        $this->subject = $inputs['subject'];
        $this->inquiry = $inputs['inquiry'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->from('example@gmail.com')
                ->subject('自動送信メール')
                ->view('contact.mail')
                ->with([
                    'email' => $this->email,
                    'name' => $this->name,
                    'subject' => $this->subject,
                    'inquiry' => $this->inquiry,
                    ]);
    }
}
