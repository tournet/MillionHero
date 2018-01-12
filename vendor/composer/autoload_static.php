<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39053598d7b5eb780472df8e12c9efef
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39053598d7b5eb780472df8e12c9efef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39053598d7b5eb780472df8e12c9efef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
