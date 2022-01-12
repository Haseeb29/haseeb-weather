<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f419c6a70d01ce97f5326896dd81c20
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Haseeb\\Weather\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Haseeb\\Weather\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f419c6a70d01ce97f5326896dd81c20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f419c6a70d01ce97f5326896dd81c20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f419c6a70d01ce97f5326896dd81c20::$classMap;

        }, null, ClassLoader::class);
    }
}
