<?php
namespace Tree\Generators;

class ModelGenerator extends Generator {

	/**
	 * Create a new model at the given path.
	 * @param  string $name
	 * @param  string $path
	 * @return string
	 */
	public function create($name, $path) {

		$path = $this->getPath($name, $path);

		$stub = $this->getStub('model');
		if (strrpos($name, '/')) {
			$name = explode('/', $name);
			$namespace = $name[0];
			$name = $name[count($name) - 1];
			$this->files->put($path, $this->parseStub($stub, [
				'table' => $this->tableize($name),
				'class' => $this->classify($name),
				'path' => $this->pathify($namespace),
			]));
		} else {

			$this->files->put($path, $this->parseStub($stub, [
				'table' => $this->tableize($name),
				'class' => $this->classify($name),
				'path' => $this->pathify(null),
			]));
		}

		return $path;
	}

	/**
	 * Get the full path name to the migration.
	 * @param  string $name
	 * @param  string $path
	 * @return string
	 */
	protected function getPath($name, $path) {
		return $path . '/' . $this->classify($name) . '.php';
	}

}
