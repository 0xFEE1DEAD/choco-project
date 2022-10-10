<?php
namespace App\Http\Controllers\Bot;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Cache\LaravelCache;
  
class BotManController extends Controller
{
    public function handle()
    {
        DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);
        DriverManager::loadDriver(\BotMan\Drivers\VK\VkCommunityCallbackDriver::class);
        $botman = BotManFactory::create(config('botman'), new LaravelCache());
  
        $botman->on('confirmation', function($payload, $bot){
            echo('f8ed7a0f');
        });

        $botman->hears('help', function($botman) {
            $botman->startConversation(new BotManStart);
        });
  
        $botman->listen();
    }
}

class BotManStart extends Conversation
{
    public function run()
    {
        $this->selectHelpQuery();
    }

    public function selectHelpQuery()
    {
        $question = Question::create("How can i help you, would you like to know about the following: ")
            ->fallback("Unable to help at this time, please try again later")
            ->callbackId("choose_query")
            ->addButtons([
                Button::create("Button 1")->value("button1"),
                Button::create("Button 2")->value("button2"),
            ]);
        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                switch ($answer->getValue()) {
                    case "button1":
                        $this->bot->startConversation(new BotManConversation1());
                        break;
                    case "button2":
                        $this->bot->startConversation(new BotManConversation2());
                        break;
                }
            }
        });
    }
}

class BotManConversation1 extends Conversation
{
    public function run()
    {
        $this->say($this->bot->getName());
    }
}

class BotManConversation2 extends Conversation
{
    public function run()
    {
        $this->say('2');
    }
}