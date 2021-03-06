<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite1515ac653e8a8d4427da5f78ec55ffc
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

        spl_autoload_register(array('ComposerAutoloaderInite1515ac653e8a8d4427da5f78ec55ffc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite1515ac653e8a8d4427da5f78ec55ffc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite1515ac653e8a8d4427da5f78ec55ffc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
