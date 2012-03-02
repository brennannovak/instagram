<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:		Social Igniter : Instagram : Config
* Author: 	Brennan Novak
* 		  	contact@social-igniter.com
* 
* Created by Brennan Novak
*
* Project:	http://social-igniter.com
* Source: 	http://github.com/socialigniter/instagram
* 
* Description: this file Social Igniter Instagram App
*/

$config['instagram_path']			= 'instagram/';
$config['instagram_client_name']	= 'Local Host Testing';
$config['instagram_client_id']		= '';
$config['instagram_client_secret']	= '';
$config['instagram_callback_url']	= 'http://localhost/connections/instagram/callback';
$config['instagram_website']		= 'http://localhost';
$config['instagram_description']	= 'Just for me to test on mah local host!';

// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 
// See https://github.com/ianckc/CodeIgniter-Instagram-Library/issues/5 for a discussion on this
$config['instagram_ssl_verify']		= TRUE;