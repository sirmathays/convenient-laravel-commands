<?php

namespace SirMathays\Convenience\Relations;

use Illuminate\Database\Eloquent\Relations\MorphOne;

class MorphOneBridge extends RelationBridge
{
    protected static $relationClassName = MorphOne::class;

    protected static $returnsCollection = false;

    public static $stubGroupAffix = 'morph';
}