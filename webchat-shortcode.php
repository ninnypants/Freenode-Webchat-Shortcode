<?php
/*
Plugin Name: Freenode Webchat
Plugin URI: http://ninnypants.com
Description: Add a web chat to a WordPress post or page with a shortcode
Version: 1.0
Author: ninnypants
Author URI: http://ninnypants.com
License: GPL2

Copyright 2013  Tyrel Kelsey  (email : tyrel@ninnypants.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_shortcode( 'webchat', 'fwc_webchat_shortcode' );
function fwc_webchat_shortcode( $atts = array(), $content = '', $tag = '' ){
	$atts = array_merge( array(
		'channels' => '',
		'width' => '100%',
		'height' => '400',
	), $atts );
	$url = add_query_arg( array( 'channels' => str_replace('#', '', $args['channels'] ) ), 'http://webchat.freenode.net' );
	return '<iframe src="' . esc_url( $url ) . '" width="' . esc_attr( $atts['width'] ) . '" height="' . esc_attr( $atts['height'] ) . '"></iframe>';
}