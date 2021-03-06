<?php

namespace SirMathays\Convenience\Relations;

use Illuminate\Database\Eloquent\Relations\MorphMany;

class MorphManyBridge extends RelationBridge
{
    protected static $relationClassName = MorphMany::class;

    public static $stubGroupAffix = 'morph';
}