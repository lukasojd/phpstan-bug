<?php

declare(strict_types=1);

namespace Lukas\PhpstanBug\Enum;

enum Status: string
{
	case ACTIVE = 'active';
	case INACTIVE = 'inactive';
	case DELETED = 'deleted';
}
