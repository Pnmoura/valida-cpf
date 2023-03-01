<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb35dd5bcc4a14003d71170d235b03556
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

        spl_autoload_register(array('ComposerAutoloaderInitb35dd5bcc4a14003d71170d235b03556', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb35dd5bcc4a14003d71170d235b03556', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb35dd5bcc4a14003d71170d235b03556::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
