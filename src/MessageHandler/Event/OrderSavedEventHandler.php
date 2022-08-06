<?php

namespace App\MessageHandler\Event;

use App\Message\Event\OrderSavedEvent;
use Mpdf\Mpdf;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Mime\Email;

class OrderSavedEventHandler implements MessageHandlerInterface
{
    public function __construct(private MailerInterface $mailer)
    {
    }

    public function __invoke(OrderSavedEvent $event)
    {
        // 1. Create a PDF contract note
        $mpdf = new Mpdf();
        $content = "<h1>Contract Note For Order {$event->getOrderId()}</h1>";
        $content .= '<p>Total: <b>$1898.75</b></p>';

        $mpdf->writeHtml($content);
        $contractNotePdf = $mpdf->output('', 'S');

        // 2. Email the contract note to the buyer

        $email = (new Email())
            ->from('sales@stocksapp.com')
            ->to('email@example.tech')
            ->subject('Contract note for order ' . $event->getOrderId())
            ->text('Here is your contract note')
            ->attach($contractNotePdf, 'contract-note.pdf');

        $this->mailer->send($email);
    }
}