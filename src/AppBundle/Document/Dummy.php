<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * @ODM\Document(collection="Dummy")
 */

class Dummy {

	/**
	 * @ODM\Id(strategy="auto")
	 */
	protected $id;

	/**
	 * @ODM\Int
	 * @Expose
	 */
	protected $age;

	/**
	 * @ODM\String
	 */
	protected $name;

	/**
	 * Get age
	 * @return string
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * Set age
	 * @return $this
	 */
	public function setAge($age) {
		$this->age = $age;
		return $this;
	}

	/**
	 * Get name
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set name
	 * @return $this
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

}
