<?php 
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\View\View;
 
class AppController extends Controller
{
 
    public function initialize()
    {
        parent::initialize();
		
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
		
 	    $this->loadComponent('Auth', [
                                 'authenticate' => [
                'Form' => [
                      'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ],
                      'userModel' => 'Users'
                ]
            ],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
                'home'
            ],
         	'unauthorizedRedirect' => $this->referer(),
        ]);

		// Allow the display action so our pages controller
        // continues to work.
        $this->Auth->allow(['display']);
    } 
  	
	
  
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
 