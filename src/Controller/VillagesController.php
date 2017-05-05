<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Villages Controller
 *
 * @property \App\Model\Table\VillagesTable $Villages
 */
class VillagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		 $this->viewBuilder()->layout('index_layout');
        $this->paginate = [
            'contain' => ['Districts', 'Blocks']
        ];
        $villages = $this->paginate($this->Villages->find()->where(['Villages.village_flag'=>'1',])->order(['Villages.id' => 'DESC']));
		//$villages=$this->Villages->find()->order(['id' => 'DESC'])->contain(['Districts', 'Blocks'])->toArray();
		 $this->set(compact('villages'));
        $this->set('_serialize', ['villages']);
    }

    /**
     * View method
     *
     * @param string|null $id Village id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		 $this->viewBuilder()->layout('index_layout');
        $village = $this->Villages->get($id, [
            'contain' => ['Districts', 'Blocks', 'Records']
        ]);

        $this->set('village', $village);
        $this->set('_serialize', ['village']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		 $this->viewBuilder()->layout('index_layout');
        $village=$this->Villages->newEntity();
        if ($this->request->is('post')) {
			
			$this->request->data['foundation'] = date('Y-m-d', strtotime($this->request->data['foundation']));
				$this->request->data['start_of_work']=date('Y-m-d', strtotime($this->request->data['start_of_work']));
				$this->request->data['complete_of_work']=date('Y-m-d', strtotime($this->request->data['complete_of_work']));
				$this->request->data['water_connection']=date('Y-m-d', strtotime($this->request->data['water_connection'])); 
				$this->request->data['electrical_connection']=date('Y-m-d', strtotime($this->request->data['electrical_connection']));  
				$this->request->data['flooring']=date('Y-m-d', strtotime($this->request->data['flooring'])); 
				$this->request->data['shelter_erection']=date('Y-m-d', strtotime($this->request->data['shelter_erection'])); 
				$this->request->data['water_tank']=date('Y-m-d', strtotime($this->request->data['water_tank'])); 
				$this->request->data['plant_installation']=date('Y-m-d', strtotime($this->request->data['plant_installation'])); 
				$this->request->data['commissioning']=date('Y-m-d', strtotime($this->request->data['commissioning'])); 
				
				$village=$this->Villages->patchEntity($village, $this->request->getData());
	  
	  
    
            if ($this->Villages->save($village)) {
                $this->Flash->success(__('The village has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The village could not be saved. Please, try again.'));
        }
		$districts = $this->Villages->Districts->find('list')->toArray();
		$blocks = $this->Villages->Blocks->find('list')->toArray();
		$this->set(compact('village', 'districts', 'blocks'));
        $this->set('_serialize', ['village']);
    }
	public function edit($id = null)
    {
		 $this->viewBuilder()->layout('index_layout');
        $village = $this->Villages->get($id, [
            'contain' => []
        ]);
	 
			if ($this->request->is(['patch', 'post', 'put']))
			{
				$this->request->data['foundation'] = date('Y-m-d', strtotime($this->request->data['foundation']));
				$this->request->data['start_of_work']=date('Y-m-d', strtotime($this->request->data['start_of_work']));
				$this->request->data['complete_of_work']=date('Y-m-d', strtotime($this->request->data['complete_of_work']));
				$this->request->data['water_connection']=date('Y-m-d', strtotime($this->request->data['water_connection'])); 
				$this->request->data['electrical_connection']=date('Y-m-d', strtotime($this->request->data['electrical_connection']));  
				$this->request->data['flooring']=date('Y-m-d', strtotime($this->request->data['flooring'])); 
				$this->request->data['shelter_erection']=date('Y-m-d', strtotime($this->request->data['shelter_erection'])); 
				$this->request->data['water_tank']=date('Y-m-d', strtotime($this->request->data['water_tank'])); 
				$this->request->data['plant_installation']=date('Y-m-d', strtotime($this->request->data['plant_installation'])); 
				$this->request->data['commissioning']=date('Y-m-d', strtotime($this->request->data['commissioning'])); 
			
				
            $village = $this->Villages->patchEntity($village, $this->request->getData());
            
			if ($this->Villages->save($village)) {
                $this->Flash->success(__('The village has been saved.'));
				 
			  
  	
                return $this->redirect(['action' => 'index']);
            }
 
            $this->Flash->error(__('The village could not be saved. Please, try again.'));
        }
        $districts = $this->Villages->Districts->find('list', ['limit' => 200]);
        $blocks = $this->Villages->Blocks->find('list', ['limit' => 200]);
        $this->set(compact('village', 'districts', 'blocks'));
        $this->set('_serialize', ['village']);
    }
    /**
     * Delete method
     *
     * @param string|null $id Village id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
		 $this->viewBuilder()->layout('index_layout');
        $this->request->allowMethod(['post', 'delete']);
        $village = $this->Villages->get($id);
		 $village->is_active = 0;
        if ($this->Villages->save($village)) {
            $this->Flash->success(__('The village has been deleted.'));
        } else {
            $this->Flash->error(__('The village could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
} 