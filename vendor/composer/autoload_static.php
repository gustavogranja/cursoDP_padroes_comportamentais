<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b34e58aaae55e8f95b0c9cd3fa1d423
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b34e58aaae55e8f95b0c9cd3fa1d423::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b34e58aaae55e8f95b0c9cd3fa1d423::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
