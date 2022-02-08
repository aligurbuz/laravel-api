<?php

declare(strict_types=1);

namespace App\Services;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class SmtpMailer
{
    /**
     * @var PHPMailer
     */
    protected PHPMailer $mail;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->IsSMTP();
        $this->mail->CharSet = 'UTF-8';
        $this->mail->SMTPAuth = true;
        $this->setHost();
        $this->setUsername();
        $this->setPassword();
        $this->mail->isHTML(true);
        $this->setPort();
        $this->mail->setFrom('fromMailAddress','fromMailShortName');
        $this->mail->addReplyTo('replyMailAddress', 'replyMailShortName');
    }

    /**
     * set host for smtp mailer class
     *
     * @param string|null $host
     * @return $this
     */
    public function setHost(?string $host = null) : SmtpMailer
    {
        $this->mail->Host = $host ?? 'asmtp.dandomain.dk';

        return $this;
    }

    /**
     * set username for smtp mailer class
     *
     * @param string|null $username
     * @return $this
     */
    public function setUsername(?string $username = null) : SmtpMailer
    {
        $this->mail->Username = $username ?? 'info@stepfront.dk';

        return $this;
    }

    /**
     * set username for smtp mailer class
     *
     * @param string|null $password
     * @return $this
     */
    public function setPassword(?string $password = null) : SmtpMailer
    {
        $this->mail->Password = $password ?? 'Step2022+';

        return $this;
    }

    /**
     * set port for smtp mailer class
     *
     * @param int|null $port
     * @return $this
     */
    public function setPort(?int $port = null) : SmtpMailer
    {
        $this->mail->Port = $port ?? 587;

        return $this;
    }

    /**
     * set port for smtp mailer class
     *
     * @param string $email
     * @return $this
     * @throws Exception
     */
    public function email(string $email) : SmtpMailer
    {
        $this->mail->addAddress($email);

        return $this;
    }

    /**
     * set subject for smtp mailer class
     *
     * @param string $subject
     * @return $this
     */
    public function subject(string $subject) : SmtpMailer
    {
        $this->mail->Subject = $subject;

        return $this;
    }

    /**
     * set body for smtp mailer class
     *
     * @param string $body
     * @return SmtpMailer
     */
    public function body(string $body) : SmtpMailer
    {
        $this->mail->Body = $body;

        return $this;
    }

    /**
     * set body for smtp mailer class
     *
     * @return void
     * @throws Exception
     */
    public function send() : void
    {
        $this->mail->send();
    }
}
