<?php

namespace Frnwtr\VuecliPreset;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Frnwtr\VuecliPreset\Skeleton\SkeletonClass
 */
class VuecliPresetFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vuecli-preset';
    }
}
