<?php

namespace Tejuino\Admin\Traits;

trait HasFiles
{

    public function createFolder()
    {
        mkdir(public_path($this->file_dir . $this->id . '-' . $this->hash));
    }

    public function getFileDir()
    {
        return $this->file_dir;
    }

    public function getHashedFolder()
    {
        return $this->id . '-' . $this->hash . '/';
    }

    public function getUrl($file, $default = 'default.png')
    {
        // Check if no file
        if (!$file) {
            return url($this->getFileDir() . $default);
        }

        // Check if default files
        if (strpos($file, 'default') !== false) {
            return url($this->getFileDir() . $file);
        }

        // Complete file path
        return url($this->getFileDir() . $this->getHashedFolder() . $file);
    }

    public function saveImageFromBase64($base64)
    {
        $random = uniqid();
        $data = explode(',', $base64);
        $ext = '';

        // Get image extension
        if ($data[0] == 'data:image/png;base64')
        {
            $ext = 'png';
        }
        else if ($data[0] == "data:image/jpg;base64" || $data[0] == "data:image/jpeg;base64")
        {
            $ext = 'jpg';
        }
        if (!$ext)
        {
            return false;
        }

        // Save image
        $newFilename = $random . '.' . $ext;
        $newFilePath = $this->getFileDir() . $this->getHashedFolder() . $newFilename;
        file_put_contents($newFilePath, base64_decode($data[1]));

        // Update entity image
        $this->update([
            'image' => $newFilename
        ]);

        return $newFilename;
    }

    public function saveImageFromFacebook($social_id)
    {
        $filename = uniqid('fbuser_') . '.jpg';
        $url = 'http://graph.facebook.com/' . $social_id . '/picture?width=500&height=500';
        $data = file_get_contents($url);

        file_put_contents($this->getFileDir() . $this->getHashedFolder() . $filename, $data);

        // Update entity image
        $this->update([
            'image' => $filename
        ]);

        return $filename;
    }

    public function deleteFile($file)
    {
        if(strpos($file, 'default') !== false)
        {
            return false;
        }

        $fileDir = public_path($this->getFileDir() . $this->getHashedFolder() . $file);
        if(file_exists($fileDir))
        {
            unlink($fileDir);
        }

        return true;
    }

}
