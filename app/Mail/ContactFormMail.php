<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
  use Queueable, SerializesModels;

  public $contactData;

  public function __construct($contactData)
  {
    $this->contactData = $contactData;
  }

  public function build()
  {
    return $this->subject('Yêu cầu tư vấn mới từ website')
      ->view('emails.contact-form')
      ->with('data', $this->contactData);
  }
}