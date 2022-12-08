<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85dab4cd861e4c1abd501eb994f58d59
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
        'S' => 
        array (
            'Sara\\Arnab\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
        'Sara\\Arnab\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit85dab4cd861e4c1abd501eb994f58d59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85dab4cd861e4c1abd501eb994f58d59::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85dab4cd861e4c1abd501eb994f58d59::$classMap;

        }, null, ClassLoader::class);
    }
}