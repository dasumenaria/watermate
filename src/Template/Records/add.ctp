

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
		<i class="fa fa-gift"></i>Add Record
		</div>
	</div>
	<div class="portlet-body form">
	<?= $this->Form->create($record) ?>
  
	<div class="form-body">

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">

				<?php foreach($villages as $data): 
				$options[$data->id]=$data->village_name;
				endforeach;
  				?>
				<?= $this->Form->input('village_id',['empty'=>' Select Village ','options' => $options, 'hiddenField' =>false, 'class'=>'select2me form-control']) ?>
				<!--</select-->
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					 
					<label>Status Date Range</label>
						<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
						<?php echo $this->Form->input('from',['label'=>false,'class'=>'form-control  ','type'=>'text','autocomplete'=>'off','placeholder'=>'Form']);?>

						<span class="input-group-addon">
						to </span>
						<?php echo $this->Form->input('to',['label'=>false,'class'=>'form-control  ','type'=>'text','autocomplete'=>'off','placeholder'=>'To']);?>

						</div>
					<!-- /input-group -->

					 
				</div>
			</div>
			 
			<div class="col-md-4">
				<div class="form-group">
					<label>No of ATM Issued</label>
					<select class="select2me category form-control" name="atmcard_issues">
					<option >Select No of ATM Issued</option>
					<option value="1">10 - 25</option>
					<option value="2">26 - 50</option>
					<option value="3">51 - 75</option>
					<option value="4">76 - 125</option>
					<option value="5">126 - 175</option>
					<option value="6">176 - 225</option> 
					</select>
				</div>
			</div> 
			<div class="col-md-4">
				<div class="form-group">
					<label>Lab Testing Date</label>
					<?php echo $this->Form->input('date_lab_testing',['label'=>false,'class'=>'form-control form-control-inline date-picker','type'=>'text','autocomplete'=>'off','placeholder'=>'EnterLab Testing Date']);?>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Raw Water TDS</label>
					 <?php echo $this->Form->input('rwq_tds',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Raw Water TDS','autocomplete'=>'off']);?>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="form-group">
					<label>Raw Water fl </label>
					 <?php echo $this->Form->input('rwq_fl',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Raw Water fl','autocomplete'=>'off']);?>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="form-group">
					<label>Raw Water NO3</label>
					 <?php echo $this->Form->input('rwq_no',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Raw Water NO3','autocomplete'=>'off']);?>
					 
				</div>
			</div>	 
			<div class="col-md-4">
				<div class="form-group">
					<label>Treated Water TDS </label>
					<?php echo $this->Form->input('twq_tds',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Treated Water TDS','autocomplete'=>'off']);?>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="form-group">
					<label>Treated Water fl</label>
					<?php echo $this->Form->input('twq_fl',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Treated Water TDS','autocomplete'=>'off']);?>
				</div>
			</div>	
			<div class="col-md-4">
				<div class="form-group">
					<label>Treated Water NO3</label>
					<?php echo $this->Form->input('twq_no',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Enter Treated Water NO3','autocomplete'=>'off']);?>
				</div>
			</div>	
			<div class="col-md-12">
				<center><?= $this->Form->button($this->html->tag('i', '') . __(' Submit'),['class'=>'btn blue']); ?></center>
			</div>

		</div>
	</div>	
		<?= $this->Form->end() ?>
		</div>
</div>
