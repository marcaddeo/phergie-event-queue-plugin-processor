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

use Phergie\Irc\Bot\React\Bot;
use Phergie\Irc\Bot\React\PluginInterface;
use Phergie\Irc\Bot\React\PluginProcessorInterface;
use Madd\Phergie\PluginProcessor\EventQueueAwareInterface;

/**
 * Plugin processor that injects the plugin with the bot's event queue if
 * possible.
 *
 * @author Marc Addeo <marcaddeo@gmail.com>
 */
class EventQueueInjector implements PluginProcessorInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(PluginInterface $plugin, Bot $bot)
    {
        if ($plugin instanceof EventQueueAwareInterface) {
            $plugin->setEventQueue($bot->getEventQueue());
        }
    }
}
