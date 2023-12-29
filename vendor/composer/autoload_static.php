<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1980ad7761b2ce7057f78aff2af4abb6
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1980ad7761b2ce7057f78aff2af4abb6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1980ad7761b2ce7057f78aff2af4abb6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1980ad7761b2ce7057f78aff2af4abb6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1980ad7761b2ce7057f78aff2af4abb6::$classMap;

        }, null, ClassLoader::class);
    }
}