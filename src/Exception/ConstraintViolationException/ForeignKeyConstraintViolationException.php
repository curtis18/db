<?php

declare(strict_types=1);

namespace Brick\Db\Exception\ConstraintViolationException;

use Brick\Db\Exception\ConstraintViolationException;

/**
 * A foreign key constraint failed.
 */
class ForeignKeyConstraintViolationException extends ConstraintViolationException
{
}
