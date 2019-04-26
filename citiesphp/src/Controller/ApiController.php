<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cities;
use App\Form\CityType;
/**
 * Api controller.
 * @Route("/api", name="api_")
 */
class ApiController extends AbstractFOSRestController
{
  /**
   * Lists all Cities.
   * @Rest\Get("/cities")
   *
   * @return Response
   */
  public function getCitiesAction()
  {
    $repository = $this->getDoctrine()->getRepository(Cities::class);
    $cities = $repository->findall();
    return $this->handleView($this->view($cities));
  }
  /**
   * Create City.
   * @Rest\Post("/city")
   *
   * @return Response
   */
  public function postCityAction(Request $request)
  {
    $manager = $this->getDoctrine()->getManager();
if($manager->getRepository("\App\Entity\Cities")->findAll())
$lname = $manager->getRepository("\App\Entity\Cities")->findLastName();
else
$lname = "";


    $city = new Cities();
    $city->setPrev($lname);
    $city->setName($request->query->get('name'));
    $city->setStatus($request->query->get('status'));

    $manager->persist($city);
    $manager->flush();


      return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));


// return $this->handleView($this->view($form->getErrors()));
  }
}
