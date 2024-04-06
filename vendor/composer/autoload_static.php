<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit414b332c71e50baac5932452d09c43e6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit414b332c71e50baac5932452d09c43e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit414b332c71e50baac5932452d09c43e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit414b332c71e50baac5932452d09c43e6::$classMap;

        }, null, ClassLoader::class);
    }
}