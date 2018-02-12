<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerMiddleware\Zed\Process\Communication\Plugin;

use SprykerMiddleware\Shared\Process\Stream\ReadStreamInterface;
use SprykerMiddleware\Shared\Process\Stream\WriteStreamInterface;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\StagePluginInterface;

/**
 * @method \SprykerMiddleware\Zed\Process\Business\ProcessFacadeInterface getFacade()
 * @method \SprykerMiddleware\Zed\Process\Communication\ProcessCommunicationFactory getFactory()
 */
class StreamWriterStagePlugin extends AbstractStagePlugin implements StagePluginInterface
{
    /**
     * @inheritdoc
     */
    public function process($payload, ReadStreamInterface $inStream, WriteStreamInterface $outStream, $originalPayload)
    {
        $this->getFactory()
            ->getProcessService()
            ->write($outStream, $payload);

        return $payload;
    }
}
