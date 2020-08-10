<?php

namespace App\Notifications;

use App\Traits\SmtpSettings;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendResume extends Notification
{
    use Queueable, SmtpSettings;

    private $name, $email, $notes, $file;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name, $email, $notes, $file)
    {
        $this->name = $name;
        $this->email = $email;
        $this->notes = $notes;
        $this->file = $file;

        $this->setMailConfigs();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Resume Reviews')
            ->greeting(__('email.hello').' ' . ucwords($notifiable->full_name) . '!')
            ->line('Here is resume information that need to be reviewed:')
            ->line('Name : '.$this->name)
            ->line('Email : '.$this->email)
            ->line('Notes : ')
            ->line($this->notes)
            ->line(__('email.thankyouNote'))
            ->attach('/user-uploads/resumes/'.$this->file, [
                'as' => 'resume.pdf',
                'mime' => 'application/pdf'
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
