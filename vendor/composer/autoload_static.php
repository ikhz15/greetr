<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited6e0a3a2d46c55b308a0863cd207d08
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Simplexi\\Greetr\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Simplexi\\Greetr\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited6e0a3a2d46c55b308a0863cd207d08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited6e0a3a2d46c55b308a0863cd207d08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited6e0a3a2d46c55b308a0863cd207d08::$classMap;

        }, null, ClassLoader::class);
    }
}
