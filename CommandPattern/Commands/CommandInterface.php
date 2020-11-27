<?php

namespace CommandPattern\Commands;

interface CommandInterface
{
    public function canExecute(): bool;
    public function execute();
    public function undo();
}               