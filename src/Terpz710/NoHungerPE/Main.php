<?php

namespace Terpz710\NoHungerPE;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onExhaust(PlayerExhaustEvent $event)
    {
        $event->cancel();
    }
}