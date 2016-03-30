<?php
/**
 * This file is part of the Ray.FirebaseModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php MIT
 */
namespace Ray\FirebaseModule;

use Firebase\FirebaseInterface;

trait FirebaseInject
{
    /**
     * @var FirebaseInterface
     */
    protected $firebase;

    /**
     * @param FirebaseInterface $firebase
     *
     * @\Ray\Di\Di\Inject
     */
    public function setAuraSql(FirebaseInterface $firebase = null)
    {
        $this->firebase = $firebase;
    }
}
