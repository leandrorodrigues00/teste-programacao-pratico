<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb2049489bca258b5b2c41f12abd65fcb
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

        spl_autoload_register(array('ComposerAutoloaderInitb2049489bca258b5b2c41f12abd65fcb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb2049489bca258b5b2c41f12abd65fcb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb2049489bca258b5b2c41f12abd65fcb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
