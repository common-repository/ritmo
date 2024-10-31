<?php
/**
 * Show ritmo embed
 *
 * @param $post_id (integer) Post ID
 * @return string|void
 */
function ritmo($post_id = false)
{

	// Set Post ID
	if (empty($post_id)) {
		global $post;
		$post_id = $post->ID;
	}

	// Check Post ID
	if (empty($post_id))
		return;

	// Get Ritmo URL from post meta
	$ritmo_url = get_post_meta($post_id, 'ritmo_url', true);

	// Check Ritmo url
	if (empty($ritmo_url))
		return;

	$ritmo_url = parse_url($ritmo_url);
	$embed_url = 'http://embed.ritmo.ir' . $ritmo_url['path'];

	return '<iframe src="' . $embed_url . '" style="border:none" width="300" height="379"></iframe>';
}