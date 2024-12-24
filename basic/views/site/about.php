<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    // Action untuk halaman "About"
    public function actionAbout()
    {
        return $this->render('about'); // Memuat view "about.php" dari folder "views/site"
    }
}
