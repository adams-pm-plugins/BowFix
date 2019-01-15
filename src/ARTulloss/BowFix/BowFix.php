<?php
declare(strict_types = 1);
namespace ARTulloss\BowFix;

use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\plugin\PluginBase;

use ARTulloss\BowFix\Item\Bow;

/**
 * Class BowFix
 * @package ARTulloss\BowFix
 */
class BowFix extends PluginBase
{
    public function onEnable()
    {
        ItemFactory::registerItem(new Bow(Item::BOW), true);
    }
}