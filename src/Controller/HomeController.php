<?php
/**
 * Created by PhpStorm.
 * User: Rothanak
 * Date: 17/12/17
 * Time: 16:49
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller {

    /**
     * @Route("/", name="home")
     */
    public function homeAction() {
        die("toto");
    }
} 