<?php

namespace Spaceemotion\LaravelSparkPostOptions;

use Illuminate\Mail\Transport\SparkPostTransport;
use Swift_Mime_SimpleMessage;

class SparkpostConfigTransport extends SparkPostTransport
{
    use ConfigurableTransport;

    /**
     * {@inheritdoc}
     */
    public function send(Swift_Mime_SimpleMessage $message, &$failedRecipients = null)
    {
        $this->sendWithOptions($message, function () use ($message, &$failedRecipients) {
            return parent::send($message, $failedRecipients);
        });
    }
}
