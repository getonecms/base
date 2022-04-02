<?php

declare(strict_types=1);

namespace OneCMS\Base\Domain\Model\Exception;

use OneCMS\Base\Domain\Service\Validation\ValidationFailedException;

/**
 * Class InvalidEmailAddressException
 *
 * @package getonecms/base
 * @version 0.0.1
 * @since   0.0.1
 * @author  Mohammed Shifreen
 */
final class InvalidEmailAddressException extends ValidationFailedException
{
    /**
     * Undocumented function
     */
    public function __construct(string $messageKey = 'invalid_email', array $params = [])
    {
        parent::__construct($messageKey, $params);
    }
}
