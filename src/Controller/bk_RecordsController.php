<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Records Controller
 *
 * @property \App\Model\Table\RecordsTable $Records
 */
class RecordsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->viewBuilder()->layout('index_layout');
		$record = $this->Records->newEntity();
		if ($this->request->is('post')) {
		$role=$this->Auth->User('role');
		
			if($role==2)
					{
						
					//return $this->redirect(['controller'=>'Users','action' => 'search']);
					}
					
			
			else
			{
				 
		if(isset($this->request->data['submit']))
		{ //pr($this->request->data); exit; 
			//$record = $this->Records->newEntity();
			$file=$this->request->data['file'];
			//pr($file); exit; 
			$user_id=$this->Auth->User('id');
			$file_temp=($file['tmp_name']);
			
			$f = fopen($file['tmp_name'], 'r') or die("ERROR OPENING DATA");
			$records=0;
			while (($line = fgetcsv($f, 4096, ',')) !== false) {
			
			$numcols = count($line);
			$test[]=$line;
			++$records;
			}
				//pr($test);
				 
			 // pr($this->request->data);
	 
			$i=0;			
			$field_name=array_keys($this->record->getColumnTypes());
		 
			foreach($test as $child_ar)
			{ 
			 
				 
		// echo $district=$child_ar[0 ];
		// echo'<br/>';
		// exit;
				$i++;
				if($i>2)
				{
					
					//echo $i;
					 
					 
					$j=0;
					$k=0;
					foreach($field_name as $data)
					{
						//pr($data);
						
					 
						if($j>0)
						{
							if($data=='date_commission')
							{
								$this->request->data[$data]=date('Y-m-d',strtotime($child_ar[$k]));
							}
							else if($data=='date_lab_testing')
							{
								$this->request->data[$data]=date('Y-m-d',strtotime($child_ar[$k]));
							}
							else if($data=='status_date')
							{
								$this->request->data[$data]=date('Y-m-d',strtotime($child_ar[$k]));
							}
							else if($data=='operational_date')
							{
								$this->request->data[$data]=date('Y-m-d',strtotime($child_ar[$k]));
							}
							else if($data=='dispense_date')
							{
								$this->request->data[$data]=date('Y-m-d',strtotime($child_ar[$k]));
							}
							else if($data=='district_id')
							{
								$result_district=$this->district->find('all',array('fields'=>array('id'),'conditions'=>array('district_name'=>$child_ar[$k])));
								$this->request->data[$data]=$result_district[0]['district']['id'];
							}
							else if($data=='block_id')
							{
								$result_block=$this->block->find('all',array('fields'=>array('id'),'conditions'=>array('block_name'=>$child_ar[$k])));
								$this->request->data[$data]=$result_block[0]['block']['id'];
							}
							else if($data=='village_id')
							{
								$result_village=$this->village->find('all',array('fields'=>array('id'),'conditions'=>array('village_name'=>$child_ar[$k])));
								$this->request->data[$data]=$result_village[0]['village']['id'];
							}
							else
							{
								$this->request->data[$data]=$child_ar[$k];
							}
							
							$k++;
						}
						$j=1;
						
						
					}  
					
					exit;
					//$record = $this->Records->patchEntity($record, $this->request->data());
					$this->Records->save($record);
					//$this->record->save($this->request->data);
					//pr($record);
					

					
				}
		
		
		
		
		
			}
	 
		}
		}
		
            $record = $this->Records->patchEntity($record, $this->request->getData());
            if ($this->Records->save($record)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
			
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

		 $this->set(compact('record'));
        $this->set('_serialize', ['record']);
         
    }

    /**
     * View method
     *
     * @param string|null $id Record id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
      public function view()
    {
		$this->viewBuilder()->layout('index_layout');
		$record = $this->Records->newEntity();
        
		 $villages = $this->Records->Villages->find('list');
        $this->set('record', $record);
		        $this->set(compact('record', 'villages'));
        $this->set('_serialize', ['record']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        	$this->viewBuilder()->layout('index_layout');
		$record = $this->Records->newEntity();
        if ($this->request->is('post')) {
			
			 $date_from =date('Y-m-d', strtotime($this->request->data['from']));
		  $date_to =date('Y-m-d', strtotime($this->request->data['to']));
		  
 				 $date_from_s =strtotime($date_from);
				 $date_to_s =strtotime($date_to);
				 $days=abs(floor(($date_from_s-$date_to_s)/(60*60*24)));
				 
					$currentTime = strtotime($date_from);
					$endTime = strtotime($date_to);
					$result = array();
					while ($currentTime <= $endTime) {
					if (date('N', $currentTime) < 8) {
					$result[] = date('Y-m-d', $currentTime);
					}
					$currentTime = strtotime('+1 day', $currentTime);
					}
					foreach($result as $value)
					{
					$dat1=date("Y-m-d", strtotime($value));
					$period[]=$dat1;
					$dates[]=$dat1;
					}
  
				$j=0;
				echo $village_id=$this->request->data['village_id'];
				$atmcard_issues=$this->request->data['atmcard_issues'];
				$rwq_tds=$this->request->data['rwq_tds'];
				$rwq_fl=$this->request->data['rwq_fl'];
				$rwq_no=$this->request->data['rwq_no'];
				$twq_tds=$this->request->data['twq_tds'];
				$twq_fl=$this->request->data['twq_fl'];
				$twq_no=$this->request->data['twq_no'];
				$date_lab_testing=date('Y-m-d',strtotime($this->request->data['date_lab_testing']));
				$village_record =$this->Records->Villages->find()->where(['Villages.id'=>$village_id,'Villages.village_flag'=>'1'])->toArray() ;
 
				 
				
				foreach($village_record as $village_records)
				{
					$date_commission=$village_records->commissioning;
					$mla_costituency=$village_records->mla_costituency;
					$block_id=$village_records->block_id;
					$gram_panchayat=$village_records->gram_panchayat;
					$population=$village_records->population;
					$no_houses=$village_records->no_houses;
					$ifr1=800;
					$sim_number=$village_records->sim_number;
				}					 
				
						$i=0;
					 
					 
					pr($dates);
					 
					
				foreach($dates as $data)
				{
					
					$record = $this->Records->newEntity();
				$start = strtotime("12:00:00");
				$end =  strtotime("02:00:00");
				$time = date("H:i", rand($start, $end));
				
				if($atmcard_issues == 1)
				{
				$atmcard=rand(10,25);
				$op_day=rand(100,200)/100;
				$status=['O','No','No','O'];
				}
				else if($atmcard_issues== 2)
				{
				$atmcard=rand(26,50);
				$op_day=rand(100,200)/100;
				$status=['O','No','O','No'];
				}
				
				else if($atmcard_issues== 3)
				{
				$atmcard=rand(51,75);
				$op_day=rand(200,300)/100;
				$status=['O','No','O','No'];
				}
				else if($atmcard_issues == 4)
				{
				$atmcard=rand(76,125);
				$op_day=rand(2300,500)/100;
				$status=['O','No','O','No'];
				}
				
				else if($atmcard_issues == 5)
				{
				$atmcard=rand(126,175);
				$op_day=rand(600,700)/100;
				$status=['O','O','O','O'];
				}
				else if($atmcard_issues == 6)
				{
				$atmcard=rand(176,225);
				$op_day=rand(700,800)/100;
				$status=['O','O','O','O'];
				}
				
				$cum_vol=($atmcard*15)/1000;
				$cu=$cum_vol*1000;
				//$fetchlast_id=$this->record->find('all', array('conditions'=>array('record_flag' => 0, 'village_id'=>$village_id),'order'=>'id DESC','limit'=>1));
				//$lst_id=$fetchlast_id[0]['record']['id'];
				$pen_atm=($atmcard/$no_houses)*100;
				$pen_vol=($cum_vol/$no_houses*15)*100;
				
				$fetchlast =$this->Records->find()->where(['Records.village_id'=>$village_id,'Records.record_flag'=>0])->order(['id' => 'DESC'])->toArray() ;
				//pr(	$fetchlast);
			
				 
				  foreach($fetchlast as $fetchlasts)
				  {
					@$last_op_date=$fetchlasts->last_opr_date; 
					 @$last_cumm=$fetchlasts->dispense_date;
					 @$last_op=$fetchlasts->operational_date;
				  }
				 if($j>3){
				$j=0;
				}
				if($status[$j]=='O')
					{	
						$ifr=$ifr1;
						$tds=rand( 150 , 175 );
						$pfr=rand( 460 , 490 );
						$recovery=$pfr/$ifr*100;
						$total_db=$pfr*4;
						//$total=$remain+$total_db;
						$reason='-';
						$op_day=$op_day;
						$last_op_date=date('Y-m-d');
						$cumm=@$last_cumm+$cum_vol;
						$op_date=@$last_op+$op_day;
					}
					else
					{
						$reason='TWT FULL';
						$ifr='-';
						$pfr='-';
						$tds='-';
						$recovery='-';
						$op_day=0;	
						$cumm=$last_cumm+$cum_vol;
						$op_date=$last_op;
					}
				
				$this->request->data['atmcard_issues']=$atmcard;
				 
				$this->request->data['date_lab_testing']=$date_lab_testing;
				
				//$this->request->data['date_commission']=$date_commission;
				//$this->request->data['district_id']=$district_id;
				//$this->request->data['mla_costituency']=$mla_costituency;
				//$this->request->data['block_id']=$block_id;
				//$this->request->data['gram_panchayat']=$gram_panchayat;
				//$this->request->data['population']=$population;
				//$this->request->data['no_houses']=$no_houses;
				$this->request->data['rwq_tds']=$rwq_tds;
				$this->request->data['rwq_fl']=$rwq_fl;
				$this->request->data['rwq_no']=$rwq_no;
				$this->request->data['twq_tds']=$twq_tds;
				$this->request->data['twq_fl']=$twq_fl;
				$this->request->data['twq_no']=$twq_no;
				$this->request->data['sim_number']=$sim_number;
				$this->request->data['status_plant']=$status[$j];
				$this->request->data['last_opr_date']=$last_op_date;
				$this->request->data['reason_nonoperational']=$reason;
				$this->request->data['treated_tds']=$tds;
				$this->request->data['ifr']=$ifr;
				$this->request->data['pfr']=$pfr;
				$this->request->data['recovery']=$recovery;
				$this->request->data['operational_day']=$op_day;
				$this->request->data['operational_date']=$op_date;
				$this->request->data['village_id']=$village_id;
				echo $data;
					echo '</br>';
				$this->request->data['status_date']=$data;
				$this->request->data['status_time']=$time;
				$this->request->data['penetration_atm']=$pen_atm;
				$this->request->data['penetration_volume']=$pen_vol;
				$this->request->data['dispense_day']=$cum_vol;
				$this->request->data['dispense_date']=$cumm;
 				$j++;
				$i++;
				$record = $this->Records->patchEntity($record, $this->request->data());
				$this->Records->save($record);
				}
				 
            pr($record);
			exit;
				 return $this->redirect(['action' => 'index']);
           
			
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
       // $villages = $this->Records->Villages->find('list', ['limit' => 200]);
	   $villages = $this->Records->Villages->find()->select(['id','village_name'])->toArray();
	  
        $districts = $this->Records->Districts->find('list', ['limit' => 200]);
        $blocks = $this->Records->Blocks->find('list', ['limit' => 200]);
        $this->set(compact('record', 'villages', 'districts', 'blocks'));
        $this->set('_serialize', ['record']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Record id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit()
    {
		$this->viewBuilder()->layout('index_layout');
 		$record = $this->Records->newEntity();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $record = $this->Records->patchEntity($record, $this->request->getData());
            if ($this->Records->save($record)) {
                $this->Flash->success(__('The record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
	   $villages = $this->Records->Villages->find('list');
		 //pr($villages->toArray());
	   //exit;
	   
        $districts = $this->Records->Districts->find('list', ['limit' => 200]);
        $blocks = $this->Records->Blocks->find('list', ['limit' => 200]);
        $this->set(compact('record', 'villages', 'districts', 'blocks'));
        $this->set('_serialize', ['record']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Record id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $record = $this->Records->get($id);
        if ($this->Records->delete($record)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
