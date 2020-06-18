<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$documentRoot = ((isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] != "") ? $_SERVER['DOCUMENT_ROOT'] : "/var/www/html") . "/backend";
$GLOBALS['config'] = array(
    'root'		=> $documentRoot,
    'remember'	=> array(
        'cookie_name'	=> 'session_id_storage',
        'cookie_expiry'	=>  604800
    ),

    'mysql'     => array(
        'login'     => array(
            'host'      => "localhost",
            'username'  => "preshowhouse",
            'password'  => PASS /* THIS IS DEFINED IN /pass.php */
        ),
        'dbs'       => array(

        )
    ),

    # Session Information
    'session'		=> array(
        'session_name'	=> 'user',
        'CSRF_protect' 	=> 'token'
    ),

    # Site Metadata
    'siteData'	=> array(
        'name' => 'PreshowHouse\'s Cinema Preshows',
        'version' => '0.0.1a'
    ),

    # Input Types
    'inputType'	=> array(
        'userGenericInput'			=> 1,
        'userHTMLInput'			=> 2
    ),
    'emailSettings' => array(
        'email'					=> "matthapkidokarate@gmail.com",
    ),
);
