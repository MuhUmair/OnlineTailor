<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * User Controller
 *
 * @property \App\Model\Table\UserTable $User
 */
class HomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $TRPS = \Cake\ORM\TableRegistry::get("peoplesaying");
        $sayings = $TRPS->find("all");
        
        $this->set(["sayings" => $sayings]);
    }

}
