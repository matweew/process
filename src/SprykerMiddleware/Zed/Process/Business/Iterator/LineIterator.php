<?php

namespace SprykerMiddleware\Zed\Process\Business\Iterator;

use SplFileObject;

class LineIterator extends AbstractFileContentIterator
{
    /**
     * @return void
     */
    protected function initIterator()
    {
        $this->iterator = new SplFileObject($this->fileName, 'r');
        $this->iterator->setFlags(SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);
    }

    /**
     * @param string $current
     *
     * @return array
     */
    protected function parseCurrentAsArray($current): array
    {
        return [$current];
    }
}
