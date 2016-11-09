<?php namespace Anomaly\MailChannelExtension\Command;

use Anomaly\ConfigurationModule\Configuration\Contract\ConfigurationRepositoryInterface;
use Anomaly\MailChannelExtension\MailChannelExtension;

class GetRecipient
{

    /**
     * The channel instance.
     *
     * @var MailChannelExtension
     */
    protected $channel;

    /**
     * Create a new GetWebhookUrl instance.
     *
     * @param MailChannelExtension $channel
     */
    public function __construct(MailChannelExtension $channel)
    {
        $this->channel = $channel;
    }

    /**
     * Handle the command.
     *
     * @param ConfigurationRepositoryInterface $configuration
     */
    public function handle(ConfigurationRepositoryInterface $configuration)
    {
        return $configuration->value(
            $this->channel->getNamespace('email'),
            $this->channel->getSubscriptionId()
        );
    }
}
