<?php

namespace SirMathays\Relations;

use Illuminate\Database\Eloquent\Relations\HasMany;

class HasManyBridge extends RelationBridge
{
    protected static $relationClassName = HasMany::class;
}