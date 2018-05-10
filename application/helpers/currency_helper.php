<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('rupiah'))
{    
    function rupiah($angka)
    {
    	$rupiah = number_format($angka,0,',',',');
    	return  $rupiah;
   }
}