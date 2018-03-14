<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3957def2d0debc8d9efee1ff2fee6fb5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3957def2d0debc8d9efee1ff2fee6fb5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3957def2d0debc8d9efee1ff2fee6fb5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
