<?php

namespace HealthOverHead;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\permission\ServerOperator;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\entity\EntityDamageEvent;

//Coded by CookieCode.

class Main extends PluginBase implements Listener{
  
    public function onEnable(){
        $this->getLogger()->info(TextFormat::BLUE . "HealthOverHead coded by CookieCode enabled.");
		    $this->getServer()->getPluginManager()->registerEvents($this,$this);
	    	$this->getServer()->getScheduler()->scheduleRepeatingTask(new Funcion($this),10);
    }
    
    public function onDisable(){
        $this->getLogger()->info(TextFormat::BLUE . "HealthOverHead disabled.");
    }
	
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){
 
            case "aquaticmc":

$sender->sendMessage(TextFormat::YELLOW."===============[+]===============");
$sender->sendMessage(TextFormat::GREEN."AquaticMC");
$sender->sendMessage(TextFormat::RED."Owned By: ZarkysMC , EmeraldAssasinYT");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."AquaticMC Is a Minecraft Server Network");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."Designed to be built stronger & more");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."of an Adventurous Server Network than");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."any other network ever created.");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."AquaticMC Is Developed & Owned by");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."Highly Experienced Programmers & Coders");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."For More Player Experience & Enjoyment!");
$sender->sendMessage(TextFormat::GREEN."What is This Server Here?");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."This Server is KitPvP / Survival / Clans!");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."Make a Base for your clan , kill players");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."recieve epic , rewards , custom enchants ,");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."and more , alll from killing another player");
$sender->sendMessage(TextFormat::LIGHT_PURPLE."top Clans Recieve Rewards Aswell!");
$sender->sendMessage(TextFormat::YELLOW."===============[+]===============");


return true;

}
}
}
