<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3367d7dc99b78433141daa7e46cd92f4
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WeDevs\\WpUtils\\' => 15,
        ),
        'F' => 
        array (
            'FlyWP\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WeDevs\\WpUtils\\' => 
        array (
            0 => __DIR__ . '/..' . '/wedevs/wp-utils/src',
        ),
        'FlyWP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FlyWP\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'FlyWP\\Admin\\Adminbar' => __DIR__ . '/../..' . '/includes/Admin/Adminbar.php',
        'FlyWP\\Admin\\Email' => __DIR__ . '/../..' . '/includes/Admin/Email.php',
        'FlyWP\\Admin\\Fastcgi_Cache' => __DIR__ . '/../..' . '/includes/Admin/Fastcgi_Cache.php',
        'FlyWP\\Admin\\Litespeed' => __DIR__ . '/../..' . '/includes/Admin/Litespeed.php',
        'FlyWP\\Admin\\Opcache' => __DIR__ . '/../..' . '/includes/Admin/Opcache.php',
        'FlyWP\\Admin\\Optimizations' => __DIR__ . '/../..' . '/includes/Admin/Optimizations.php',
        'FlyWP\\Admin\\Plugins' => __DIR__ . '/../..' . '/includes/Admin/Plugins.php',
        'FlyWP\\Api' => __DIR__ . '/../..' . '/includes/Api.php',
        'FlyWP\\Api\\Cache' => __DIR__ . '/../..' . '/includes/Api/Cache.php',
        'FlyWP\\Api\\Health' => __DIR__ . '/../..' . '/includes/Api/Health.php',
        'FlyWP\\Api\\Ping' => __DIR__ . '/../..' . '/includes/Api/Ping.php',
        'FlyWP\\Api\\Plugins' => __DIR__ . '/../..' . '/includes/Api/Plugins.php',
        'FlyWP\\Api\\Themes' => __DIR__ . '/../..' . '/includes/Api/Themes.php',
        'FlyWP\\Api\\Updates' => __DIR__ . '/../..' . '/includes/Api/Updates.php',
        'FlyWP\\Api\\UpdatesData' => __DIR__ . '/../..' . '/includes/Api/UpdatesData.php',
        'FlyWP\\Email' => __DIR__ . '/../..' . '/includes/Email.php',
        'FlyWP\\Fastcgi_Cache' => __DIR__ . '/../..' . '/includes/Fastcgi_Cache.php',
        'FlyWP\\FlyApi' => __DIR__ . '/../..' . '/includes/FlyApi.php',
        'FlyWP\\Frontend' => __DIR__ . '/../..' . '/includes/Frontend.php',
        'FlyWP\\Frontend\\MagicLogin' => __DIR__ . '/../..' . '/includes/Frontend/MagicLogin.php',
        'FlyWP\\Helper' => __DIR__ . '/../..' . '/includes/Helper.php',
        'FlyWP\\Litespeed' => __DIR__ . '/../..' . '/includes/Litespeed.php',
        'FlyWP\\Opcache' => __DIR__ . '/../..' . '/includes/Opcache.php',
        'FlyWP\\Optimizations' => __DIR__ . '/../..' . '/includes/Optimizations.php',
        'FlyWP\\Optimizations\\Admin' => __DIR__ . '/../..' . '/includes/Optimizations/Admin.php',
        'FlyWP\\Optimizations\\Base' => __DIR__ . '/../..' . '/includes/Optimizations/Base.php',
        'FlyWP\\Optimizations\\General' => __DIR__ . '/../..' . '/includes/Optimizations/General.php',
        'FlyWP\\Optimizations\\Header' => __DIR__ . '/../..' . '/includes/Optimizations/Header.php',
        'FlyWP\\Router' => __DIR__ . '/../..' . '/includes/Router.php',
        'WeDevs\\WpUtils\\ContainerTrait' => __DIR__ . '/..' . '/wedevs/wp-utils/src/ContainerTrait.php',
        'WeDevs\\WpUtils\\HookTrait' => __DIR__ . '/..' . '/wedevs/wp-utils/src/HookTrait.php',
        'WeDevs\\WpUtils\\LogTrait' => __DIR__ . '/..' . '/wedevs/wp-utils/src/LogTrait.php',
        'WeDevs\\WpUtils\\SingletonTrait' => __DIR__ . '/..' . '/wedevs/wp-utils/src/SingletonTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3367d7dc99b78433141daa7e46cd92f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3367d7dc99b78433141daa7e46cd92f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3367d7dc99b78433141daa7e46cd92f4::$classMap;

        }, null, ClassLoader::class);
    }
}
