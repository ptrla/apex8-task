<?php

namespace App\Controller\Api;

use App\Entity\Lead;
use App\Service\Processor\LeadProcessorService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class LeadController extends AbstractController
{
    #[Route('/lead/process', name: 'app_lead', methods: ['POST'])]
    public function leadProcessAction(
        EntityManagerInterface $em,
        Request $request,
        SerializerInterface $serializer,
        LeadProcessorService $leadProcessorService
    ): JsonResponse
    {
        $lead = $serializer->deserialize($request->getContent(), Lead::class, 'json');
        $leadProcessorService->process($lead);

        return new JsonResponse(
            $serializer->serialize($lead, 'json'),
            Response::HTTP_CREATED,
            [],
            true
        );
    }
}
