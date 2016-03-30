<?php
/**
 * This file is part of the Ray.FirebaseModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php MIT
 */
namespace Ray\FirebaseModule\Annotation;

use Ray\Di\Di\Qualifier;

/**
 * @Annotation
 * @Target("METHOD")
 * @Qualifier
 */
final class FirebaseConfig
{
    public $value;
}
