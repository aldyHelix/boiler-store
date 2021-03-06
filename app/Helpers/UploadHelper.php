<?php

use BaconQrCode\Renderer\Path\Path;

if (!function_exists('imageUpload')) {

    /**
     * description
     *
     * @param $file => $request->hasFile('Image)
     * $type => 'public' / 'storage' / 's3'
     * @return $newfilename
     */
    function imageUpload($file, $path, $type, $queue = false, $number = 0)
    {
        $imageName = time().'.'.$file->extension();

        if($queue){
            $imageName = $number.'_'.$imageName;
        }

        switch ($type) {
            case 'public' :
                $path = public_path($path);
                $stored = $file->move($path, $imageName);
            break;
            case 'storage' :
                $stored = $file->storeAs($path, $imageName);
            break;
            case 's3' :
                $stored = $file->storeAs($path,$imageName,'s3');
            break;
        }

        if($stored){
            return $imageName;
        } else {
            return false;
        }
        //return $imageName;
    }
}

if (!function_exists('getImage')) {
    function getImage($filename, $module){
        return asset('images/'.$module.'/'.$filename);
    }
}
