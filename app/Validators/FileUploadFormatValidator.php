<?php namespace Hatches\Validators;

Class FileUploadFormat
{
    public function is_image($image_path)
    {
        if (!$f = fopen($image_path, 'rb')) {
            return false;
        }

        $data = fread($f, 8);
        fclose($f);

        // signature checking
        $unpacked = unpack("H12", $data);
        if (array_pop($unpacked) == '474946383961' || array_pop($unpacked) == '474946383761') {
            return "gif";
        }
        $unpacked = unpack("H4", $data);
        if (array_pop($unpacked) == 'ffd8') {
            return "jpg";
        }
        $unpacked = unpack("H16", $data);
        if (array_pop($unpacked) == '89504e470d0a1a0a') {
            return "png";
        }

        return false;
    }
}
