<?php namespace Anomaly\MailChannelExtension;

use Anomaly\MailChannelExtension\Command\GetRecipient;
use Anomaly\NotificationsModule\Channel\ChannelExtension;

/**
 * Class MailChannelExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MailChannelExtension extends ChannelExtension
{

    /**
     * This extension provides the mail
     * channel for the notifications module.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.notifications::channel.mail';

    /**
     * The channel driver.
     *
     * @var string
     */
    protected $driver = 'mail';

    /**
     * Return the notification
     * route information.
     *
     * @return mixed
     */
    public function route()
    {
        return $this->dispatch(new GetRecipient($this));
    }
}
