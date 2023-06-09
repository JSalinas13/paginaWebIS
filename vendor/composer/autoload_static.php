<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2e21b3495bbfec84f4cbf12d0f9c051
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2e21b3495bbfec84f4cbf12d0f9c051::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2e21b3495bbfec84f4cbf12d0f9c051::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2e21b3495bbfec84f4cbf12d0f9c051::$classMap;

        }, null, ClassLoader::class);
    }
}
