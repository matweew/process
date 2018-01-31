<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerMiddleware\Zed\Process\Communication\Plugin\TranslatorFunction;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\TranslatorFunction\TranslatorFunctionPluginInterface;

/**
 * @method \SprykerMiddleware\Zed\Process\Communication\ProcessCommunicationFactory getFactory()
 */
abstract class AbstractTranslatorFunctionPlugin extends AbstractPlugin implements TranslatorFunctionPluginInterface
{
    /**
     * @return string
     */
    abstract public function getName();

    /**
     * @return string
     */
    abstract public function getTranslatorFunctionClassName();

    /**
     * @param mixed $value
     * @param array $payload
     * @param string $key
     * @param array $options
     *
     * @return mixed
     */
    public function translate($value, array $payload, string $key, array $options)
    {
        $translatorFunction = $this->getFactory()
            ->createTranslatorFunctionFactory()
            ->createTranslatorFunction($this->getTranslatorFunctionClassName());
        $translatorFunction->setKey($key);
        $translatorFunction->setOptions($options);

        return $translatorFunction->translate($value, $payload);
    }
}
