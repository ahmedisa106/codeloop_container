<?php

namespace App\Helper;

use Illuminate\Support\Facades\File;

trait Upload
{
    public function upload($file, $directory, $delete = false, $deleted_file = '')
    {
        if ($delete && $deleted_file !== '') {

            File::delete(public_path('images/' . $directory . '/' . $deleted_file));
        }
        $file_name = time() . '_' . $file->getClientOriginalName();
        $path = public_path('images/' . $directory);
        if (!file_exists(public_path('images/' . $directory))) {
            mkdir(public_path('images/' . $directory), 0777, true);
        }
        $file->move($path, $file_name);
        return $file_name;

    }//end of upload function


}
