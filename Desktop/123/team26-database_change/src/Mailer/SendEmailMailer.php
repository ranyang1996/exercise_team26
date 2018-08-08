<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * SendEmail mailer.
 */
class SendEmailMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'SendEmail';

    /*public function sendEmail(array $data)
    {
        $this->from('hjkir1@student.monash.edu')
            ->subject('Reset Password')
            ->to($data[0])
            ->template('default','default')
            ->viewVars(['email'=> $data[0]]);
    }*/

    public function forgotPasswordEmail(array $emaildata)
    {
        $this
            ->subject('Mindfulness 4 Life: Reset Password')
            ->to($emaildata[0])
            ->template('default','default')
            ->viewVars(['email'=> $emaildata[1]]);
    }
}
