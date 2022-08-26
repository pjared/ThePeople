<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailBallotToUser extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $ballot_list;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ballot_list)
    {
        $this->ballot_list = $ballot_list;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.email-user-ballot', [
            'ballot_list' => $this->ballot_list,
        ])
        ->subject('Your Ballot');
        // return $this->view('emails.email-user-ballot')
        //                 ->with('ballot_list', $this->ballot_list);
    }
}
