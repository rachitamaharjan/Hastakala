<?php 


function map_storage_path_to_link($path=null)
{
    if (!$path)
        return url('storage');
    $dirs = explode('/', $path);
    if ($dirs[0]==='public')
        $dirs[0]='storage';
    return url(implode('/', $dirs));
}




