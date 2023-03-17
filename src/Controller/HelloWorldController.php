<?php

declare(strict_types=1);

namespace Lukas\PhpstanBug\Controller;

use Exception;
use Lukas\PhpstanBug\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Uid\Uuid;

final class HelloWorldController extends AbstractController
{


	private readonly ProjectRepository $projectRepository;

	public function __construct(ProjectRepository $projectRepository)
	{
		$this->projectRepository = $projectRepository;
	}


	/**
	 * @throws Exception
	 */
	#[Route('/hello/world', name: 'app_hello_world')]
	public function index(): JsonResponse
	{
		$this->projectRepository->findActiveByUuid(Uuid::v4());
		return $this->json([
			'message' => 'Welcome to your new controller!',
			'path' => 'src/Controller/HelloWorldController.php',
		]);
	}
}
