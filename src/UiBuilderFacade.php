<?php

namespace UiBuilder\UiBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UiBuilder\UiBuilder\Skeleton\SkeletonClass
 */
class UiBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ui-builder';
    }
}
