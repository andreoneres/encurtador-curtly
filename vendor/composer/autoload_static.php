<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4899d6b2a9766ed027af190345f7fa5
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite4899d6b2a9766ed027af190345f7fa5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4899d6b2a9766ed027af190345f7fa5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4899d6b2a9766ed027af190345f7fa5::$classMap;

        }, null, ClassLoader::class);
    }
}
