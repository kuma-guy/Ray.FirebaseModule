<?php
/**
 * This file is part of the Ray.FirebaseModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php MIT
 */
namespace Ray\FirebaseModule;

use Firebase\FirebaseLib;
use Ray\Di\ProviderInterface;
use Ray\FirebaseModule\Annotation\FirebaseConfig;

class FirebaseProvider implements ProviderInterface
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $token;

    /**
     * @param array $config
     *
     * @FirebaseConfig
     */
    public function __construct(array $config)
    {
        list($this->url, $this->token) = $config;
    }

    /**
     * {@inheritdoc}
     */
    public function get()
    {
        $fb = new FirebaseLib($this->url, $this->token);

        return $fb;
    }
}
