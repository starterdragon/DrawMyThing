<?php

namespace MioTaku\DrawMyThing;

use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\level\Level;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\block\Block;

class DrawMyThing extends PluginBase implements Listener {
// REWRITE SOON
	public $words=array("Cookie","Hentai","Neko");
	public function onDisable(){
		
	// CLEAR CONFIG		
	}
	public function onEnable(){
	// START TASKS GAMETASK AND SIGN TASK	
	}
	public function getRandomWord()
        {
        int i = words.size();
        Random r = new Random();
        return (String)words.get(r.nextInt(i));
        }
	public function onCommand(){
	if($cmd==""):
	// ADMIN COMMANDS setcanvaspos1, setcanvaspos2, setspawn, setbuilderspawn, create, delete, setmax, setmin, reload, join, leave, help
	}
	public function StopAllGames(){
	// STOP ALL RUNNING GAMES!	
	}
	public function LoadCOnfig(){
	// LOAD / RELOAD THE CONFIG	
	}
	public function getGameByName($worldname){
	// CODE TO GET A ARENA BY THE WORLDNAME	
	}
	public function addGameItems($player){
	// GIVE $PLAYER THE GAME ITEMS	
	}
	}
