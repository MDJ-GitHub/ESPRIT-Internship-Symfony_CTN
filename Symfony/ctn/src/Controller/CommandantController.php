<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Personnel;
use App\Entity\Mouvement;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use DateTime;
use App\Repository\MouvementRepository;
use Dompdf\Dompdf;
use Dompdf\Options;

class CommandantController extends AbstractController
{
    #[Route('/commandant/main', name: 'app_commandant')]
    public function index(SessionInterface $session, ManagerRegistry $doctrine): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');;
        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0]);
        $list = array_reverse($list);

        return $this->render('commandant/index.html.twig', [
            'controller_name' => 'Commandant_Personnels',
            'list' => $list,
            'loginnavire' => $loginnavire,
            'loginnom' => $loginnom,
            'filn' => "",
            'fils' => "Tout",
            'fild' => "Tout",
            'filt' => "",
            'filf' => "Tout",
            'file' => "",
        ]);
    }

    #[Route('/commandant/main/filtrer', name: 'app_commandant_f')]
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



        return $this->render('commandant/index.html.twig', [
            'controller_name' => 'Commandant_Mouvements',
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

    #[Route('/commandant/mov', name: 'app_commandant_mov')]
    public function mov(SessionInterface $session, ManagerRegistry $doctrine): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $repository = $doctrine->getRepository(Mouvement::class);
        $list = $repository->findBy(['archived' => 0]);
        $list = array_reverse($list);

        return $this->render('commandant/mov.html.twig', [
            'controller_name' => 'Commandant_Mouvements',
            'list' => $list,
            'loginnavire' => $loginnavire,
            'loginnom' => $loginnom,
            'filn' => "",
            'fils' => "Tout",
            'filpdep' => "Tout",
            'filpdes' => "Tout",
            'filf' => "Tout",
            'file' => "Tout",
            'filv' => "Tout"
        ]);
    }


    #[Route('/commandant/mov/filtrer', name: 'app_commandant_movf')]
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
        $v = $request->get('navire');

        $list = $repository->findBy(['archived' => 0]);
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
            if ($v != "Tout") {
                $list = array_filter($list, function ($item) use ($v) {
                    return $item->getMatriculep()->getNavire() == $v;
                });
            }
        } else {
            $n = "";
            $f = "Tout";
            $e = "Tout";
            $pdes = "Tout";
            $pdep = "Tout";
            $s = "Tout";
            $v = "Tout";
        }



        return $this->render('commandant/mov.html.twig', [
            'controller_name' => 'Commandant_Mouvements',
            'list' => $list,
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'filn' => $n,
            'fils' => $s,
            'filpdep' => $pdep,
            'filpdes' => $pdes,
            'filf' => $f,
            'file' => $e,
            'filv' => $v
        ]);
    }

    #[Route('/commandant/add/{mat}', name: 'app_commandant_add')]
    public function add(SessionInterface $session, ManagerRegistry $doctrine, $mat): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $per = $repository->find($mat);

        $selectmat = $per->getId();
        $selectpren = $per->getPrenom();
        $selectnom = $per->getNom();
        $selectfn =  $per->getFonction();
        $selectnavire = $per->getNavire();

        return $this->render('commandant/add.html.twig', [
            'controller_name' => 'Commandant_Ajouter_Mouvements',
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire,
            'selectmat' => $selectmat,
            'selectpren' => $selectpren,
            'selectnom' => $selectnom,
            'selectfn' => $selectfn,
            'selectnavire' => $selectnavire
        ]);
    }

    #[Route('/commandant/mod/{mat}', name: 'app_commandant_mod')]
    public function mod(SessionInterface $session, ManagerRegistry $doctrine, $mat): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Mouvement::class);
        $mov = $repository->find($mat);

        $initdateemb = $mov->getDateemb();
        $initdatedeb = $mov->getDatedeb();
        $initportdep = $mov->getPortdep();
        $initportdes = $mov->getPortdes();
        $initsituation = $mov->getSituation();


        $per = $mov->getMatriculep();
        $selectmat = $per->getId();
        $selectpren = $per->getPrenom();
        $selectnom = $per->getNom();
        $selectfn =  $per->getFonction();
        $selectnavire = $per->getNavire();

        return $this->render('commandant/mod.html.twig', [
            'controller_name' => 'Commandant_Modifier_Mouvement',
            'loginnavire' => $loginnavire,
            'loginnom' => $loginnom,
            'selectmat' => $selectmat,
            'selectpren' => $selectpren,
            'selectnom' => $selectnom,
            'selectfn' => $selectfn,
            'selectnavire' => $selectnavire,
            'movmat' => $mat,
            'initdateemb' => $initdateemb,
            'initdatedeb' => $initdatedeb,
            'initportdep' => $initportdep,
            'initportdes' => $initportdes,
            'initsituation' => $initsituation

        ]);
    }

    #[Route('/commandant/adding/{mat}', name: 'app_commandant_adding')]
    public function adding(Request $request, ManagerRegistry $doctrine, $mat): Response
    {
        $dateemb = $request->get('dateemb');
        $datedeb = $request->get('datedeb');
        $portdep = $request->get('portdep');
        $portdes = $request->get('portdes');
        $situation = $request->get('situation');
        $repositoryp = $doctrine->getRepository(Personnel::class);


        $mov = new Mouvement();

        $mov->setDateemb(new \DateTime($dateemb));
        if (!empty($datedeb)) {
            $mov->setDatedeb(new \DateTime($datedeb));
        }
        $mov->setPortdep($portdep);
        $mov->setPortdes($portdes);
        $mov->setSituation($situation);

        $mov->setMatriculep($repositoryp->find($mat));
        $mov->setEtat("Programmé");

        $dm = $doctrine->getManager();
        $dm->persist($mov);
        $dm->flush();

        return $this->redirectToRoute('app_commandant_mov');
    }

    #[Route('/commandant/moding/{mat}', name: 'app_commandant_moding')]
    public function moding(Request $request, ManagerRegistry $doctrine, $mat): Response
    {
        $dateemb = $request->get('dateemb');
        $datedeb = $request->get('datedeb');
        $portdep = $request->get('portdep');
        $portdes = $request->get('portdes');
        $situation = $request->get('situation');

        $repository = $doctrine->getRepository(Mouvement::class);
        $mov = $repository->find($mat);

        $mov->setDateemb(new \DateTime($dateemb));
        if (!empty($datedeb)) {
            $mov->setDatedeb(new \DateTime($datedeb));
        } else {
            $mov->setDatedeb(null);
        }
        $mov->setPortdep($portdep);
        $mov->setPortdes($portdes);
        $mov->setSituation($situation);

        $dm = $doctrine->getManager();
        $dm->flush();

        return $this->redirectToRoute('app_commandant_mov');
    }

    #[Route('/commandant/del/{mat}', name: 'app_commandant_del')]
    public function del(ManagerRegistry $doctrine, $mat): Response
    {
        $repository = $doctrine->getRepository(Mouvement::class);
        $mov = $repository->find($mat);

        $mov->setArchived(1);

        $dm = $doctrine->getManager();
        $dm->flush();

        return $this->redirectToRoute('app_commandant_mov');
    }


    #[Route('/commandant/mov/pdf/{n}_{f}_{pdep}_{pdes}_{s}_{e}', name: 'app_commandant_pdf')]
    public function generatePdf(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $data = $repository->findBy(['archived' => 0]);
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

    #[Route('/commandant/mov/csv/{n}_{f}_{pdep}_{pdes}_{s}_{e}', name: 'app_commandant_csv')]
    public function generateCsv(SessionInterface $session, MouvementRepository $repository, $n, $f, $pdep, $pdes, $s, $e)
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $data = $repository->findBy(['archived' => 0]);
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


    #[Route('/commandant/main/pdf/{n}_{f}_{t}_{d}_{s}_{e}', name: 'app_commandant_mpdf')]
    public function generatemPdf(SessionInterface $session, ManagerRegistry $doctrine, $n, $f, $t, $d, $s, $e)
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0]);

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

    #[Route('/commandant/main/csv/{n}_{f}_{t}_{d}_{s}_{e}', name: 'app_commandant_mcsv')]
    public function generatemCsv(SessionInterface $session, ManagerRegistry $doctrine, $n, $f, $t, $d, $s, $e)
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0]);

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


}
