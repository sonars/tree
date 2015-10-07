<?php

class ClusterTestCase extends TreeTestCase {

	public static function setUpBeforeClass() {
		with(new ClusterMigrator)->up();
	}

	public function setUp() {
		with(new ClusterSeeder)->run();
	}

	protected function clusters($name, $className = 'Cluster') {
		return forward_static_call_array(array($className, 'where'), array('name', '=', $name))->first();
	}

}
