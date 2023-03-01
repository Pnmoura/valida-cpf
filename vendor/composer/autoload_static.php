<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb35dd5bcc4a14003d71170d235b03556
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb35dd5bcc4a14003d71170d235b03556::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb35dd5bcc4a14003d71170d235b03556::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb35dd5bcc4a14003d71170d235b03556::$classMap;

        }, null, ClassLoader::class);
    }
}