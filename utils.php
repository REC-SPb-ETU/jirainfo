<?php
/**
 * Utilities: class with common helper functions
 *
 */

/**
 * The Utilities class
 */
class Utilities
{
    public static function getTaskUrl (String $key = null, String $apiUrl = '')
    {
        $arrURL = parse_url($apiUrl);
        return $arrURL['scheme'] .'://'. $arrURL['host'] .'/browse/'. $key;                
    }
}
