<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;
use Rector\Core\ValueObject\PhpVersion;


return static function (RectorConfig $rectorConfig): void {
	$rectorConfig->rule(TypedPropertyFromStrictConstructorRector::class);
	$rectorConfig->paths([
		__DIR__ . '/src',
		__DIR__ . '/tests',
	]);

	$rectorConfig->phpVersion(PhpVersion::PHP_81);
	$rectorConfig->importNames();
	$rectorConfig->sets([
		SetList::ACTION_INJECTION_TO_CONSTRUCTOR_INJECTION,
		SetList::CODE_QUALITY,
		SetList::CODING_STYLE,
		SetList::DEAD_CODE,
		SetList::PHP_81,
	]);
};