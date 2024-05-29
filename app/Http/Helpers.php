<?php


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


define('FL', strtoupper('en'));
define('SL', strtoupper('ar'));


if (!function_exists('storeImage')) {
  function storeImage($photo, $folder)
  {
      $file_extension = $photo->getClientOriginalExtension();
      $file_name = Str::uuid() . '.' . $file_extension;
      $saved = $photo->storeAs($folder, $file_name, ['disk' => 'public']);
      if ($saved) {
          return $file_name;
      }
  }
}

if (!function_exists('getLocale')) {
    /**
     * @return String
     */
    function getLocale(): String
    {
        return  app()->getLocale();
    }
  }


