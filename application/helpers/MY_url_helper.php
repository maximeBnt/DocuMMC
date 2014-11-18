<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 18/11/2014
 * Time: 16:47
 */

function site_url($uri = '')
{
    if( ! is_array($uri))
    {
        //paramètres de la fonction mis dans un tableau
        $uri = func_get_args();
    }

    //  fonction d'origine
    $CI =& get_instance();
    return $CI->config->site_url($uri);
}