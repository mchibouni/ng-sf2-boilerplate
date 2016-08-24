<?php

namespace AppBundle\Controller\Rest;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;

class DummyController extends FOSRestController {

	public function getDocumentManager() {
		return $this->get('doctrine_mongodb.odm.document_manager');
	}

	public function getDummyAction() {

		$dm = $this->getDocumentManager();
		$dummies = $dm->getRepository('AppBundle:Dummy')->findAll();

		$serializer = $this->getSerializer();

		return new Response($serializer->serialize($dummies, 'json'));
	}

    /**
     *
     * @return SerializerInterface
     */
    protected function getSerializer() {
        static $result = null;
        if (null == $result) {
            $result = $this->get('jms_serializer');
        }
        return $result;
    }

}
