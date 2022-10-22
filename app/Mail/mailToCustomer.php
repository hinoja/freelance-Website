<?php

namespace App\Mail;

use App\Models\Job;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailToCustomer extends Mailable
{
    use Queueable, SerializesModels;

    public $message,$file,$name;
    public $jobInfo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($name,$message,$jobInfo)
    public function __construct(String $name,String $message, String $file,Job $jobInfo)
    {
        $this->message=$message;
        $this->$name=$name;
        $this->$file=$file;
        $this->jobInfo=$jobInfo;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Apply To Customer for job',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.customer.NotificationCustomer',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
                                    //   Attachment::fromPath("/storage/$this->file")
            // attachFromStorage('/path/to/file')
            // /storage/post_image/{{  $post->image }}
            // Attachment::fromStorage("/storage/$this->file),

        ];
    }
}
