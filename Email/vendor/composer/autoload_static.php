<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cdc5e00ee329453dc9054086dba92ae
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cdc5e00ee329453dc9054086dba92ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cdc5e00ee329453dc9054086dba92ae::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
