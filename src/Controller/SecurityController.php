<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Client\Provider\FacebookClient;
use League\OAuth2\Client\Provider\Facebook;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/connect/facebook", name="facebook_connect")
     */
    public function connect(ClientRegistry $clientRegistry): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        /** @var FacebookClient $client */
        $client = $clientRegistry->getClient('facebook');
        return $client->redirect(['public_profile', 'email']);
    }
    /**
     * @Route("/connect/facebookDesktop", name="facebook_connect1")
     */
    public function connect1(ClientRegistry $clientRegistry): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        /** @var FacebookClient $client */
        $client = $clientRegistry->getClient('facebook');
        return $client->redirect(['public_profile', 'email']);
    }
    /**
     * After going to Facebook, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     *
     * @param Request $request
     * @param ClientRegistry $clientRegistry
     *
     * @Route("/connect/facebook/check", name="connect_facebook_check")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return $this->redirectToRoute('main');
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
