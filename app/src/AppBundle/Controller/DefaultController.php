<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $makeRepo=$this->getDoctrine()->getRepository('AppBundle:Make');
        $carRepo=$this->getDoctrine()->getRepository('AppBundle:Car');
        $data=[];

        $data['list_all_raw']=$carRepo->rawSqlList();
        $data['list_all']=$carRepo->findAll();
        //will not query 1 by one will return all in once.
        $data['list_all_optimize']=$carRepo->optimizeQueryFind();




        $car_id_1=$carRepo->find(1);//find the car having id 1
        $data['only_car_id_1']=$car_id_1;
        $data['only_car_id_1_make']=$car_id_1->getMake()->getName();
        $data['only_car_id_1_optimize']=$carRepo->optimizeQueryFindID(1);


        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', ['data'=>$data]);
    }
}
