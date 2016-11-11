<?php

namespace App\Triggers;

use MarvinLabs\SetupWizard\Contracts\WizardTrigger;

/**
 * Class EnvFileTrigger
 *
 * @package MarvinLabs\SetupWizard\Triggers
 *
 * Start the wizard if the application does not have yet an env file
 */
class MyTrigger implements WizardTrigger
{

    /**
     * Indicates if the wizard should be launched or not
     *
     * @return boolean
     */
    public function shouldLaunchWizard()
    {
        return true;
    }
}