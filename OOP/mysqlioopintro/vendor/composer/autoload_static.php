<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6418bf579031c5dbdf7178a8942cde9
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6418bf579031c5dbdf7178a8942cde9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6418bf579031c5dbdf7178a8942cde9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6418bf579031c5dbdf7178a8942cde9::$classMap;

        }, null, ClassLoader::class);
    }
}
