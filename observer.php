<?php

class local_isymetaindex_observer
{
    public static function meta_updateded(local_isymetaindex\event\meta_updated $event)
    {
        global $DB, $CFG;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "127.0.0.1:8000");

        return true;
    }
}