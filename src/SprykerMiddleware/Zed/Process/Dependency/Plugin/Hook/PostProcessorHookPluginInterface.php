<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerMiddleware\Zed\Process\Dependency\Plugin\Hook;

interface PostProcessorHookPluginInterface
{
    /**
     * @return void
     */
    public function process(): void;
}
