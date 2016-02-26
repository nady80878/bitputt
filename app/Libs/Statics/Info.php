<?php namespace App\Libs\Statics;

class Info 
{
	/**
	 * Returns the name of the host server (such as www.w3schools.com)
	 * @return (type) (description)
	 */
	
	public static function serverName()
	{
		return self::SERVER('SERVER_NAME') ;
	}

	/**
	 * Returns the IP address of the host server
	 * @return (type) (description)
	 */
	public static function serverIp()
	{
		return self::SERVER('SERVER_ADDR');
	}
	public static function serverPort()
	{
		return self::SERVER('SERVER_PORT');
	}

	/**
	 * Returns the server identification string (such as Apache/2.2.24)
	 * @return (type) (description)
	 */
	public static function serverSoftware()
	{
		return self::SERVER('SERVER_SOFTWARE');
	}
	public static function serverAdmin()
	{
		return self::SERVER('SERVER_ADMIN');
	}

	/**
	 * Returns the name and revision of the information protocol (such as HTTP/1.1)
	 * @return (type) (description)
	 */
	public static function protocol()
	{
		return self::SERVER('SERVER_PROTOCOL');
	}
	/**
	 * Returns the filename of the currently executing script
	 * @return (type) (description)
	 */
	public static function filename()
	{
		return self::SERVER('PHP_SELF');
	}

	public static function method()
	{
		return self::SERVER('REQUEST_METHOD');
	}
	/**
	 * Returns the timestamp of the start of the request (such as 1377687496)
	 * @return (type) (description)
	 */
	public static function requestTime()
	{
		return self::SERVER('REQUEST_TIME');
	}

	/**
	 * Returns the query string if the page is accessed via a query string
	 * @return (type) (description)
	 */
	public static function requestQuery()
	{
		return self::SERVER('QUERY_STRING');
	}

	/**
	 * Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
	 * @return (type) (description)
	 */
	public static function requestCharset()
	{
		return self::SERVER('HTTP_ACCEPT_CHARSET');
	}

	/**
	 * Returns the complete URL of the current page (not reliable because not all user-agents
	 * @return (type) (description)
	 */
	public static function prevUrl()
	{
		return self::SERVER('HTTP_REFERER');
	}

	public static function userIP()
	{
		return self::SERVER('REMOTE_ADDR') ;
	}

	public static function userHost()
	{
		return self::SERVER('REMOTE_HOST');
	}
	public static function userPort()
	{
		return self::SERVER('REMOTE_PORT');
	}

	/**
	 * eg. (Chrome, firefox)
	 * @return (type) (description)
	 */
	public static function userBrowser()
	{
		return self::browser('browser');
	}

	/**
	 * eg. (Mozilla Foundation . Google Inc)
	 * @return (type) (description)
	 */
	public static function userBrowserMaker()
	{
		return self::browser('browser_maker');
	}
	/**
	 * eg. (32)
	 * @return (type) (description)
	 */
	public static function userBrowserBits()
	{
		return self::browser('browser_bits');
	}

	/**
	 * eg. (48.0, 43.0)
	 * @return (type) (description)
	 */
	public static function userBrowserVersion()
	{
		return self::browser('version');
	}

	/**
	 * eg. (Win8.1)
	 * @return (type) (description)
	 */
	public static function userOS()
	{
		return self::browser('platform');
	}
	/**
	 * eg. (64, 32)
	 * @return (type) (description)
	 */
	public static function userOSBits()
	{
		return self::browser('platform_bits');
	}

	/**
	 * eg. (Microsoft Corporation)
	 * @return (type) (description)
	 */
	public static function userOSMaker()
	{
		return self::browser('platform_maker');
	}

	/**
	 * eg. (Windows 8.1)
	 * @return (type) (description)
	 */
	public static function userOSDesc()
	{
		return self::browser('platform_description');
	}

	/**
	 * eg. (Windows Desktop)
	 * @return (type) (description)
	 */
	public static function userDevice()
	{
		return self::browser('device_name');
	}

	public static function isHTTPS()
	{
		return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on');
	}
	public static function isAjax()
	{
		return ( isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' );
	}

	public static function requestUrl()
	{
		return self::SERVER('REQUEST_URI');
	}

	/**
	 * Helper Method for retrieving browser info
	 * @param  (type) $key (description)
	 * @return (type)      (description)
	 */
	private static function browser($key)
	{
		return (get_browser(null, true)[$key]) ?: '';
	}
	/**
	 * Helper Method for retrieving browser info
	 * @param  (type) $key (description)
	 * @return (type)      (description)
	 */
	private static function SERVER($key)
	{
		return (isset($_SERVER[$key])) ? $_SERVER[$key] : '';
	}


}