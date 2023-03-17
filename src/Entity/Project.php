<?php

declare(strict_types=1);

namespace Lukas\PhpstanBug\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Lukas\PhpstanBug\Enum\Status;
use Symfony\Component\Uid\UuidV4;

#[Entity]
class Project
{
	#[Id]
	#[Column(type: 'uuid', unique: true, nullable: false)]
	private UuidV4 $id;

	#[Column(type: Types::STRING, length: 255, enumType: Status::class, options: [
		'default' => Status::ACTIVE,
	])]
	private Status $status;

	public function __construct(UuidV4 $id, Status $status)
	{
		$this->id = $id;
		$this->status = $status;
	}

	public function getId(): UuidV4
	{
		return $this->id;
	}

	public function getStatus(): Status
	{
		return $this->status;
	}

}