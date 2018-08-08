<?php
namespace App\Controller;

use App\Controller\AppController;
class TestController extends AppController
{
    public function show ()
    {

        $a='http:\\\google.com';

      $photo="https://www.google.com.au/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";
      $list = ["coffee","tea","milk"];
        $this->set(['name'=>$a,'photo'=>$photo,'list'=>$list]);
    }
}
?>
