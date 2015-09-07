<?php 
class Util{
	
	public static function make_path($pathname, $is_filename=false){
		if($is_filename){
			$pathname = substr($pathname, 0, strrpos($pathname, '/'));
		}

    	// Check if directory already exists
		if (is_dir($pathname) || empty($pathname)) {
			return true;
		}

    	// Ensure a file does not already exist with the same name
		$pathname = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $pathname);

		if (is_file($pathname)) {
			trigger_error('mkdirr() File exists', E_USER_WARNING);
			return false;
		}

    	// Crawl up the directory tree
		$next_pathname = substr($pathname, 0, strrpos($pathname, DIRECTORY_SEPARATOR));

		if (Util::make_path($next_pathname, false)) {
			if (!file_exists($pathname)) {
				return mkdir($pathname, 0775);
			}

		}

		return false;
	}

	public static function milliseconds(){
		return round(microtime(true) * 1000);
	}

	public static function uploadPath($typePath='temp', $path_variables=null){
		$relative_path = null;
		switch ($typePath) {
			case 'temp': $relative_path = 'uploads/temp/'; break;
			case 'document': $relative_path = "uploads/clients/".$path_variables['client_id']."/transactions/".$path_variables['transaction_id']."/activities/".$path_variables['activity_id']."/documents/"; break;
		}
		Util::make_path(public_path($relative_path));
		return $relative_path;
	}

}