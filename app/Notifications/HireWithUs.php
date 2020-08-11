<?php

namespace App\Notifications;

use App\SmsSetting;
use App\Traits\SmsSettings;
use App\Traits\SmtpSettings;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HireWithUs extends Notification
{
    use Queueable, SmtpSettings;

    private $name, $company, $email, $phone, $notes;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name, $company, $email, $phone, $notes)
    {
        $this->name = $name;
        $this->company = $company;
        $this->email = $email;
        $this->phone = $phone;
        $this->notes = $notes;

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
            ->subject("Company Application")
            ->greeting(__('email.hello').' ' . ucwords($notifiable->name) . '!')
            ->markdown('email.company-join', [
                'url' => url('/login'),
                'buttonText' => __('email.loginDashboard'),

                'name' => $this->name,
                'company' => $this->company,
                'email' => $this->email,
                'phone' => $this->phone,
                'additional' => $this->notes
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
