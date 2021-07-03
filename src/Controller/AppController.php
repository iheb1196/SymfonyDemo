<?php

  namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;




  class AppController  extends AbstractController{

      /**
       * @Route("/",name="app_route")
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
      /**
       * @Route("/hi",name="hi_route")
       */
      public function hi() : Response
      {
        $contactList = [
          ['fullname'=>"iheb",'phone'=>1586574],
          ['fullname'=>"nour",'phone'=>14],
        ];
        $number = random_int(0,100);
        return $this ->render('app/hi.html.twig',[
          'number'=>$number,
          'contact'=>$contactList
        ]) ;
      }
       /**
       * @Route("/blog",name="blog_route")
       */
      public function blog() : Response
      {
        $articles = [
          ['id'=>"1",'title'=>'hello world','isnew'=>true,'date'=>new DateTime()],
          ['id'=>"2",'title'=>'welcome to symfony','isnew'=>false,'date'=>new DateTime()],
        ];
        
        return $this ->render('app/blog.html.twig',[
          
          'articles'=>$articles
        ]) ;
      }
       /**
       * @Route("/blog/article/{id}",name="article_route")
       */
      public function article($id) : Response
      {
        
        
        return $this ->render('app/article.html.twig',[
          
          'id'=>$id
        ]) ;
      }

  }
?>