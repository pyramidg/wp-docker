<?php
/**
 * Front page template
 * 
 * @package genchild
 * @author Pyramid Guest
 * @link http://webstudioplace.com/  
 * @copyright (c) 2017, Pyramid Guest 
 * @license GPL-2.0+
 */


// Register front page widget areas
    genesis_register_sidebar( array( 
        'id'        => 'home-welcome',
        'name'      =>__( 'Home Welcome', 'genchild' ),
        'description' =>__('This is a home widget that will show on the front page ', 'genchild'),
          ) );
    
    genesis_register_sidebar( array( 
        'id'        => 'call-to-action',
        'name'      =>__( 'Call to Action', 'genchild' ),
        'description' =>__('This is a call to action widget that will show on the front page ', 'genchild'),
          ) );
    
