<?php

namespace Willywes\WPThemeGenerator;

class Tools
{

    public static function unzip($file, $folder, $filename): bool
    {
        $zip = new \ZipArchive;
        $res = $zip->open($file);
        if ($res === true) {
            $zip->extractTo($folder);
            $zip->close();
            rename($folder . '/theme', $folder . '/' . $filename);
            return true;
        } else {
            return false;
        }
    }
}
