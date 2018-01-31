<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerMiddleware\Zed\Process\Business\Translator\TranslatorFunction;

class StringToFloat extends AbstractTranslatorFunction implements TranslatorFunctionInterface
{
    /**
     * @param string $value
     * @param array $payload
     *
     * @return float
     */
    public function translate($value, array $payload)
    {
        return (float)$value;
    }
}
