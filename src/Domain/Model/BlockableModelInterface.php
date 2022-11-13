<?php
/**
 * The file is part of the "getonecms/ext-base", OneCMS extension package.
 *
 * @see https://getonecms.com/extension/base
 *
 * @license Copyright (c) 2022 OneCMS
 * @license https://getonecms.com/extension/base/license
 * @author Mohammed Shifreen <mshifreen@gmail.com>
 */

declare(strict_types=1);

namespace OneCMS\Base\Domain\Model;

/**
 * An interface that is used to check if the object is blocked and returns the blocked at datetime
 * as object or string for the given format.
 *
 * @todo Maybe the name of class should change because no word "blockable"
 */
interface BlockableModelInterface
{
	/**
	 * If it is blocked returns true, otherwise false.
	 */
	public function isBlocked(): bool;

	/**
	 * Returns the blocked at datetime string for the given or default format.
	 *
	 * @param null|string $format if the format is null will be use default format
	 */
	public function getBlockedAt(?string $format = null): ?string;
}
