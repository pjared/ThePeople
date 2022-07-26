<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidateBallotAssigned extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $ballot_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ballot_name)
    {
        $this->afterCommit();
        $this->ballot_name = $ballot_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.ballot-assigned')
                            ->with('ballot_name', $this->ballot_name);
    }
}
