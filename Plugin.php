<?php namespace LukeTowers\TwigPCRE;

use System\Classes\PluginBase;

/**
 * TwigPCRE Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'luketowers.twigpcre::lang.plugin.name',
            'description' => 'luketowers.twigpcre::lang.plugin.description',
            'author'      => 'Luke Towers',
            'icon'        => 'icon-code',
        ];
    }
    
    /**
	 * Register markup filters and functions to be used in Twig
	 *
	 * @return array
	 */
    public function registerMarkupTags() {
        return [
            'filters' => [
                'preg_filter'  => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_filter'],
                'preg_grep'    => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_grep'],
                'preg_match'   => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_match'],
                'preg_quote'   => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_quote'],
                'preg_replace' => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_replace'],
                'preg_split'   => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_split'],
            ],
            'functions' => [
                'preg_filter'  => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_filter'],
                'preg_grep'    => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_grep'],
                'preg_match'   => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_match'],
                'preg_quote'   => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_quote'],
                'preg_replace' => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_replace'],
                'preg_split'   => ['LukeTowers\TwigPCRE\Classes\TwigPcreExtensions', '_preg_split']
            ],
        ];
    }
}