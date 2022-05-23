<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3806f0e0061393eecffb5181e1123c59
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3806f0e0061393eecffb5181e1123c59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3806f0e0061393eecffb5181e1123c59::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3806f0e0061393eecffb5181e1123c59::$classMap;

        }, null, ClassLoader::class);
    }
}
