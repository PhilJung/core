<?php
/**
 * Copyright (c) 2012 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

class Test_Filestorage_DAV extends Test_FileStorage {
	private $config;
	private $id;

	public function setUp(){
		$id=uniqid();
		$this->config=include('apps/files_remote/tests/config.php');
		$this->config['webdav']['root'].='/'.$id;//make sure we have an new empty folder to work in
		$this->instance=new OC_Filestorage_DAV($this->config['webdav']);
	}

	public function tearDown(){
		$this->instance->rmdir('/');
	}
}
