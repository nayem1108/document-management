<?php

namespace Nayem1108\DocumentManagement;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nayem1108\DocumentManagement\Skeleton\SkeletonClass
 */
class DocumentManagementFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'document-management';
    }
}
