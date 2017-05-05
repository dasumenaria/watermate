<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i> Add Villages
		</div> 
	</div>
	<div class="portlet-body form">
		  <?= $this->Form->create($village) ?>
		<div class="form-body">
		   
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<?= $this->Form->input('district_id',['empty'=>' Select District ', 'options' => $districts, 'hiddenField' =>false, 'class'=>'select2me form-control']) ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class=" ">
					<?= $this->Form->input('block_id',['empty'=>'Select Blocks', 'options' => $blocks, 'hiddenField' =>false, 'class'=>'select2me form-control']) ?>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="form-group">
					  <?php echo $this->Form->input('village_name',['class'=>'form-control','type'=>'text','placeholder'=>'Enter Village Name','autocomplete'=>'off']);?>					 
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
						<?php echo $this->Form->input('latitude',[ 'class'=>'form-control','type'=>'text','placeholder'=>'Enter Latitude','autocomplete'=>'off']);?>
					</div>
			 </div>
			 
			<div class="col-md-4">
				<div class="form-group">
					<label>Longitude</label>
					<div class=" ">
					 <?php echo $this->Form->input('longitude',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Longitude','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Executive Engineer</label>
					<div class=" ">
					 <?php echo $this->Form->input('executive_engineer',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Executive Engineer Name','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Assistant Engineer</label>
					<div class=" ">
					 <?php echo $this->Form->input('assistant_engineer',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Assistant Engineer Name','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Junior Engineer</label>
					<div class=" ">
					 <?php echo $this->Form->input('junior_engineer',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Junior Engineer Name','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Operator</label>
					<div class=" ">
					 <?php echo $this->Form->input('operator',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Operator Name','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Department Site Serveyor</label>
					<div class=" ">
					<?php echo $this->Form->textarea('department_site_serveyor', ['rows' => '2', 'cols' => '5','escape' => false,'label' => false,'class'=>'form-control','autocomplete'=>'off','placeholder'=>'Enter Department Site Serveyor']);?>
 
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Watermate Site Serveyor</label>
					<div class=" ">
					<?php echo $this->Form->textarea('watermate_site_serveyor', ['rows' => '2', 'cols' => '5','escape' => false,'label' => false,'class'=>'form-control','autocomplete'=>'off','placeholder'=>'Enter Watermate Site Serveyor']);?>
 
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Monitoring Format</label>
					<div class=" ">
					<?php echo $this->Form->textarea('monitoring_format', ['rows' => '2', 'cols' => '5','escape' => false,'label' => false,'class'=>'form-control','autocomplete'=>'off','placeholder'=>'Enter Monitoring Format']);?>
 
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Customer Care No</label>
					<div class=" ">
					 <?php echo $this->Form->input('customer_care_no',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Customer Care No.','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<?php echo $this->Form->input('start_of_work',['class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Start Of Work Date']);?>
				</div>	
				</div>	
			 
			<div class="col-md-4">
				<div class="form-group">
				<label>Complete Of Work</label>
					<?php echo $this->Form->input('complete_of_work',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Complete Of Work Date']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Land Allocation</label>
					<div class=" ">
					 <?php echo $this->Form->input('land_allocation',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Land Allocation','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label>Water Connection</label>
					<?php echo $this->Form->input('water_connection',['label'=>false,'class'=>'form-control form-control-inline  date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Water Connection']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label>Electrical Connection</label>
					<?php echo $this->Form->input('electrical_connection',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Electrical Connection Date']);?>
				</div>	
			</div>
			 
			<div class="col-md-4">
				<div class="form-group">
				<label>Foundation</label>
					<?php echo $this->Form->input('foundation',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Foundation Date']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label>Flooring</label>
					<?php echo $this->Form->input('flooring',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Flooring Date']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label>Shelter Erection</label>
					<?php echo $this->Form->input('shelter_erection',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Shelter Erection']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label>Water Tank</label>
					<?php echo $this->Form->input('water_tank',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Water Tank Date']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label>Plant Installation</label>
					<?php echo $this->Form->input('plant_installation',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Plant Installation Date']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
				<label>Commissioning</label>
					<?php echo $this->Form->input('commissioning',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'Enter Commissioning Date']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>M L A Costituency</label>
					<div class=" ">
					 <?php echo $this->Form->input('mla_costituency',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter M L A Costituency','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Gram Panchayat</label>
					<div class=" ">
					 <?php echo $this->Form->input('gram_panchayat',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Gram Panchayat','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Population</label>
					<div class=" ">
					 <?php echo $this->Form->input('population',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter population','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Houses No.</label>
					<div class=" ">
					 <?php echo $this->Form->input('no_houses',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter no. of houses','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Sim Number</label>
					<div class=" ">
					 <?php echo $this->Form->input('sim_number',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Sim Number','autocomplete'=>'off']);?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>IFR</label>
					<div class=" ">
					 <?php echo $this->Form->input('ifr',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter ifr','autocomplete'=>'off']);?>
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

 