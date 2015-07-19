<?php

namespace Adldap\Objects\Ldap;

use Adldap\Schemas\ActiveDirectory;
use Adldap\Objects\Traits\HasDescriptionTrait;
use Adldap\Objects\Traits\HasCriticalSystemObjectTrait;

class Container extends Entry
{
    use HasDescriptionTrait;

    use HasCriticalSystemObjectTrait;

    /**
     * Returns the containers system flags integer.
     *
     * https://msdn.microsoft.com/en-us/library/ms680022(v=vs.85).aspx
     *
     * @return string
     */
    public function getSystemFlags()
    {
        return $this->getAttribute(ActiveDirectory::SYSTEM_FLAGS, 0);
    }
}
