<?php

namespace Notion\Records\Blocks;

class BulletedListBlock extends BasicBlock
{
    const BLOCK_TYPE = 'bulleted_list';

    public function toString()
    {
        return '* '.parent::toString();
    }
}
