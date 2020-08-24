<?php

namespace Spaceemotion\LaravelSparkPostOptions;

use Vemcogroup\SparkPostDriver\Transport\SparkPostTransport;
use Swift_Mime_SimpleMessage;

class SparkpostConfigSixTransportUsingVemco extends SparkPostTransport
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
