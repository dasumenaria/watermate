<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i> Edit Villages
		</div> 
	</div>
	<div class="portlet-body form">
	 	  <?= $this->Form->create($village) ?>
		<div class="form-body">
		   
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
				<?=$this->Form->control('district_id', ['options' => $districts,'class'=>'select2me form-control'])?>
				</div>
			</div>
			<div class="col-md-4">
				<div class=" ">
				<?=$this->Form->control('block_id', ['options' => $blocks,'class'=>'select2me form-control'])?>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="form-group">
					  <?=$this->Form->control('village_name',['class'=>'form-control'])?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">

					<?=$this->Form->control('latitude',['class'=>'form-control'])?>
					</div>
			 </div>
			 
			<div class="col-md-4">
				<div class="form-group">
	 
					<div class=" ">
						<?=$this->Form->control('longitude',['class'=>'form-control'])?>					 					 
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 <div class=" ">
					 <?=$this->Form->control('executive_engineer',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
					 <?=$this->Form->control('assistant_engineer',['class'=>'form-control']) ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
						<?=$this->Form->control('junior_engineer',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
					<?=$this->Form->control('operator',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
						<?=$this->Form->control('department_site_serveyor',['class'=>'form-control','rows' => '2', 'cols' => '5'])?>
 					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
					<?=$this->Form->control('watermate_site_serveyor',['class'=>'form-control','rows' => '2', 'cols' => '5'])?>
 					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
					<?= $this->Form->control('monitoring_format',['class'=>'form-control','rows' => '2', 'cols' => '5'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
						<?=$this->Form->control('customer_care_no',['class'=>'form-control'])?>
 					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 
					<?= $this->Form->control('start_of_work',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->start_of_work))]) ?>
				</div>	
				</div>	
			 
			<div class="col-md-4">
				<div class="form-group">
					
					<?= $this->Form->control('complete_of_work',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->complete_of_work))]) ?>
					
 
 
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
						<?=$this->Form->control('land_allocation',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 
					<?=$this->Form->control('water_connection',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->water_connection))])?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 
					<?=$this->Form->control('electrical_connection',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->electrical_connection))])?>
					</div>	
			</div>
			 
			<div class="col-md-4">
				<div class="form-group">
				 
				<?=$this->Form->control('foundation',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->foundation))])?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
			 
					<?=$this->Form->control('flooring',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->flooring))])?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 
					<?=$this->Form->control('shelter_erection',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->shelter_erection))])?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 
				<?php echo $this->Form->control('water_tank',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->water_tank))]);?>
 
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 
					<?php echo $this->Form->control('plant_installation',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->plant_installation))]);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 
					<?= $this->Form->control('commissioning',['class'=>'form-control form-control-inline date-picker','type'=>'text','data-date-format'=>'dd-mm-yyyy','value'=>date('d-m-Y', strtotime($village->commissioning))])?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
						<?=$this->Form->control('mla_costituency',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
					<?=$this->Form->control('gram_panchayat',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
						<?=$this->Form->control('population',['class'=>'form-control'])?> 
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
						<?=$this->Form->control('no_houses',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
					 
	<?=$this->Form->control('sim_number',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<div class=" ">
				<?=$this->Form->control('ifr',['class'=>'form-control'])?>
					</div>
				</div>
			</div>
		 </div>
		<div class="row">
			<div class="col-md-12">
				 <center><?= $this->Form->button($this->html->tag('i', '') . __(' Submit'),['class'=>'btn blue']); ?></center>
			 </div>
		</div>
		</div>
</div>
<?= $this->Form->end() ?>
</div>

 