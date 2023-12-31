<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcbb8b6d7cbe75d8ee3b366189008b658
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

        spl_autoload_register(array('ComposerAutoloaderInitcbb8b6d7cbe75d8ee3b366189008b658', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcbb8b6d7cbe75d8ee3b366189008b658', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcbb8b6d7cbe75d8ee3b366189008b658::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
