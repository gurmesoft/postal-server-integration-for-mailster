<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce4b87284c7156769f2fd185f58ca012
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Postal\\' => 7,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Postal\\' => 
        array (
            0 => __DIR__ . '/..' . '/postal/postal/src',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce4b87284c7156769f2fd185f58ca012::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce4b87284c7156769f2fd185f58ca012::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitce4b87284c7156769f2fd185f58ca012::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitce4b87284c7156769f2fd185f58ca012::$classMap;

        }, null, ClassLoader::class);
    }
}
