<?php

namespace App\Service\Processor;

use App\Entity\Lead;

interface ProcessorInterface
{
    public function process(Lead $lead): void;
}
