<?php

declare(strict_types=1);

namespace Lukas\PhpstanBug\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Exception;
use Lukas\PhpstanBug\Entity\Project;
use Lukas\PhpstanBug\Enum\Status;
use Symfony\Component\Uid\UuidV4;

final class ProjectRepository
{
	/**
	 * @var EntityRepository<Project>
	 */
	private readonly EntityRepository $entityRepository;

	public function __construct(
		private readonly EntityManagerInterface $entityManager
	) {
		$this->entityRepository = $this->entityManager->getRepository(Project::class);
	}

	/**
	 * @throws Exception
	 */
	public function findById(string $id): Project
	{
		$project = $this->entityRepository->find($id);

		return $project ?? throw new Exception($id);
	}

	/**
	 * @throws Exception
	 */
	public function findActiveByUuid(UuidV4 $id): Project
	{
		$item = $this->entityRepository->findOneBy([
			'id' => $id,
			'status' => Status::ACTIVE,
		]);

		return $item ?? throw new Exception($id->toRfc4122());
	}


	/**
	 * @return Project[]
	 */
	public function getAllProjects(): array
	{
		/** @var Project[] $projects */
		$projects = $this->entityRepository->createQueryBuilder('project')
			->where('project.status = :status')
			->setParameter('status', Status::ACTIVE)
			->getQuery()
			->execute();

		return $projects;
	}

	protected function getEntityRepository(): EntityRepository
	{
		return $this->entityRepository;
	}

	protected function getEntityManager(): EntityManagerInterface
	{
		return $this->entityManager;
	}
}
