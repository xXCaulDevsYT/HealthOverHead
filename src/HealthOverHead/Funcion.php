<?php 

namespace HealthOverHead;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Plugin;
use pocketmine\utils\TextFormat;

//Coded by CookieCode.

class Funcion extends PluginTask {

	public function __construct($plugin){
		$this->plugin = $plugin;		
		parent::__construct($plugin); 
	}
	
	public function onRun($tick){
	  foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p){
	    $player = $p;
	    $p->setNameTag(TextFormat::GREEN . $p->getName() . "§c[" . ($player->getHealth() / $player->getMaxHealth() * 20)."]");
          }
     }
}
