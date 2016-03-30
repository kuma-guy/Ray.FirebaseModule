<?php
/**
 * This file is part of the Ray.FirebaseModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php MIT
 */
namespace Ray\FirebaseModule;

use Firebase\FirebaseInterface;
use Ray\Di\AbstractModule;
use Ray\Di\Scope;
use Ray\FirebaseModule\Annotation\FirebaseConfig;

class FirebaseModule extends AbstractModule
{
    /**
     * @param string $url
     * @param string $token
     */
    public function __construct($url, $token)
    {
        $this->bind()->annotatedWith(FirebaseConfig::class)->toInstance([$url, $token]);
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(FirebaseInterface::class)->toProvider(FirebaseProvider::class)->in(Scope::SINGLETON);
    }
}
