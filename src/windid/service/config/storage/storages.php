<?php
/**
 * @author Qiong Wu <papa0924@gmail.com> 2010-11-2
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2010 phpwind.com
 * @license
 */

return array(
	'local' => array(
		'name' => '本地存储', 
		'alias' => 'local', 
		'managelink' => '',
		'description' => '本地存储。附件、图片等将存储在本地磁盘上。默认定义位置为 attachment', 
		'components' => array('path' => 'WINDID:library.storage.WindidStorageLocal')
	), 
	'ftp' => array(
		'name' => 'FTP 远程附件存储', 
		'alias' => 'ftp', 
		'managelink' => 'windid/index/ftp/',
		'description' => 'FTP 远程附件存储', 
		'components' => array('path' => 'WINDID:library.storage.WindidStorageFtp')
	)
);