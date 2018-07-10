<?php

/**
 * SEO Metadata Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2018 Alfredo Ramos
 * @license GNU GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_SEO_METADATA' => 'SEO Metadata settings',
	'ACP_SEO_METADATA_EXPLAIN' => 'After changing these values, you will need to purge the cache.',
	'ACP_SEO_METADATA_DESC_LENGTH' => 'Description length',
	'ACP_SEO_METADATA_DESC_LENGTH_EXPLAIN' => 'Maximum length for description that will be used in meta tags such as <samp>og:description</samp>. It has a hard limit of <samp>255</samp> characters.',
	'ACP_SEO_METADATA_DEFAULT_IMAGE' => 'Default image',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_EXPLAIN' => 'Default image URL for meta tags such as <samp>og:image</samp>. It will only be used if an image cannot be found within the current page. It must be relative to <samp>%s</samp>',
	'ACP_SEO_METADATA_SETTINGS_SAVED' => 'SEO Metadata settings have been succesfully saved.',

	'ACP_GLOBAL_SETTINGS' => 'Global settings',

	'ACP_OPEN_GRAPH_SETTINGS' => 'Open Graph settings',
	'ACP_OPEN_GRAPH' => 'Enable Open Graph',
	'ACP_OPEN_GRAPH_EXPLAIN' => 'Metadata are dynamically generated from your board data.',

	'LOG_SEO_METADATA_DATA' => '<strong>SEO Metadata data changed</strong><br />» %s'
]);
