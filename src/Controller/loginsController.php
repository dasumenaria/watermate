<?php

namespace App\Controller;

use App\Controller\AppController;

use Cake\Event\Event;
 
class loginsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
	public function beforeFilter(Event $event)
    {
       	parent::beforeFilter($event);
		$this->Auth->allow('login');
    }

    public function index()
    {
		$this->loadmodel('Users');
        $recipes = $this->Users->find('all')->contain(['BillDatas'])->toArray();
        $this->set([
            'recipes' => $recipes,
            '_serialize' => ['recipes']
        ]);
    }

    public function login()
    {
		if ($this->request->is('post')) {  
 			$user = $this->Auth->identify();
			pr($user);
			if ($user)  {
					$this->Auth->setUser($user);
			}
		}
     }

    public function add()
    {
        $recipe = $this->Recipes->newEntity($this->request->getData());
        if ($this->Recipes->save($recipe)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'recipe' => $recipe,
            '_serialize' => ['message', 'recipe']
        ]);
    }

    public function edit($id)
    {
        $recipe = $this->Recipes->get($id);
        if ($this->request->is(['post', 'put'])) {
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->getData());
            if ($this->Recipes->save($recipe)) {
                $message = 'Saved';
            } else {
                $message = 'Error';
            }
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $recipe = $this->Recipes->get($id);
        $message = 'Deleted';
        if (!$this->Recipes->delete($recipe)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}


?>