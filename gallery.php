<?php
/**
 * @package  GalleryPlugin
 */
/*
Plugin Name: Gallery
Author: Vanik
Description: add your gallery
Version: 1.0
*/

if (!defined('ABSPATH')){
    die();
}

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

function GalleryPluginActivate(){
    Inc\Base\Activate::activate();
}

register_activation_hook(__FILE__,'GalleryPluginActivate');

function  GalleryPluginDeactivate(){
    Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__,"GalleryPluginDeactivate");

if (class_exists('Inc\\Init')){
    Inc\Init::register_services();
}











