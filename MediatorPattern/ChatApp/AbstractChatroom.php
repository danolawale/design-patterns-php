<?php

namespace MediatorPattern\ChatApp;

abstract class AbstractChatroom
{
    abstract public function register(AbstractTeamMember $member);
    abstract public function send(string $from, string $message);
    abstract public function sendTo(string $from, string $group, string $message);
}