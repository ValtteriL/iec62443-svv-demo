<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09ff977beb4cc1c0c785ad6d1b104a69
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09ff977beb4cc1c0c785ad6d1b104a69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09ff977beb4cc1c0c785ad6d1b104a69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09ff977beb4cc1c0c785ad6d1b104a69::$classMap;

        }, null, ClassLoader::class);
    }
}
