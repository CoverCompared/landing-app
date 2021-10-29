<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e5bf30dd2a5f41c7ff71678e4eaf16e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e5bf30dd2a5f41c7ff71678e4eaf16e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e5bf30dd2a5f41c7ff71678e4eaf16e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
