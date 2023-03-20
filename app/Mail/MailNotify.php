<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class MailNotify extends Mailable
{
    use Queueable, SerializesModels;
  
    public $data=[];
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data= $data;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@quickres.ru', 'Prime Bus!')
        ->subject($this->data["subject"])
                    ->view('emails.booking')
                    ->with('itinerary', $this->data['body']['itinerary'])
                    ->with('guests', $this->data['body']['guests'])
                    ->with('date', $this->data['body']['date'])
                    ->with('time', $this->data['body']['time'])
                    ->with('seats', $this->data['body']['seats'])
                    ->with('food', $this->data['body']['food'])
                    ->with('total', $this->data['body']['total']);
    }
}