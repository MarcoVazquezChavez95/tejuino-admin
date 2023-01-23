<?php

namespace Tejuino\Admin\Helpers;

class Assets
{

    public static function css(...$assets_arrays)
    {
        foreach ($assets_arrays as $asset_array)
        {
            foreach ($asset_array as $asset)
            {
                echo '<link href="/admin_assets/css/' .
                    str_replace('.', '/', $asset) .
                    '.css" rel="stylesheet" />';
            }
        }
    }

    public static function js(...$assets_arrays)
    {
        foreach ($assets_arrays as $asset_array)
        {
            foreach ($asset_array as $asset)
            {
                echo '<script src="/admin_assets/js/' .
                    str_replace('.', '/', $asset) .
                    '.js"></script>';
            }
        }
    }

}
