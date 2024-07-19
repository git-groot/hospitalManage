<?php

namespace App\Controller;

use App\Services\PatientServices;
use App\Utils\ApiResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class PatientController extends AbstractController
{
    #[Route('/patient', name: 'app_patient')]
    public function index(): Response
    {
        return $this->render('patient/index.html.twig', [
            'controller_name' => 'PatientController',
        ]);
    }
   
    //post

    #[Route('/api/post/patient',name:'addpatient',methods:'POST')]
    public function addpatient(Request $request,PatientServices $patientServices){

        $result=$patientServices->addpatient($request);
        return new ApiResponse($result, 200, ["Content-Type" => "application/json"], 'json', "Success", ['timezone', "_initializer", "cloner", "isInitialized_", "Password"]);
    }

    // getsingle

    #[Route('/api/getsingle/patient/{id}',name:'getsinglepatient',methods:'POST')]
    public function Patientgetsinngle($id,PatientServices $patientServices){
        
        $result=$patientServices->getsinglepatient($id);
        return new ApiResponse($result, 200, ["Content-Type" => "application/json"], 'json', "Success", ['timezone', "_initializer", "cloner", "isInitialized_", "Password"]);
    }
    // getall
    #[Route('/api/getall/patient',name:'getallpatient',methods:'GET')]
    public function Patientgetall(PatientServices $patientServices){
        
        $result=$patientServices->getallpatient();
        return new ApiResponse($result, 200, ["Content-Type" => "application/json"], 'json', "Success", ['timezone', "_initializer", "cloner", "isInitialized_", "Password"]);
    }
        
    // delete
    #[Route('/api/delete/patient/{id}',name:'deletepatient',methods:'DELETE')]
    public function Patientdelete($id,PatientServices $patientServices){
        
        $result=$patientServices->deletepatient($id);
        return new ApiResponse($result, 200, ["Content-Type" => "application/json"], 'json', "Success", ['timezone', "_initializer", "cloner", "isInitialized_", "Password"]);
    }
        
}
