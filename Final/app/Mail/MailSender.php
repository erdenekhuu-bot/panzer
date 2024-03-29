<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function temperture(){
        $res=Http::get('https://api.openweathermap.org/data/2.5/weather',[
            'q'=>'Ulaanbaatar',
            'units' => 'metric',
            'appid'=>'4883129c8d0f75ef7e7e2e0df29d7dbe'
        ]);
        return json_decode($res,true);
    }
    public function __construct(public $name)
    {
        $this->name=$name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->name,null),
            subject: 'Startup user invite',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'pages.company.page4',
            with: ['temperature'=>$this->temperture()['main']['temp']]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            
        ];
    }
}
