<?php

	Class files {

		protected $home = "/home/codejo"
		protected $storage = "storage"
		protected $userDir = ""; // This will normally be set to the logged in users username, but in some cases it will be different. This is set in construct. :)
		protected $currentDir = ""; // This will be set everytime you use Get function so you can use other functions by only defining file name :)
		
		/*
		Most times when getting a file or modifying you would use something like this for the directory:
			$home/$storage/$userDir/year/month/day/$fileDir or $fileName
		This entire thing would look something like this (and this is a real example):
			/home/codejo/storage/kiddj2015/2013/4/08/134081550_4c5edb52b46282766ce26d0e5030596b.png

		Images should all be named like this such as the example above:
			YYMMDD{time in military}_{username hashed with md5} + if necessary add 0,1,2,3,4,5,etc... to the name if more than one is added at the same time. :)
			So like this:
			13408155005_4c5edb52b46282766ce26d0e5030596b.png
		*/

		public function __construct() {
			
		}

		public function get($dir, $name) {

		}

		public function edit($new, $old) {

		}

		public function create($ext, $content) {

		}

		public function delete($name) {

		}

	}

?>