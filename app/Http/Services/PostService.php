<?php

namespace App\Http\Services;

class PostService
{

    public function uploadImage($data, $image)
    {
        if (isset($data['image'])) {
            $data['image'] = $filename = time().".".$data['image']->extension();
            $image->move(public_path("uploads/post"), $filename);
        }
        
        return $data;
    }
}