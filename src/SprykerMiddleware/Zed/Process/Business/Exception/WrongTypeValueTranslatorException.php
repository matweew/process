<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerMiddleware\Zed\Process\Business\Exception;

class WrongTypeValueTranslatorException extends TolerableProcessException
{
    /**
     * @param string $className
     * @param string $key
     * @param string $expectedType
     * @param mixed $value
     */
    public function __construct(string $className, string $key, string $expectedType, $value)
    {
        parent::__construct($this->buildMessage($className, $key, $expectedType, $value));
    }

    /**
     * @param string $className
     * @param string $key
     * @param string $expectedType
     * @param mixed $value
     *
     * @return string
     */
    protected function buildMessage(string $className, string $key, string $expectedType, $value): string
    {
        $actualType = is_object($value) ? get_class($value) : gettype($value);
        $message = sprintf('Expected argument of type "%s", "%s" given.', $expectedType, $actualType);
        $message .= sprintf("\nTranslation function: %s\n", $className);
        $message .= sprintf("Key to translate: %s", $key);
        return $message;
    }
}
