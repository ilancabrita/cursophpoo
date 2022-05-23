<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8e006ad3b1d72d7b2a1ec9e4d30673bf
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit8e006ad3b1d72d7b2a1ec9e4d30673bf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8e006ad3b1d72d7b2a1ec9e4d30673bf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8e006ad3b1d72d7b2a1ec9e4d30673bf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
