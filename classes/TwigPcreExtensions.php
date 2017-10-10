<?php namespace LukeTowers\TwigPCRE\Classes;
    
/**
 * Class for extending Twig in OctoberCMS with Pearl-Compatible-Regular-Expressions accessible as filters as functions
 * Adapted from https://github.com/victor-in/Craft-TwigPCRE/
 */
class TwigPcreExtensions
{
    /**
     * Perform a regular expression search and replace, returning only matched subjects.
     *
     * @param string $subject
     * @param string $pattern
     * @param string $replacement
     * @param int $limit
     * @return string
     */
    public static function _preg_filter($subject, $pattern, $replacement = '', $limit = -1)
    {
        if (!isset($subject)) {
            return null;
        } else {
            return preg_filter($pattern, $replacement, $subject, $limit);
        }
    }
    
    /**
     * Perform a regular expression match and return an array of entries that match the pattern
     *
     * @param array $subject
     * @param string $pattern
     * @return array
     */
    public static function _preg_grep($subject, $pattern)
    {
        if (!isset($subject)) {
            return null;
        } else {
            return preg_grep($pattern, $subject);
        }
    }
    
    /**
     * Perform a regular expression match.
     *
     * @param string $subject
     * @param string $pattern
     * @return boolean
     */
    public static function _preg_match($subject, $pattern)
    {
        if (!isset($subject)) {
            return null;
        } else {
            return preg_match($pattern, $subject);
        }
    }
    
    /**
     * Perform a regular expression match and returns the results
     *
     * @param string $subject
     * @param string $pattern
     * @param array $matches If matches is provided, then it is filled with the results of search. $matches[0] will contain the text that matched the full pattern, $matches[1] will have the text that matched the first captured parenthesized subpattern, and so on. If it isn't, but the full pattern is matched, then it will ret
     * @return mixed bool||string Will return matched string if $matches isn't provided and a match is found
     */
    public static function _preg_find($subject, $pattern, &$matches = [])
    {
        if (!isset($subject)) {
            return null;
        } else {
	        // Swallow errors as well as no results
	        $matched = (bool) preg_match($pattern, $subject, $matches);
	        
	    // Return full match if matches wasn't provided
        } if ($matched && (func_num_args() < 3)) {
	        return $matches[0];
	    // Return whether or not the value was found.
	    } else {
		    return $matched;
		}
    }
    
    /**
     * Quote regular expression characters.
     *
     * @param string $subject
     * @param string $delimiter
     * @return string
     */
    public static function _preg_quote($subject, $delimiter)
    {
        if (!isset($subject)) {
            return null;
        } else {
            return preg_quote($subject, $delimiter);
        }
    }
    
    /**
     * Perform a regular expression search and replace.
     *
     * @param string $subject
     * @param string $pattern
     * @param string $replacement
     * @param int $limit
     * @return string
     */
    public static function _preg_replace($subject, $pattern, $replacement = '', $limit = -1)
    {
        if (!isset($subject)) {
            return null;
        } else {
            return preg_replace($pattern, $replacement, $subject, $limit);
        }
    }
    
    /**
     * Split text into an array using a regular expression.
     *
     * @param string $subject
     * @param string $pattern
     * @return array
     */
    public static function _preg_split($subject, $pattern)
    {
        if (!isset($subject)) {
            return null;
        } else {
            return preg_split($pattern, $subject);
        }
    }
}