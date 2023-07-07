<?php

namespace tuto;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class Main extends PluginBase implements Listener{

    public function onEnable(): void {
        // Plugin activé
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if ($command->getName() === "healt") {
            if ($sender instanceof Player) {
                $sender->setHealth($sender->getMaxHealth());
                $sender->sendMessage("Votre vie a été rétablie au maximum.");
            } else {
                $sender->sendMessage("Cette commande ne peut être exécutée que par un joueur.");
            }
            return true;
        }
        return false;
    }
    
    public function onDisable(): void {
        // Plugin désactivé
    }
}