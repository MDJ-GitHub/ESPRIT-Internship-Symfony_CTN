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
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class GestionnaireController extends AbstractController
{
    #[Route('/gestionnaire/main', name: 'app_gestionnaire')]
    public function index(SessionInterface $session, ManagerRegistry $doctrine): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0, 'navire' => $loginnavire]);
        $list = array_reverse($list);
        return $this->render('gestionnaire/index.html.twig', [
            'controller_name' => 'Gestionnaire_Personnels',
            'list' => $list,
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'filn' => "",
            'fils' => "Tout",
            'fild' => "Tout",
            'filt' => "",
            'filf' => "Tout",
            'file' => "",
        ]);
    }

    

    #[Route('/gestionnaire/mov', name: 'app_gestionnaire_mov')]
    public function mov(SessionInterface $session, MouvementRepository $repository): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');



        $list = $repository->findNav($loginnavire);
        $list = array_reverse($list);


        $hibaMovements = array_filter($list, function ($movement) use ($loginmat) {
            return $movement->getMatriculeP()->getId() === $loginmat;
        });
      
        if (count($hibaMovements) === 0) {
            // No movements with matriculep == 'hiba'
            // Filter out movements with etat == 'programme'
            $list = array_filter($list, function ($movement) {
                return $movement->getEtat() !== 'Programmé';
            });
        } 

        return $this->render('gestionnaire/mov.html.twig', [
            'controller_name' => 'Gestionnaire_Mouvements',
            'list' => $list,
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'filn' => "",
            'fils' => "Tout",
            'filpdep' => "Tout",
            'filpdes' => "Tout",
            'filf' => "Tout",
            'file' => "Tout",
        ]);
    }

    #[Route('/gestionnaire/sta', name: 'app_gestionnaire_sta')]
    public function sta(SessionInterface $session, MouvementRepository $repository): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $list = $repository->findNav($loginnavire);
        $list = array_reverse($list);



        return $this->render('gestionnaire/sta.html.twig', [
            'controller_name' => 'Gestionnaire_Stats',
            'list' => $list,
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'filn' => "",
            'fils' => "Tout",
            'filpdep' => "Tout",
            'filpdes' => "Tout",
            'filf' => "Tout",
            'file' => "Tout",
        ]);
    }

    #[Route('/gestionnaire/mov/filtrer', name: 'app_gestionnaire_movf')]
    public function movf(SessionInterface $session, Request $request, MouvementRepository $repository): Response
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');


        $a = $request->get('a');
        $n = $request->get('navigant');
        $f = $request->get('fonction');
        $pdep = $request->get('portdep');
        $pdes = $request->get('portdes');
        $s = $request->get('situation');
        $e = $request->get('etat');

        $list = $repository->findNav($loginnavire);
        $list = array_reverse($list);

        if ($a == "a") {

            if ($n != null) {
                $list = array_filter($list, function ($item) use ($n) {
                    $fullName = $item->getMatriculep()->getPrenom() . ' ' . $item->getMatriculep()->getNom();
                    return strpos($n, $fullName) !== false;
                });
            }


            if ($f != "Tout") {
                $list = array_filter($list, function ($item) use ($f) {
                    return $item->getMatriculep()->getFonction() == $f;
                });
            }

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
            $n = "";
            $f = "Tout";
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
            'filn' => $n,
            'fils' => $s,
            'filpdep' => $pdep,
            'filpdes' => $pdes,
            'filf' => $f,
            'file' => $e
        ]);
    }

    #[Route('/gestionnaire/main/filtrer', name: 'app_gestionnaire_f')]
    public function indexf(SessionInterface $session, Request $request, ManagerRegistry $doctrine): Response
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');


        $a = $request->get('a');
        $n = $request->get('navigant');
        $e = $request->get('email');
        $t = $request->get('tel');
        $f = $request->get('fonction');
        $s = $request->get('sexe');
        $d = $request->get('d');


        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0, 'navire' => $loginnavire]);
        $list = array_reverse($list);


        if ($a == "a") {

            if ($n != null) {
                $list = array_filter($list, function ($item) use ($n) {
                    $fullName = $item->getPrenom() . ' ' . $item->getNom();
                    return strpos($n, $fullName) !== false;
                });
            }

            if ($e != null) {
                $list = array_filter($list, function ($item) use ($e) {
                    $fullName = $item->getEmail();
                    return strpos($e, $fullName) !== false;
                });
            }


            if ($t != null) {
                $list = array_filter($list, function ($item) use ($t) {
                    $fullName = $item->getTel();
                    return strpos($t, $fullName) !== false;
                });
            }


            if ($f != "Tout") {
                $list = array_filter($list, function ($item) use ($f) {
                    return $item->getFonction() == $f;
                });
            }

            if ($s != "Tout") {
                $list = array_filter($list, function ($item) use ($s) {
                    return $item->getSexe() == $s;
                });
            }

            if ($d == "Disponible") {
                $list = array_filter($list, function ($item) use ($d) {
                    return $item->getDatecon() <= new \DateTime();
                });
            }

            if ($d == "Indisponible") {
                $list = array_filter($list, function ($item) use ($d) {
                    return $item->getDatecon() > new \DateTime();
                });
            }
        } else {
            $n = "";
            $f = "Tout";
            $s = "Tout";
            $d = "Tout";
            $e = "";
            $t = "";
        }



        return $this->render('gestionnaire/index.html.twig', [
            'controller_name' => 'Gestionnaire_Mouvements',
            'list' => $list,
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'filn' => $n,
            'fils' => $s,
            'fild' => $d,
            'filt' => $t,
            'filf' => $f,
            'file' => $e
        ]);
    }

    #[Route('/gestionnaire/eva/{mat}', name: 'app_gestionnaire_eva')]
    public function eva(SessionInterface $session, ManagerRegistry $doctrine, $mat): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Mouvement::class);
        $mov = $repository->find($mat);

        return $this->render('gestionnaire/eva.html.twig', [
            'controller_name' => 'Gestionnaire_Evaluation',
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'movmat' => $mat
        ]);
    }

    #[Route('/gestionnaire/evaing/{mat}', name: 'app_gestionnaire_evaing')]
    public function evaing(Request $request, ManagerRegistry $doctrine, $mat): Response
    {
        $loginmat = 1;
        $note = $request->get('note');
        $commantaire = $request->get('commantaire');

        $eva = new Evaluation();

        $eva->setNote($note);
        $eva->setCommentaire($commantaire);

        $repository = $doctrine->getRepository(Personnel::class);
        $pers = $repository->find($loginmat);

        $repository = $doctrine->getRepository(Mouvement::class);
        $mov = $repository->find($mat);

        $eva->setMatriculem($mov);
        $eva->setMatriculep($pers);

        $mov->setEtat("Evalué");
        $dm = $doctrine->getManager();
        $dm->persist($eva);
        $dm->flush();
        return $this->redirectToRoute('app_gestionnaire_mov');
    }

    #[Route('/gestionnaire/evaa', name: 'app_gestionnaire_evaa')]
    public function evaa(SessionInterface $session, ManagerRegistry $doctrine, MouvementRepository $repository): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $list = $repository->findNav($loginnavire);


        $list = array_filter($list, function ($item) {
            // Replace 'attributeName' with the actual attribute name you want to filter by
            return $item->getEvaluation() !== null;
        });
        $list = array_reverse($list);


        return $this->render('gestionnaire/evaa.html.twig', [
            'controller_name' => 'Gestionnaire_List_Evaluations',
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'list' => $list,
            'filn' => '',
            'fils' => 'Tout',
            'filpdep' => 'Tout',
            'filpdes' => 'Tout',
            'filf' => 'Tout',
            'file' => -1
        ]);
    }

    #[Route('/gestionnaire/evaa/filter', name: 'app_gestionnaire_evaaf')]
    public function evaaf(Request $request, SessionInterface $session, ManagerRegistry $doctrine, MouvementRepository $repository): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $list = $repository->findNav($loginnavire);

        $list = array_filter($list, function ($item) {
            // Replace 'attributeName' with the actual attribute name you want to filter by
            return $item->getEvaluation() !== null;
        });
        $list = array_reverse($list);

        $a = $request->get('a');
        $n = $request->get('navigant');
        $f = $request->get('fonction');
        $pdep = $request->get('portdep');
        $pdes = $request->get('portdes');
        $s = $request->get('situation');
        $e = $request->get('note');



        if ($a == "a") {

            if ($n != null) {
                $list = array_filter($list, function ($item) use ($n) {
                    $fullName = $item->getMatriculep()->getPrenom() . ' ' . $item->getMatriculep()->getNom();
                    return strpos($n, $fullName) !== false;
                });
            }


            if ($f != "Tout") {
                $list = array_filter($list, function ($item) use ($f) {
                    return $item->getMatriculep()->getFonction() == $f;
                });
            }

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
            $n = "";
            $f = "Tout";
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
            'filn' => $n,
            'fils' => $s,
            'filpdep' => $pdep,
            'filpdes' => $pdes,
            'filf' => $f,
            'file' => $e
        ]);
    }

    #[Route('/gestionnaire/deb/{mat}', name: 'app_gestionnaire_deb')]
    public function deb(Request $request, SessionInterface $session, ManagerRegistry $doctrine, $mat): Response
    {
        $action = $request->get('action');
        $date = $request->get('datedeb');
        $datee = $request->get('dateemb');

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Mouvement::class);
        $mov = $repository->find($mat);
        $per = $mov->getMatriculep();
        $selectmat = $per->getId();
        $selectpren = $per->getPrenom();
        $selectnom = $per->getNom();
        $selectfn =  $per->getFonction();
        $selectnavire = $per->getNavire();


        if ($action === 'a') {
            if (empty($date)) {
                $date = new \DateTime();
            } else {
                $date = new \DateTime($date);
            }
            $datecon = $per->getDatecon();
            $dateembc = $mov->getDateembc();

            if ($datecon > $dateembc) {
                $interval = $dateembc->diff($datecon);
                $dayc = $interval->days;
            } else {
                $dayc = 0; // Datecon is not earlier than the current day.
            }

            $interval = $dateembc->diff($date);
            $dayc = $dayc + $interval->days;
            $datecon = clone $date;
            $datecon->modify("+$dayc days");
            $per->setDatecon($datecon);
            $mov->setDatedebc($date);

            $mov->setEtat("Debarqué");
            $dm = $doctrine->getManager();
            $dm->persist($mov);
            $dm->persist($per);
            $dm->flush();
            return $this->redirectToRoute('app_gestionnaire_mov');
        } else if ($action === 'e') {
            if (empty($datee)) {
                $datee = new \DateTime();
            } else {
                $datee = new \DateTime($datee);
            }
            $mov->setDateembc($datee);
            $mov->setEtat("Embarqué");
            $dm = $doctrine->getManager();
            $dm->persist($mov);
            $dm->flush();
            return $this->redirectToRoute('app_gestionnaire_mov');
        } else if ($action === 'd') {
            $mov->setEtat("Absent");
            $dm = $doctrine->getManager();
            $dm->persist($mov);
            $dm->flush();
            return $this->redirectToRoute('app_gestionnaire_mov');
        } else if ($action === 'c') {
            $mov->setEtat("Annulé");
            $dm = $doctrine->getManager();
            $dm->persist($mov);
            $dm->flush();
            return $this->redirectToRoute('app_gestionnaire_mov');
        } else {

            if (empty($date)) {
                $date = new \DateTime();
            } else {
                $date = new \DateTime($date);
            }

            if ($mov->getEtat() != "Debarqué" and $mov->getEtat() != "Evalué") {

                $repositoryp = $doctrine->getRepository(Personnel::class);
                $datecon = $per->getDatecon();
                $dateembc = $mov->getDateembc();

                if ($datecon < $dateembc) {
                    $interval = $dateembc->diff($datecon);
                    $dayc = $interval->days;
                } else {
                    $dayc = 0; // Datecon is not earlier than the current day.
                }

                $interval = $dateembc->diff($date);
                $dayc = $dayc + $interval->days;
                $datecon = clone $date;
                $datecon->modify("+$dayc days");
                $per->setDatecon($datecon);
                $mov->setDatedebc($date);

                $mov->setEtat("Debarqué");
                $dm = $doctrine->getManager();
                $dm->persist($mov);
                $dm->persist($per);
                $dm->flush();
            }
            return $this->render('gestionnaire/eva.html.twig', [
                'controller_name' => 'Gestionnaire_Evaluation',
                'movmat' => $mat,
                'loginnom' => $loginnom,
                'loginnavire' => $loginnavire,
                'loginmat' => $loginmat,
                'selectmat' => $selectmat,
                'selectpren' => $selectpren,
                'selectnom' => $selectnom,
                'selectfn' => $selectfn,
                'selectnavire' => $selectnavire

            ]);
        }
    }


    #[Route('/gestionnaire/mov/pdf/{n}_{f}_{pdep}_{pdes}_{s}_{e}', name: 'app_gestionnaire_pdf')]
    public function generatePdf(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $data = $repository->findNav($loginnavire);
        $data = array_reverse($data);
        if ($n != " ") {
            $data = array_filter($data, function ($item) use ($n) {
                $fullName = $item->getMatriculep()->getPrenom() . ' ' . $item->getMatriculep()->getNom();
                return strpos($n, $fullName) !== false;
            });
        }


        if ($f != "Tout") {
            $data = array_filter($data, function ($item) use ($f) {
                return $item->getMatriculep()->getFonction() == $f;
            });
        }

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

    #[Route('/gestionnaire/mov/csv/{n}_{f}_{pdep}_{pdes}_{s}_{e}', name: 'app_gestionnaire_csv')]
    public function generateCsv(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $data = $repository->findNav($loginnavire);
        $data = array_reverse($data);

        if ($n != " ") {
            $data = array_filter($data, function ($item) use ($n) {
                $fullName = $item->getMatriculep()->getPrenom() . ' ' . $item->getMatriculep()->getNom();
                return strpos($n, $fullName) !== false;
            });
        }


        if ($f != "Tout") {
            $data = array_filter($data, function ($item) use ($f) {
                return $item->getMatriculep()->getFonction() == $f;
            });
        }

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


    #[Route('/gestionnaire/main/pdf/{n}_{f}_{t}_{d}_{s}_{e}', name: 'app_gestionnaire_mpdf')]
    public function generatemPdf(SessionInterface $session, ManagerRegistry $doctrine, $n, $f, $t, $d, $s, $e)
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0, 'navire' => $loginnavire]);

        $list = array_reverse($list);

        if ($n != " ") {
            $list = array_filter($list, function ($item) use ($n) {
                $fullName = $item->getPrenom() . ' ' . $item->getNom();
                return strpos($n, $fullName) !== false;
            });
        }

        if ($e != " ") {
            $list = array_filter($list, function ($item) use ($e) {
                $fullName = $item->getEmail();
                return strpos($e, $fullName) !== false;
            });
        }


        if ($t != " ") {
            $list = array_filter($list, function ($item) use ($t) {
                $fullName = $item->getTel();
                return strpos($t, $fullName) !== false;
            });
        }


        if ($f != "Tout") {
            $list = array_filter($list, function ($item) use ($f) {
                return $item->getFonction() == $f;
            });
        }

        if ($s != "Tout") {
            $list = array_filter($list, function ($item) use ($s) {
                return $item->getSexe() == $s;
            });
        }

        if ($d == "Disponible") {
            $list = array_filter($list, function ($item) use ($d) {
                return $item->getDatecon() <= new \DateTime();
            });
        }

        if ($d == "Indisponible") {
            $list = array_filter($list, function ($item) use ($d) {
                return $item->getDatecon() > new \DateTime();
            });
        }


        // Fetch the data from the repository

        // Create an instance of Dompdf
        $dompdf = new Dompdf();

        // Load a Twig template with the data
        $html = $this->renderView('gestionnaire/mpdf.html.twig', [
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

    #[Route('/gestionnaire/main/csv/{n}_{f}_{t}_{d}_{s}_{e}', name: 'app_gestionnaire_mcsv')]
    public function generatemCsv(SessionInterface $session, ManagerRegistry $doctrine, $n, $f, $t, $d, $s, $e)
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0, 'navire' => $loginnavire]);

        $list = array_reverse($list);

        if ($n != " ") {
            $list = array_filter($list, function ($item) use ($n) {
                $fullName = $item->getPrenom() . ' ' . $item->getNom();
                return strpos($n, $fullName) !== false;
            });
        }

        if ($e != " ") {
            $list = array_filter($list, function ($item) use ($e) {
                $fullName = $item->getEmail();
                return strpos($e, $fullName) !== false;
            });
        }


        if ($t != " ") {
            $list = array_filter($list, function ($item) use ($t) {
                $fullName = $item->getTel();
                return strpos($t, $fullName) !== false;
            });
        }


        if ($f != "Tout") {
            $list = array_filter($list, function ($item) use ($f) {
                return $item->getFonction() == $f;
            });
        }

        if ($s != "Tout") {
            $list = array_filter($list, function ($item) use ($s) {
                return $item->getSexe() == $s;
            });
        }

        if ($d == "Disponible") {
            $list = array_filter($list, function ($item) use ($d) {
                return $item->getDatecon() <= new \DateTime();
            });
        }

        if ($d == "Indisponible") {
            $list = array_filter($list, function ($item) use ($d) {
                return $item->getDatecon() > new \DateTime();
            });
        }

        // 2. Create a CSV Data Array
        $csvData = [];
        $csvData[] = ['Mat', 'Prenom', 'Nom', 'Date Nais.', 'Lieu Nais.', 'Email', 'Tel', 'Fonction', 'Navire', 'Disponible'];

        foreach ($list as $movement) {
            $csvData[] = [
                $movement->getId(),
                $movement->getNom(), // Assuming you have a method to get Matriculep in the Navigant entity.
                $movement->getPrenom(),
                $movement->getDaten() ? $movement->getDaten()->format('Y-m-d') : ' ', // Check if Date Emb is not null, insert space if null
                $movement->getLieun(),
                $movement->getEmail(),
                $movement->getTel(),
                $movement->getFonction(),
                $movement->getNavire(),
                $movement->getDatecon() ? $movement->getDatecon()->format('Y-m-d') : ' ',
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
        $response->headers->set('Content-Disposition', 'attachment; filename="personnel_data.csv"');

        return $response;
    }

    #[Route('/gestionnaire/evaa/pdf/{n}_{f}_{pdep}_{pdes}_{s}_{e}', name: 'app_gestionnaire_epdf')]
    public function generatePdfe(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $list = $repository->findNav($loginnavire);

        $list = array_filter($list, function ($item) {
            // Replace 'attributeName' with the actual attribute name you want to filter by
            return $item->getEvaluation() !== null;
        });
        $list = array_reverse($list);

        if ($n != " ") {
            $list = array_filter($list, function ($item) use ($n) {
                $fullName = $item->getMatriculep()->getPrenom() . ' ' . $item->getMatriculep()->getNom();
                return strpos($n, $fullName) !== false;
            });
        }


        if ($f != "Tout") {
            $list = array_filter($list, function ($item) use ($f) {
                return $item->getMatriculep()->getFonction() == $f;
            });
        }

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

    #[Route('/gestionnaire/evaa/csv/{n}_{f}_{pdep}_{pdes}_{s}_{e}', name: 'app_gestionnaire_ecsv')]
    public function generateeCsv(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $list = $repository->findNav($loginnavire);

        $list = array_filter($list, function ($item) {
            // Replace 'attributeName' with the actual attribute name you want to filter by
            return $item->getEvaluation() !== null;
        });
        $list = array_reverse($list);

        if ($n != " ") {
            $list = array_filter($list, function ($item) use ($n) {
                $fullName = $item->getMatriculep()->getPrenom() . ' ' . $item->getMatriculep()->getNom();
                return strpos($n, $fullName) !== false;
            });
        }


        if ($f != "Tout") {
            $list = array_filter($list, function ($item) use ($f) {
                return $item->getMatriculep()->getFonction() == $f;
            });
        }

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
