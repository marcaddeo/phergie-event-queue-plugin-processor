<?php

/*
 * This file is part of the phergie-event-queue-plugin-processor package.
 *
 * (c) Marc Addeo <marcaddeo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Madd\Phergie\PluginProcessor;

use Phergie\Irc\Bot\React\EventQueueInterface;

/**
 * EventQueueAwareInterface should be implemented by plugins that depend on the
 * EventQueue
 *
 * @author Marc Addeo <marcaddeo@gmail.com>
 */
interface EventQueueAwareInterface
{
    /**
     * Sets the Event Queue
     *
     * @param EventQueueInterface $queue An EventQueueInterface instance
     * @access public
     * @return void
     */
    public function setEventQueue(EventQueueInterface $queue);
}
