<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit609ebbf44d5a60fc51efb9f340caa11c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Staark\\LoginRegister\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Staark\\LoginRegister\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Staark\\LoginRegister\\Database' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit609ebbf44d5a60fc51efb9f340caa11c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit609ebbf44d5a60fc51efb9f340caa11c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit609ebbf44d5a60fc51efb9f340caa11c::$classMap;

        }, null, ClassLoader::class);
    }
}
