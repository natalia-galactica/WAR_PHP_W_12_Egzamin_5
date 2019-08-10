<?php
namespace ExamBundle\Controller;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ExamController extends Controller
{
    
    /**
     * @Route ("/setUsername/{userName}",name="setuser",methods="GET")
     */
    public function setUAction(SessionInterface $session, $userName)
    {                
        $session->set('username', $userName);
        
        $comment = 'Sesja utworzona';
        return $this->render('ExamBundle:Default:sesja.html.twig', ['comment' => $comment]);                
    }
    
    /**
     *
     * @Route ("/sayHello/{n}",methods="GET",defaults={"n" = 10},requirements={"n"="\d+"})
     */
    public function sayHelloAction(SessionInterface $session, $n)
    {
        if ($session->get('username')) {
            $username = $session->get('username');
        } else {
            $username = 'nieznajomy';
        }
        
        return $this->render('ExamBundle:Default:hello.html.twig', ['n' => $n, 'username' => $username]);
    }
    
    /**
     * @Route ("/createCookie/{cookieName}/{cookieValue}/{cookieTime}",methods="GET",requirements={"cookieTime"="\d+"})
     */
    public function createCookieAction($cookieName, $cookieValue, $cookieTime)
    {
        
        $cookieTime = $cookieTime * 60;
        $cookie = new \Symfony\Component\HttpFoundation\Cookie ($cookieName, $cookieValue, $cookieTime);
        $resp = new Response('<div>Hello Cookie</div>');
        $resp->headers->setCookie($cookie);
                
        return $this->render('ExamBundle:Default:cookie.html.twig', ['cookieName' => $cookie->getName(),
            'czasZycia' => $cookie->getExpiresTime()]);        
    }
    
    /**
     * @Route ("/deleteCookie/{cookieName}")
     *
     */
    public function delCookieAction(Request $request, $cookieName)
    {
    
        $mycookie = $request->cookies->get($cookieName); //pobieram nazwe ciastka ze sluga
        
        if (!isset($mycookie)) { //sprawdzam czy ciasteczko ustawione
            $comment = 'Brak ciasteczka';
            return $this->render('ExamBundle:Default:cookiedel.html.twig', ['comment' => $comment]);
        }
        
        $resp = new Response(); //zwracam obiekt Response
        $resp->headers->clearCookie($cookieName); //czyszcze ciasteczko
        $resp->send();
        $comment = 'Ciastko ' . $mycookie . ' zostalo usuniete';
        
        return $this->render('ExamBundle:Default:cookiedel.html.twig', ['comment' => $comment, 'mycookie' => $mycookie]);
    }
}
