<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Cities;



class CitiesController extends AbstractController
{

    /**
     * @Route("/", name="cities")
     */
    public function index($flag=0)
    {
      $manager = $this->getDoctrine()->getManager();

      $cities = $manager->getRepository("\App\Entity\Cities")->findAll();
      return $this->render('City.html.twig',['cities' => $cities, 'flag' =>$flag]);
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/CitiesController.php',
        // ]);
    }
    /**
    * @Route ("/cities/add", name="add")
    */

    public function addAction(Request $request)
    {
      $manager = $this->getDoctrine()->getManager();
$records = $manager->getRepository("\App\Entity\Cities")->findAll();
if($records)
  $lname = $manager->getRepository("\App\Entity\Cities")->findLastName();
else
  $lname = "";

      if($request->isMethod('post')){
      $name = $request->request->get('cname');
      $status = $request->request->get('rstatus');

      $city = new Cities();
      $city->setName($name);
      $city->setPrev($lname);
      $city->setStatus($status);

      $manager->persist($city);
      $manager->flush();
      }
      return $this->forward('App\Controller\CitiesController::index',['flag' => 1]);
    }
/**
* @Route ("/cities/delete/{id}", name="deletecity")
*/
    public function deleteAction($id){
      $manager = $this->getDoctrine()->getManager();
      $dcity = $manager->find("App\Entity\Cities",$id);
      $manager->remove($dcity);
      $manager->flush();
       return $this->index(4);
    }

/**
* @Route ("/cities/deleteall", name="deleteall")
*/
public function deleteall(){
$manager = $this->getDoctrine()->getManager();
  $records = $manager->getRepository("App\Entity\Cities")->findAll();
  foreach($records as $record){
    $manager->remove($record);
  }
  $manager->flush();
  return $this->index(3);
}
}
