<?php

  namespace App\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;




  class AppController  extends AbstractController{

      /**
       * @Route("/hello")
       */
      public function hello() : Response
      {
        $contactList = [
          ['fullname'=>"iheb",'phone'=>1586574],
          ['fullname'=>"nour",'phone'=>14],
        ];
        $number = random_int(0,100);
        return $this ->render('app/hello.html.twig',[
          'number'=>$number,
          'contact'=>$contactList
        ]) ;
      }

  }
?>