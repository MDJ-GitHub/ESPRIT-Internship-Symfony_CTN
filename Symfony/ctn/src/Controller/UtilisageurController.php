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

class UtilisageurController extends AbstractController
{
    #[Route('/utilisageur/main', name: 'app_utilisageur')]
    public function index(SessionInterface $session,ManagerRegistry $doctrine): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');
        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0]);
        $list = array_reverse($list);

        return $this->render('utilisageur/index.html.twig', [
            'controller_name' => 'UtilisageurController',
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

    #[Route('/utilisageur/main/filtrer', name: 'app_utilisageur_f')]
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
        $list = $repository->findBy(['archived' => 0]);
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



        return $this->render('utilisageur/index.html.twig', [
            'controller_name' => 'Utilisageur_Personnels',
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


    #[Route('/utilisageur/add/', name: 'app_utilisageur_add')]
    public function add(SessionInterface $session,ManagerRegistry $doctrine): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');


        return $this->render('utilisageur/add.html.twig', [
            'controller_name' => 'Utilisageur_Ajouter_Utilisateurs',
            'loginnom' => $loginnom,
            'loginnavire' => $loginnavire
        ]);
    }


    #[Route('/utilisageur/mod/{mat}', name: 'app_utilisageur_mod')]
    public function mod(SessionInterface $session,ManagerRegistry $doctrine, $mat): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $per = $repository->find($mat);

        $initprenom = $per->getPrenom();
        $initnom = $per->getNom();
        $initdaten = $per->getDaten();
        $initlieun = $per->getLieun();
        $initsexe = $per->getSexe();
        $initemail = $per->getEmail();
        $inittel = $per->getTel();
        $initfonction = $per->getFonction();
        $initnavire = $per->getnavire();


        return $this->render('utilisageur/mod.html.twig', [
            'controller_name' => 'Utilisageur_Modifier_Utilisateur',
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
        ]);
    }

    #[Route('/utilisageur/adding/', name: 'app_utilisageur_adding')]
    public function adding(Request $request, ManagerRegistry $doctrine): Response
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

        $per = new Personnel();

        $per->setPrenom($prenom);
        $per->setNom($nom);
        $per->setDaten(new \DateTime($daten));
        $per->setLieun($lieun);
        $per->setEmail($email);
        $per->setTel($tel);
        $per->setSexe($sexe);
        $per->setNavire($navire);
        $per->setFonction($fonction);

        $datecon = new DateTime();
        $datecon = $datecon->format('Y-m-d');
        $per->setDatecon(new \DateTime($datecon));

        $dm = $doctrine->getManager();
        $dm->persist($per);
        $dm->flush();

        return $this->redirectToRoute('app_utilisageur');
    }

    #[Route('/utilisageur/moding/{mat}', name: 'app_utilisageur_moding')]
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

        return $this->redirectToRoute('app_utilisageur');
    }

    #[Route('/utilisageur/del/{mat}', name: 'app_utilisageur_del')]
    public function del(ManagerRegistry $doctrine, $mat): Response
    {
        $repository = $doctrine->getRepository(Personnel::class);
        $per = $repository->find($mat);

        $per->setArchived(1);

        $dm = $doctrine->getManager();
        $dm->flush();

        return $this->redirectToRoute('app_utilisageur');
    }
    #[Route('/utilisageur/main/pdf/{n}_{f}_{t}_{d}_{s}_{e}', name: 'app_utilisageur_mpdf')]
    public function generatemPdf(SessionInterface $session, ManagerRegistry $doctrine, $n, $f, $t, $d, $s, $e)
    {

        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0]);



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

    #[Route('/utilisageur/main/csv/{n}_{f}_{t}_{d}_{s}_{e}', name: 'app_utilisageur_mcsv')]
    public function generatemCsv(SessionInterface $session, ManagerRegistry $doctrine, $n, $f, $t, $d, $s, $e)
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');

        $repository = $doctrine->getRepository(Personnel::class);
        $list = $repository->findBy(['archived' => 0]);



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
