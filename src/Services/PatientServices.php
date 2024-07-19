<?php


namespace App\Services;

use App\Entity\Patient;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PatientServices
{

    private $EM;
    public function __construct(EntityManagerInterface $EM)
    {
        $this->EM = $EM;
    }

    public function addpatient($request)
    {

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $content = $request->getContent();
        $data = $serializer->deserialize($content, Patient::class, 'json');

        $patient = new Patient;
        $patient->setPatientFName($data->getPatientFName());
        $patient->setPatientLName($data->getPatientLName());
        $patient->setPhone($data->getPhone());
        $patient->setBloodGroup($data->getBloodGroup());
        $patient->setEmail($data->getEmail());
        $patient->setGender($data->getGender());
        $patient->setPatientCondition($data->getPatientCondition());
        $patient->setAdmissionDate(new \DateTime('now'));
        $patient->setDischargeDate(new \DateTime('now'));
        $this->EM->persist($patient);
        $this->EM->flush();
        dd($patient);
    }

    public function getsinglepatient($id)
    {
        $repo = $this->EM->getRepository(Patient::class);
        $patientid = $repo->findOneBy(['id' => $id]);
        if (!$patientid) {
            return 'invalide patient id';
        }
        return $patientid;
    }

    public function getallpatient(){
        $repo=$this->EM->getRepository(Patient::class);
        $allpatient=$repo->findAll();
        if(!$allpatient){
            return "invalide patient";
        }
        return $allpatient;
    }
    public function deletepatient($id){
        $repo=$this->EM->getRepository(Patient::class);
        $deleteid=$repo->findOneBy(['id'=>$id]);

        if(!$deleteid){
            return 'invalide id';
        }
        $deleteid->setStaus('Deleted');
        $this->EM->persist($deleteid);
        $this->EM->flush();
        return '';
    }
}
