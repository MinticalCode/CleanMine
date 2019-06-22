<?php
declare(strict_types=1);

namespace Mintical;

use pocketmine\plugin\PluginBase;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\block\Block;
use pocketmine\item\Item;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
  
  public function onEnable(): void{
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onBreak(BlockBreakEvent $event){
    
    switch($event->getBlock()->getId()){
      
      case Block::COAL_ORE:
        $event->setDrops([]);
        if(!$event->getBlock()->isCompatibleWithTool($event->getItem())){
          return false;
        }
        $event->getPlayer()->getInventory()->addItem(Item::get(263, 0, 1));
        return true;
        
      case Block::IRON_ORE:
        $event->setDrops([]);
        if(!$event->getBlock()->isCompatibleWithTool($event->getItem())){
          return false;
        }
        $event->getPlayer()->getInventory()->addItem(Item::get(265, 0, 1));
        return true;
        
      case Block::GOLD_ORE:
        $event->setDrops([]);
        if(!$event->getBlock()->isCompatibleWithTool($event->getItem())){
          return false;
        }
        $event->getPlayer()->getInventory()->addItem(Item::get(266, 0, 1));
        return true;
        
      case Block::DIAMOND_ORE:
        $event->setDrops([]);
        if(!$event->getBlock()->isCompatibleWithTool($event->getItem())){
          return false;
        }
        $event->getPlayer()->getInventory()->addItem(Item::get(264, 0, 1));
        return true;
      
      case Block::LAPIS_ORE:
        $event->setDrops([]);
        if(!$event->getBlock()->isCompatibleWithTool($event->getItem())){
          return false;
        }
        $event->getPlayer()->getInventory()->addItem(Item::get(351, 4, rand(4, 8)));
        return true;
      
      case Block::REDSTONE_ORE:
        $event->setDrops([]);
        if(!$event->getBlock()->isCompatibleWithTool($event->getItem())){
          return false;
        }
        $event->getPlayer()->getInventory()->addItem(Item::get(331, 0, rand(4, 5)));
        return true;
        
      case Block::EMERALD_ORE:
        $event->setDrops([]);
        if(!$event->getBlock()->isCompatibleWithTool($event->getItem())){
          return false;
        }
        $event->getPlayer()->getInventory()->addItem(Item::get(388, 0, 1));
        return true;
    }
    
  }
  
}
