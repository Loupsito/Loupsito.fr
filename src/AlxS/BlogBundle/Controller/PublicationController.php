<?php

namespace AlxS\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AlxS\BlogBundle\Entity\User;


class PublicationController extends Controller {

    public function indexAction(Request $request) {

        $session = $request->getSession();

        if ($session->has('nameUser') == true) {
            return $this->render('AlxSBlogBundle:Publication:index.html.twig', array(
                        'connecte' => 'true'
            ));
        }
        else {
            return $this->render('AlxSBlogBundle:Publication:index.html.twig', array(
                        'connecte' => 'false'
            ));
        }
    }

    public function viewPageUserAction(Request $request, $userName) {
        /*
         * Ici se fera une recherche dans une entité, pour récupéré les données sur l'utilisateur courant
         */

        //Array to send
        $Arr = array(
            'urlPicture' => 'https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAXKAAAAJDhmOGIxNTQyLWUxYzMtNDU1OS04NDUzLTkzNGIwNzU1MWFlYw.jpg',
            'textContent' => 'The computer world always fascinated me. Days after days, this world
                change and we must always be able to adapt.
		My differents experiences have led me to tell
                me I had to make this world, my expertise and
                my future profession.',
            'userName' => $userName,
        );

        //Recover of the session
        $session = $request->getSession();
        $session->set('nameUser', $userName);

        //If the session exist
        if ($session->has('nameUser')) {
            $Arr['connecte'] = "true";
        }
        else {
            $Arr['connecte'] = "false";
        }

        return $this->render('AlxSBlogBundle:Publication:pageUser.html.twig', $Arr);
    }

    public function signUpAction(Request $request) {

        // On crée un objet Advert
        $advert = new User();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $advert);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
                ->add('LastName', 'text')
                ->add('FirstName', 'text')
                ->add('BirthDate', 'date')
                ->add('mail', 'text')
                ->add('login', 'text')
                ->add('passwd', 'text')
        ;
        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AlxSBlogBundle:Publication:signUp.html.twig', array(
                    'connecte'=>'false',
                    'form' => $form->createView(),
        ));
    }

}
