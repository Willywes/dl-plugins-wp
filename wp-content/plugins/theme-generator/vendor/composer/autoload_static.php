<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit264c6a3f732ce2e89caf8d0c01bdd520
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Willywes\\WPThemeGenerator\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Willywes\\WPThemeGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit264c6a3f732ce2e89caf8d0c01bdd520::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit264c6a3f732ce2e89caf8d0c01bdd520::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit264c6a3f732ce2e89caf8d0c01bdd520::$classMap;

        }, null, ClassLoader::class);
    }
}
