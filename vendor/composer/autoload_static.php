<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74df731168f98717b6b8736d32c3f63a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tillo\\IntroduccionPhpoopInicio\\' => 31,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tillo\\IntroduccionPhpoopInicio\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74df731168f98717b6b8736d32c3f63a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74df731168f98717b6b8736d32c3f63a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74df731168f98717b6b8736d32c3f63a::$classMap;

        }, null, ClassLoader::class);
    }
}