<?php

namespace App\Service\Processor;

use App\Entity\Lead;
use Doctrine\ORM\EntityManagerInterface;

class LeadProcessorService implements ProcessorInterface
{
    public function __construct(
        public EntityManagerInterface $entityManager
    ){}

    public function process(Lead $lead): void
    {
        $lead->setIsScrap($this->isScrap($lead));

        $this->entityManager->persist($lead);
        $this->entityManager->flush();
    }

    private function isScrap(Lead $lead): bool
    {
        // Determines if a lead should be classified as scrap based on its fuel type and year.
        return $lead->getFuel() === Lead::TYPE_FUEL_DIESEL && $lead->getDate() < '2010';
    }
}