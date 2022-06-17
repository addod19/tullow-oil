<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController {
    public function index(): Response
    {
        $title = 'An independent oil and gas company focused on Africa and South America';
        $aboutUs = 'About Us';
        $cover = 'https://1.bp.blogspot.com/-Ja-SAE7ojmg/YLfR8ghALqI/AAAAAAAAOxc/G1UKsc4pc-USXbI6-wDRArvqTqDIAywLQCLcBGAsYHQ/s2048/20626297_10210074351316263_236087673830960779_o.jpg';
        $figcaption = ' lorep ipsum';
        $description = 'this is Nana';
        $content = 'this is super cool';

        return $this->render('home.html.twig', [
            'controller_name'=> 'DefaultController', 'cover'=> $cover, 'title'=> $title,
            'description'=> $description, 'figcaption'=> $figcaption, 'content'=> $content,
        ]);
        // return new Response(
        //     '<html>
        //         <body>
        //             <header>
        //                 <span>social media links</span>
        //                 <nav>
        //                     <ul>
        //                         <li>About Us</li>
        //                         <li>Our Operations</li>
        //                         <li>Sustainanbility</li>
        //                         <li>Investors</li>
        //                         <li>Media</li>
        //                         <li>Suppliers</li>
        //                     </ul>
        //                 </nav>
        //             </header>
        //         </body>
        //     </html>'
        // );
    }
}
