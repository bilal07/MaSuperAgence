<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController
{

    /**
     * @var PropertyRepository
     */
    private $repository;
    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {
        /*$property = new Property();
        $property->setTitle('Mon premier bien')
        ->setPrice(200000)
        ->setBedrooms(3)
        ->setDescription('Une petite description')
        ->setSurface(60)
        ->setFloor(4)
        ->setCity('Montpellier')
        ->setAddress('15 boulevard Gambetta')
        ->setPostalCode('34000');
        $em = $this->getDoctrine()->getManager();
        $em->persist($property);
        $em->flush();*/

        $repository = $this->repository->find(1);
        dump($repository);
        return $this->render('property/index.html.twig',[
            'current_menu' => 'propertises'
        ]);
    }
}