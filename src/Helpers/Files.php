<?php

namespace Tejuino\Admin\Helpers;

class Files
{

    public static function save($filePath, $extension, $folder = "", $prefix = "")
    {
        $data = file_get_contents($filePath);
        $filename = "";
        $newFilePath = "";
        $exists = true;

        $filename = uniqid($prefix) . "." . $extension;
        $newFilePath = public_path() . "/files/" . (($folder) ? ($folder . "/") : "" ) . $filename;

        file_put_contents($newFilePath, $data);
        return $filename;
    }

    public static function saveBase64Image($base64_string, $folder = "", $prefix = "")
    {
        $random = uniqid($prefix);
        $data = explode(',', $base64_string);
        $ext = "";
        if ($data[0] == "data:image/png;base64")
        {
            $ext = "png";
        }
        else if ($data[0] == "data:image/jpg;base64" || $data[0] == "data:image/jpeg;base64")
        {
            $ext = "jpg";
        }
        if (!$ext)
        {
            return false;
        }

        $newFilename = $random . "." . $ext;
        $newFilePath = public_path() . "/files/" . (($folder) ? ($folder . "/") : "" ) . $newFilename;

        file_put_contents($newFilePath, base64_decode($data[1]));
        return $newFilename;
    }

    public static function saveFromFacebook($fbuserid)
    {
        $filename = uniqid('fbuser_') . '.jpg';
        $url = 'http://graph.facebook.com/' . $fbuserid . '/picture?width=500&height=500';
        $data = file_get_contents($url);

        file_put_contents(public_path() . '/files/users/' . $filename, $data);
        return $filename;
    }

    public static function saveFromUrl($url, $prefix = 'image', $folder = 'users', $extension = 'jpg')
    {
        $filename = uniqid($prefix . '_') . '.' . $extension;
        $data = @file_get_contents($url);

        if($data == false)
        {
            return 'default.png';
        }

        file_put_contents(public_path() . '/files/' . $folder . '/' . $filename, $data);
        return $filename;
    }

    public static function getUrl($image, $path = "")
    {
        return config("app.url") . "files/" . $path . $image;
    }

    public static function removeFile($filename)
    {
        unlink(public_path() . "/files/" . $filename);
    }

}
