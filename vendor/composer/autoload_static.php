<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37c4b99df8b5453aa26ed76dc2a79c2a
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37c4b99df8b5453aa26ed76dc2a79c2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37c4b99df8b5453aa26ed76dc2a79c2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
