<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use TestObject;

class TestController extends AbstractController
{
    #[Route('/test', name:'app_test')]
    function index(): JsonResponse
    {
        $testObject = new TestObject("Test name", "Something is beeing tested here.");

        return $this->json(
            $testObject,
        );
    }
}
