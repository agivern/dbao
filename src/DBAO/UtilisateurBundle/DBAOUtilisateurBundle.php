<?php

namespace DBAO\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DBAOUtilisateurBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
