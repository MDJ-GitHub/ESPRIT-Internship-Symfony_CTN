<?php

namespace App\Controller;

use App\Entity\Evaluation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Personnel;
use App\Entity\Mouvement;
use App\Repository\MouvementRepository;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class NavigantController extends AbstractController
{
    #[Route('/navigant/main', name: 'app_navigant')]
    public function index(SessionInterface $session,ManagerRegistry $doctrine): Response
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Mouvement::class);
        
        $list = $repository->findBy([
            'archived' => 0,
            'matriculep' => $loginmat,
        ]);
        $list = array_reverse($list);
        
        return $this->render('navigant/index.html.twig', [
            'controller_name' => 'NavigantController',
            'list' => $list,
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'loginfn' => $loginfn,
            'fils' => "Tout",
            'filpdep' => "Tout",
            'filpdes' => "Tout",
            'file' => "Tout",
            
        ]);
    }

    #[Route('/navigant/main/filtrer', name: 'app_navigant_movf')]
    public function movf(SessionInterface $session, Request $request, MouvementRepository $repository): Response
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');


        $a = $request->get('a');

        $pdep = $request->get('portdep');
        $pdes = $request->get('portdes');
        $s = $request->get('situation');
        $e = $request->get('etat');

        $list = $repository->findBy([
            'archived' => 0,
            'matriculep' => $loginmat,
        ]);
        $list = array_reverse($list);

        if ($a == "a") {

            if ($s != "Tout") {
                $list = array_filter($list, function ($item) use ($s) {
                    return $item->getSituation() == $s;
                });
            }
            if ($pdep != "Tout") {
                $list = array_filter($list, function ($item) use ($pdep) {
                    return $item->getPortdep() == $pdep;
                });
            }
            if ($pdes != "Tout") {
                $list = array_filter($list, function ($item) use ($pdes) {
                    return $item->getPortdes() == $pdes;
                });
            }

            if ($e != "Tout") {
                $list = array_filter($list, function ($item) use ($e) {
                    return $item->getEtat() == $e;
                });
            }
        } else {
            $e = "Tout";
            $pdes = "Tout";
            $pdep = "Tout";
            $s = "Tout";
        }



        return $this->render('gestionnaire/mov.html.twig', [
            'controller_name' => 'Gestionnaire_Mouvements',
            'list' => $list,
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'fils' => $s,
            'filpdep' => $pdep,
            'filpdes' => $pdes,
            'file' => $e
        ]);
    }

    #[Route('/navigant/mod', name: 'app_navigant_mod')]
    public function mod(SessionInterface $session,ManagerRegistry $doctrine): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $per = $repository->find($loginmat);

        $initprenom = $per->getPrenom();
        $initnom = $per->getNom();
        $initdaten = $per->getDaten();
        $initlieun = $per->getLieun();
        $initsexe = $per->getSexe();
        $initemail = $per->getEmail();
        $inittel = $per->getTel();
        $initfonction = $per->getFonction();
        $initnavire = $per->getnavire();


        return $this->render('navigant/mod.html.twig', [
            'controller_name' => 'Navigant_Modifier_Utilisateur',
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'initprenom' => $initprenom,
            'initnom' => $initnom,
            'initsexe' => $initsexe,
            'initdaten' => $initdaten,
            'initlieun' => $initlieun,
            'initemail' => $initemail,
            'inittel' => $inittel,
            'initfonction' => $initfonction,
            'initnavire' => $initnavire,
            'loginfn' => $loginfn
        ]);
    }

    #[Route('/navigant/moding/{mat}', name: 'app_navigant_moding')]
    public function moding(Request $request, ManagerRegistry $doctrine, $mat): Response
    {

        $prenom = $request->get('prenom');
        $nom = $request->get('nom');
        $daten = $request->get('daten');
        $lieun = $request->get('lieun');
        $sexe = $request->get('sexe');
        $email = $request->get('email');
        $tel = $request->get('tel');
        $navire = $request->get('navire');
        $fonction = $request->get('fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $per = $repository->find($mat);

        $per->setPrenom($prenom);
        $per->setNom($nom);
        $per->setDaten(new \DateTime($daten));
        $per->setLieun($lieun);
        $per->setEmail($email);
        $per->setTel($tel);
        $per->setSexe($sexe);
        $per->setNavire($navire);
        $per->setFonction($fonction);

        $dm = $doctrine->getManager();
        $dm->flush();

        return $this->redirectToRoute('app_navigant');
    }

    #[Route('/navigant/evaa/', name: 'app_navigant_evaa')]
    public function evaa(SessionInterface $session,ManagerRegistry $doctrine, MouvementRepository $repository): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $list = $repository->findP($loginnavire,$loginmat);

        $list = array_filter($list, function($item) {
            // Replace 'attributeName' with the actual attribute name you want to filter by
            return $item->getEvaluation() !== null;
        });

        $list = array_reverse($list);
        

        return $this->render('navigant/evaa.html.twig', [
            'controller_name' => 'Gestionnaire_List_Evaluations',
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'list' => $list,
            'loginfn' => $loginfn,
            'fils' => 'Tout',
            'filpdep' => 'Tout',
            'filpdes' => 'Tout',
            'file' => -1

        ]);
    }

    #[Route('/navigant/evaa/filter', name: 'app_navigant_evaaf')]
    public function evaaf(Request $request, SessionInterface $session, ManagerRegistry $doctrine, MouvementRepository $repository): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
       
        $list = $repository->findP($loginnavire,$loginmat);

        $list = array_filter($list, function($item) {
            // Replace 'attributeName' with the actual attribute name you want to filter by
            return $item->getEvaluation() !== null;
        });
        $list = array_reverse($list);

        $a = $request->get('a');
        $pdep = $request->get('portdep');
        $pdes = $request->get('portdes');
        $s = $request->get('situation');
        $e = $request->get('note');



        if ($a == "a") {


            if ($s != "Tout") {
                $list = array_filter($list, function ($item) use ($s) {
                    return $item->getSituation() == $s;
                });
            }
            if ($pdep != "Tout") {
                $list = array_filter($list, function ($item) use ($pdep) {
                    return $item->getPortdep() == $pdep;
                });
            }
            if ($pdes != "Tout") {
                $list = array_filter($list, function ($item) use ($pdes) {
                    return $item->getPortdes() == $pdes;
                });
            }

            if ($e != -1) {
                $list = array_filter($list, function ($item) use ($e) {
                    return $item->getEvaluation()->getNote() == $e;
                });
            }
        } else {
            $e = -1;
            $pdes = "Tout";
            $pdep = "Tout";
            $s = "Tout";
        }


        return $this->render('gestionnaire/evaa.html.twig', [
            'controller_name' => 'Gestionnaire_List_Evaluations',
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'list' => $list,
            'fils' => $s,
            'filpdep' => $pdep,
            'filpdes' => $pdes,
            'file' => $e
        ]);
    }

    #[Route('/navigant/main/pdf/{pdep}_{pdes}_{s}_{e}', name: 'app_navigant_pdf')]
    public function generatePdf(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $data = $repository->findBy([
            'archived' => 0,
            'matriculep' => $loginmat,
        ]);

        $list = array_reverse($list);
        

        if ($s != "Tout") {
            $data = array_filter($data, function ($item) use ($s) {
                return $item->getSituation() == $s;
            });
        }
        if ($pdep != "Tout") {
            $data = array_filter($data, function ($item) use ($pdep) {
                return $item->getPortdep() == $pdep;
            });
        }
        if ($pdes != "Tout") {
            $data = array_filter($data, function ($item) use ($pdes) {
                return $item->getPortdes() == $pdes;
            });
        }

        if ($e != "Tout") {
            $data = array_filter($data, function ($item) use ($e) {
                return $item->getEtat() == $e;
            });
        }

        // Fetch the data from the repository

        // Create an instance of Dompdf
        $dompdf = new Dompdf();

        // Load a Twig template with the data
        $html = $this->renderView('gestionnaire/pdf.html.twig', [
            'data' => $data,
        ]);

        $dompdf->loadHtml($html);

        // Set options (optional)
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf->setOptions($options);

        $dompdf->render();
        // Render the PDF (choose a name and store it in a variable)
        $pdf = $dompdf->output();

        // Return a response with the PDF content
        return new \Symfony\Component\HttpFoundation\Response(
            $pdf,
            \Symfony\Component\HttpFoundation\Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
            ]
        );
    }

    #[Route('/navigant/main/csv/{pdep}_{pdes}_{s}_{e}', name: 'app_navigant_csv')]
    public function generateCsv(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $data = $repository->findBy([
            'archived' => 0,
            'matriculep' => $loginmat,
        ]);
        $list = array_reverse($list);

        if ($s != "Tout") {
            $data = array_filter($data, function ($item) use ($s) {
                return $item->getSituation() == $s;
            });
        }
        if ($pdep != "Tout") {
            $data = array_filter($data, function ($item) use ($pdep) {
                return $item->getPortdep() == $pdep;
            });
        }
        if ($pdes != "Tout") {
            $data = array_filter($data, function ($item) use ($pdes) {
                return $item->getPortdes() == $pdes;
            });
        }

        if ($e != "Tout") {
            $data = array_filter($data, function ($item) use ($e) {
                return $item->getEtat() == $e;
            });
        }

        // 2. Create a CSV Data Array
        $csvData = [];
        $csvData[] = ['Mat', 'Navigant', 'Date Emb', 'Date Embc', 'Date Deb', 'Date DebC', 'Port Dep', 'Port Des', 'Situation', 'Fonction', 'Etat'];

        foreach ($data as $movement) {
            $csvData[] = [
                $movement->getId(),
                $movement->getMatriculep()->getNom() . ' ' . $movement->getMatriculep()->getPrenom(), // Assuming you have a method to get Matriculep in the Navigant entity.
                $movement->getDateEmb() ? $movement->getDateEmb()->format('Y-m-d') : ' ', // Check if Date Emb is not null, insert space if null
                $movement->getDateEmbc() ? $movement->getDateEmbc()->format('Y-m-d') : ' ', // Check if Date Embc is not null, insert space if null
                $movement->getDateDeb() ? $movement->getDateDeb()->format('Y-m-d') : ' ', // Check if Date Deb is not null, insert space if null
                $movement->getDateDebc() ? $movement->getDateDebc()->format('Y-m-d') : ' ', // Check if Date DebC is not null, insert space if null
                $movement->getPortDep(),
                $movement->getPortDes(),
                $movement->getSituation(),
                $movement->getMatriculep()->getFonction(),
                $movement->getEtat(),
            ];
        }

        // 3. Generate the CSV File
        $csvContent = implode(PHP_EOL, array_map(function ($row) {
            return implode(',', $row);
        }, $csvData));

        // Create a response with the CSV content
        $response = new Response($csvContent);

        // Set headers to indicate it's a CSV file
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="movement_data.csv"');

        return $response;
    }

    #[Route('/navigant/evaa/pdf/{pdep}_{pdes}_{s}_{e}', name: 'app_navigant_epdf')]
    public function generatePdfe(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $list = $repository->findBy([
            'archived' => 0,
            'matriculep' => $loginmat,
        ]);
        $list = array_reverse($list);

        $list = array_filter($list, function ($item) {
            // Replace 'attributeName' with the actual attribute name you want to filter by
            return $item->getEvaluation() !== null;
        });


        if ($s != "Tout") {
            $list = array_filter($list, function ($item) use ($s) {
                return $item->getSituation() == $s;
            });
        }
        if ($pdep != "Tout") {
            $list = array_filter($list, function ($item) use ($pdep) {
                return $item->getPortdep() == $pdep;
            });
        }
        if ($pdes != "Tout") {
            $list = array_filter($list, function ($item) use ($pdes) {
                return $item->getPortdes() == $pdes;
            });
        }

        if ($e != -1) {
            $list = array_filter($list, function ($item) use ($e) {
                return $item->getEvaluation()->getNote() == $e;
            });
        }

        // Fetch the data from the repository

        // Create an instance of Dompdf
        $dompdf = new Dompdf();

        // Load a Twig template with the data
        $html = $this->renderView('gestionnaire/epdf.html.twig', [
            'data' => $list,
        ]);

        $dompdf->loadHtml($html);

        // Set options (optional)
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf->setOptions($options);

        $dompdf->render();
        // Render the PDF (choose a name and store it in a variable)
        $pdf = $dompdf->output();

        // Return a response with the PDF content
        return new \Symfony\Component\HttpFoundation\Response(
            $pdf,
            \Symfony\Component\HttpFoundation\Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
            ]
        );
    }

    #[Route('/navigant/evaa/csv/{pdep}_{pdes}_{s}_{e}', name: 'app_navigant_ecsv')]
    public function generateeCsv(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $list = $repository->findBy([
            'archived' => 0,
            'matriculep' => $loginmat,
        ]);
        $list = array_reverse($list);

        $list = array_filter($list, function ($item) {
            // Replace 'attributeName' with the actual attribute name you want to filter by
            return $item->getEvaluation() !== null;
        });


        if ($s != "Tout") {
            $list = array_filter($list, function ($item) use ($s) {
                return $item->getSituation() == $s;
            });
        }
        if ($pdep != "Tout") {
            $list = array_filter($list, function ($item) use ($pdep) {
                return $item->getPortdep() == $pdep;
            });
        }
        if ($pdes != "Tout") {
            $list = array_filter($list, function ($item) use ($pdes) {
                return $item->getPortdes() == $pdes;
            });
        }

        if ($e != -1) {
            $list = array_filter($list, function ($item) use ($e) {
                return $item->getEvaluation()->getNote() == $e;
            });
        }

        // 2. Create a CSV Data Array
        $csvData = [];
        $csvData[] = ['Mat', 'Mat Mv', 'Navigant', 'Date Emb', 'Date Embc', 'Date Deb', 'Date DebC', 'Port Dep', 'Port Des', 'Situation', 'Fonction', 'Note', 'Commentaire'];

        foreach ($list as $movement) {
            $csvData[] = [
                $movement->getEvaluation()->getId(),
                $movement->getId(),
                $movement->getMatriculep()->getNom() . ' ' . $movement->getMatriculep()->getPrenom(), // Assuming you have a method to get Matriculep in the Navigant entity.
                $movement->getDateEmb() ? $movement->getDateEmb()->format('Y-m-d') : ' ', // Check if Date Emb is not null, insert space if null
                $movement->getDateEmbc() ? $movement->getDateEmbc()->format('Y-m-d') : ' ', // Check if Date Embc is not null, insert space if null
                $movement->getDateDeb() ? $movement->getDateDeb()->format('Y-m-d') : ' ', // Check if Date Deb is not null, insert space if null
                $movement->getDateDebc() ? $movement->getDateDebc()->format('Y-m-d') : ' ', // Check if Date DebC is not null, insert space if null
                $movement->getPortDep(),
                $movement->getPortDes(),
                $movement->getSituation(),
                $movement->getMatriculep()->getFonction(),
                $movement->getEvaluation()->getCommentaire(),
                $movement->getEvaluation()->getNote(),
            ];
        }

        // 3. Generate the CSV File
        $csvContent = implode(PHP_EOL, array_map(function ($row) {
            return implode(',', $row);
        }, $csvData));

        // Create a response with the CSV content
        $response = new Response($csvContent);

        // Set headers to indicate it's a CSV file
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="evaluations_data.csv"');

        return $response;
    }

}
