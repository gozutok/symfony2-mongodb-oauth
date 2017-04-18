<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ApiBundle:Default:index.html.twig');
    }

    /**
     * @Route("api/test")
     */
    public function testApiAction() {
        return new Response(json_encode(['a'=>'b']));
    }


    /**
     * @Route("/client/new")
     * @Method({"POST","HEAD"})
     */
    public function newClientAction() {
        $clientManager = $this->container->get('fos_oauth_server.client_manager.default');
        $client = $clientManager->createClient();
        $client->setRedirectUris(['http://zeka.io']);
        $client->setAllowedGrantTypes(['token', 'authorization_code', 'password', 'client_credentials']);
        $clientManager->updateClient($client);

        $response = new Response();

        $response->setContent(json_encode([
            'client_id'     => $client->getPublicId(),
            'secret'     => $client->getSecret(),
            'redirect_uri'  => $client->getRedirectUris(),
        ]));

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/current-user")
     */
    public function userAction()
    {

        $tokenManager = $this->get('fos_oauth_server.access_token_manager.default');
        $token        = $this->get('security.token_storage')->getToken();
        $accessToken  = $tokenManager->findTokenByToken($token->getToken());


        $response = new Response();

        $response->setContent(json_encode([
            'user' => $accessToken->getUser()->getUsername()
        ]));

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/current-client")
     */
    public function clientAction()
    {

        $tokenManager = $this->get('fos_oauth_server.access_token_manager.default');
        $token        = $this->get('security.token_storage')->getToken();
        $accessToken  = $tokenManager->findTokenByToken($token->getToken());


        $response = new Response();

        $response->setContent(json_encode([
            'client' => $accessToken->getClientId()
        ]));

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
