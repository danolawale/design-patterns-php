<?php

namespace MediatorPattern\ChatApp;

require_once('TeamChatroom.php');
require_once('Developer.php');
require_once('Tester.php');

$teamChat = new TeamChatroom;

$steve = new Developer('Steve');
$dan = new Developer('Dan');
$ruby = new Developer('Ruby');

$john = new Tester('John');
$claire = new Tester('Claire');

$teamChat->registerMembers([$steve, $dan, $ruby, $john, $claire]);

$steve->sendTo(Tester::class, "Hey everyone, we are going to be deploying at 2pm today. ");
$claire->sendTo(Developer::class, "Ok, thanks for letting us know");