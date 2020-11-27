<?php

namespace BridgePattern\NonDependentClasses;

Interface ResourceInterface
{
    public function snippets(): string;
    public function imageUrl(): string;
}