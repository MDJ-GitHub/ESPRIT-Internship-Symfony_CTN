<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Personnel;
use App\Entity\Mouvement;
use App\Repository\PersonnelRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class LoginController extends AbstractController
{
    #[Route('/', name: 'app_login')]
    public function index(): Response
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'Login',
            'error' => ''
        ]);
    }

    #[Route('auth', name: 'app_auth')]
    public function login(PersonnelRepository $rep, ManagerRegistry $doc, Request $request, SessionInterface $session): Response
    {
        // Handle the form submission here
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $user = $rep->findOneByEmailOrTel($username, $username);

        if (!$user) {
            $error =  "Profile n'existe pas !";
            return $this->render('login/index.html.twig', [
                'controller_name' => 'Login',
                'error' => $error
            ]);
        } else {

            if ($user->getMotpasse() == '') {
                $session->set('user_id', $user->getId());
                $session->set('user_prenom', $user->getPrenom());
                $session->set('user_nom', $user->getNom());
                $session->set('user_navire', $user->getNavire());
                $session->set('user_fonction', $user->getFonction());
                $session->set('user_new', 1);
                return $this->redirectToRoute('app_signup');
            }

            if (password_verify($password, $user->getMotpasse())) {
                $session->set('user_id', $user->getId());
                $session->set('user_prenom', $user->getPrenom());
                $session->set('user_nom', $user->getNom());
                $session->set('user_navire', $user->getNavire());
                $session->set('user_fonction', $user->getFonction());
                $fonction = $session->get('user_fonction');

                $specifiedValues = ['gestionnaire', 'utilisateur', 'commandant'];

                if (!in_array($fonction, $specifiedValues)) {
                    return $this->redirectToRoute('app_navigant');
                } else {

                return $this->redirectToRoute('app_' . strtolower($fonction));
                }
            } else {

                $error =  "Mot de passe incorrect !";
                return $this->render('login/index.html.twig', [
                    'controller_name' => 'Personnels',
                    'error' => $error
                ]);
            }
        }
    }

    #[Route('/signup', name: 'app_signup')]
    public function singup(ManagerRegistry $doctrine, SessionInterface $session): Response
    {
        $loginmat = $session->get('user_id');
        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');;

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


        return $this->render('login/new.html.twig', [
            'controller_name' => 'Signup',
            'loginmat' => $loginmat,
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
            'loginfn' => $loginfn,
            'error' => ''
        ]);
    }

    #[Route('/signup/{mat}', name: 'app_signup_x')]
    public function moding(SessionInterface $session, Request $request, ManagerRegistry $doctrine, $mat): Response
    {

    
        if (intval($mat) == $session->get('user_id') and $session->get('user_new') == 1) {
        $repository = $doctrine->getRepository(Personnel::class);
        $loginmat = $session->get('user_id');
        $per = $repository->find($loginmat);

        $loginnom = $session->get('user_prenom') . ' ' . $session->get('user_nom');
        $loginnavire = $session->get('user_navire');
        $loginfn = $session->get('user_fonction');;

        $initprenom = $per->getPrenom();
        $initnom = $per->getNom();
        $initdaten = $per->getDaten();
        $initlieun = $per->getLieun();
        $initsexe = $per->getSexe();
        $initemail = $per->getEmail();
        $inittel = $per->getTel();

        $password = $request->get('password');
        $passwordc = $request->get('passwordc');

        if ($password != $passwordc) {
            return $this->render('login/new.html.twig', [
                'controller_name' => 'Signup',
                'loginmat' => $loginmat,
                'loginnom' => $loginnom,
                'loginnavire' => $loginnavire,
                'initprenom' => $initprenom,
                'initnom' => $initnom,
                'initsexe' => $initsexe,
                'initdaten' => $initdaten,
                'initlieun' => $initlieun,
                'initemail' => $initemail,
                'inittel' => $inittel,
                'loginfn' => $loginfn,
                'error' => "Les entrées de mot de passe et de confirmation de mot de passe ne correspondent pas !"
            ]);
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $prenom = $request->get('prenom');
            $nom = $request->get('nom');
            $daten = $request->get('daten');
            $lieun = $request->get('lieun');
            $sexe = $request->get('sexe');
            $email = $request->get('email');
            $tel = $request->get('tel');



            $per->setPrenom($prenom);
            $per->setNom($nom);
            $per->setDaten(new \DateTime($daten));
            $per->setLieun($lieun);
            $per->setEmail($email);
            $per->setTel($tel);
            $per->setSexe($sexe);
            $per->setMotpasse($hashedPassword);

            $dm = $doctrine->getManager();
            $dm->flush();

            $session->clear();
        
        return $this->redirectToRoute('app_login');
    }
    } else {
        return $this->redirectToRoute('app_login');
    }
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->clear();

        return $this->render('login/index.html.twig', [
            'controller_name' => 'Login',
            'error' => ''
        ]);
    }
}
