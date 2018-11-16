<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae1c72de0feb4b1d4e2582c998a2d980
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae1c72de0feb4b1d4e2582c998a2d980::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae1c72de0feb4b1d4e2582c998a2d980::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitae1c72de0feb4b1d4e2582c998a2d980::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}