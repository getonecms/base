<?php

/**
 * The file is part of the "webifycms/ext-base", WebifyCMS extension package.
 *
 * @see https://webifycms.com/extension/base
 *
 * @copyright (c) 2023 WebifyCMS
 * @license https://webifycms.com/extension/base/license
 * @author Mohammed Shifreen <mshifreen@gmail.com>
 */
declare(strict_types=1);

// should require the composer autoloader on first
require __DIR__ . '/vendor/autoload.php';

use PhpCsFixer\Finder;
use Webify\Tools\Fixer\Fixer;

$finder = Finder::create()
	->in(__DIR__)
	->exclude(
		[
			'vendor',
		]
	)
	->ignoreDotFiles(false)
	->name('*.php')
;

return (new Fixer($finder))
	->getConfig()
	->setUsingCache(false)
;
