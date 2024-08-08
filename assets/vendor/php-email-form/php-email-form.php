<?php
class PHP_Email_Form
{
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $smtp;
    private $messages = array();
    public $ajax;

    public function add_message($message, $field, $max_length = 0)
    {
        $this->messages[] = array('message' => $message, 'field' => $field, 'max_length' => $max_length);
    }

    public function send()
    {
        // Implementasi pengiriman email menggunakan fungsi mail() atau SMTP
        // Ini adalah contoh sederhana, sesuaikan dengan implementasi yang Anda miliki
        $email_body = "";
        foreach ($this->messages as $msg) {
            $email_body .= $msg['field'] . ": " . $msg['message'] . "\n";
        }

        $headers = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";
        if ($this->smtp) {
            // Implementasi SMTP (contoh sederhana, sesuaikan dengan library SMTP yang Anda gunakan)
        } else {
            return mail($this->to, $this->subject, $email_body, $headers);
        }
    }
}
