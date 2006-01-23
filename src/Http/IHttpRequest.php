<?php

/**
 * Nette Framework
 *
 * Copyright (c) 2004, 2008 David Grudl (http://davidgrudl.com)
 *
 * This source file is subject to the "Nette license" that is bundled
 * with this package in the file license.txt.
 *
 * For more information please see http://nettephp.com/
 *
 * @copyright  Copyright (c) 2004, 2008 David Grudl
 * @license    http://nettephp.com/license  Nette license
 * @link       http://nettephp.com/
 * @category   Nette
 * @package    Nette::Web
 */

/*namespace Nette::Web;*/



/**
 * IHttpRequest provides access scheme for request sent via HTTP.
 *
 * @author     David Grudl
 * @copyright  Copyright (c) 2004, 2008 David Grudl
 * @package    Nette::Web
 * @version    $Revision$ $Date$
 */
interface IHttpRequest
{
    /**
     * Returns HTTP request method (GET, POST, HEAD, PUT, ...).
     * @return string
     */
    function getMethod();

    /**
     * Returns URL scheme name (http or https).
     * @return string
     */
    function getScheme();

    /**
     * Returns host name with optional port.
     * @return string
     */
    function getHost();

    /**
     * Returns the REQUEST URI-path taking into account platform differences.
     * @return string
     */
    function getRawUrl();

    /**
     * Returns the full URL.
     * @return string
     */
    function getUrl();

    /**
     * Get the base URL-path of the request; i.e., the segment leading to the script name.
     * It is determined from the environment using SCRIPT_FILENAME, SCRIPT_NAME etc.
     *
     * @return string
     */
    function getBaseUrl();

    /**
     * Everything in REQUEST_URI before PATH_INFO not including the filename.
     * <img src="<?=$basePath?>/images/image.png">
     *
     * @return string
     */
    function getBasePath();

    /**
     * Returns variable provided to the script via URL query ($_GET).
     * If no $key is passed, returns the entire array.
     *
     * @param  string
     * @param  mixed  default value to use if key not found
     * @return mixed
     */
    function getQuery($key = NULL, $default = NULL);

    /**
     * Returns variable provided to the script via POST method ($_POST).
     * If no $key is passed, returns the entire array.
     *
     * @param  string
     * @param  mixed  default value to use if key not found
     * @return mixed
     */
    function getPost($key = NULL, $default = NULL);

    /**
     * Returns uploaded file.
     * If no $key is passed, returns the entire array.
     *
     * @param  string
     * @return array|NULL
     */
    function getFile($key = NULL);

    /**
     * Returns variable provided to the script via HTTP cookies.
     * If no $key is passed, returns the entire array.
     *
     * @param  string
     * @param  mixed  default value to use if key not found
     * @return mixed
     */
    function getCookie($key = NULL, $default = NULL);

    /**
     * Return the value of the HTTP header. Pass the header name as the.
     * plain, HTTP-specified header name. Ex.: Ask for 'Accept' to get the
     * Accept header, 'Accept-Encoding' to get the Accept-Encoding header.
     *
     * @param  string
     * @param  mixed
     * @return array|string|NULL  list or single HTTP request header
     */
    function getHeader($key = NULL, $default = NULL);

    /**
     * Is the request is sent via secure channel (https).
     * @return boolean
     */
    function isSecured();

    /**
     * Is Ajax request?
     * @return boolean
     */
    function isAjax();
}