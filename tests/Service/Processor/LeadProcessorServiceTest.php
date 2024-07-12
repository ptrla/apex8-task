<?php

namespace App\Tests\Service\Processor;

use App\Entity\Lead;
use App\Service\Processor\LeadProcessorService;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class LeadProcessorServiceTest extends TestCase
{
    private EntityManagerInterface $entityManager;
    private LeadProcessorService $leadProcessor;

    protected function setUp(): void
    {
        $this->entityManager = $this->createMock(EntityManagerInterface::class);
        $this->leadProcessor = new LeadProcessorService($this->entityManager);
    }

    public function testProcessWithScrapLead(): void
    {
        $lead = $this->createMock(Lead::class);
        $lead->method('getFuel')->willReturn(Lead::TYPE_FUEL_DIESEL);
        $lead->method('getDate')->willReturn('2005');

        $lead->expects($this->once())->method('setIsScrap')->with($this->equalTo(true));

        $this->entityManager->expects($this->once())->method('persist')->with($lead);
        $this->entityManager->expects($this->once())->method('flush');

        $this->leadProcessor->process($lead);
    }

    public function testProcessWithNonScrapLead(): void
    {
        $lead = $this->createMock(Lead::class);
        $lead->method('getFuel')->willReturn(Lead::TYPE_FUEL_DIESEL);
        $lead->method('getDate')->willReturn('2011');

        $lead->expects($this->once())->method('setIsScrap')->with($this->equalTo(false));

        $this->entityManager->expects($this->once())->method('persist')->with($lead);
        $this->entityManager->expects($this->once())->method('flush');

        $this->leadProcessor->process($lead);
    }
}
