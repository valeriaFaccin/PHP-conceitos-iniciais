<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e27a19b9b0bd5dd0e05c888a7118a52
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e27a19b9b0bd5dd0e05c888a7118a52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e27a19b9b0bd5dd0e05c888a7118a52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e27a19b9b0bd5dd0e05c888a7118a52::$classMap;

        }, null, ClassLoader::class);
    }
}
