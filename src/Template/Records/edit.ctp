
 
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-gift"></i>Edit Record
			</div>
			 
		</div>
		<div class="portlet-body form">
			<?= $this->Form->create($record ,['id'=>'f_id']) ?>
			  
			<?php 
			
			?>
			<div class="form-body">

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<?php foreach($villages as $data): 
							$options[$data->id]=$data->village_name;
							endforeach;
							?>
							<?= $this->Form->input('village_id',['empty'=>'Select Village ','options' => $options, 'hiddenField' =>false, 'class'=>'   form-control vill_id']) ?>
							 
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							<label>Status Date Range</label>
							  <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
									<input type="date" class="form-control d_f " name="frm">
									<span class="input-group-addon">
									to </span>
									<input type="date" class="form-control d_t " name="to">
								</div>
						</div> 
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>&nbsp;</label>
							  <div class="input-group">
							  <Button class="btn blue clk">Submit</button>
								</div>
						</div>	
					</div> 
					<div class="col-md-12 remove-pendding" id="record_view">
			</div>
				</div>
				 </div>
			</div>	
			<?= $this->Form->end() ?>
		</div>
	</div>
<?php echo $this->Html->script('/assets/global/plugins/jquery.min.js'); ?> 
		  
  <script type='text/javascript'>
  $(document).ready(function(){
	
	 $(".clk").on('click',function(e){
		  e.preventDefault();
 		var village_id=$(".vill_id").val();
		var frm=$(".d_f").val();
		var to=$(".d_t").val();
	//  alert(village_id);
		/*  
 		 var m_data = new FormData();
		
			m_data.append('village_id',village_id); 
			m_data.append('date_frm',frm); 
			m_data.append('date_to',to); 
 			 */
			 
		$.ajax({
			url: "<?php echo $this->Url->build(["controller" => "Records", "action" => "ajax_record"]); ?>",
			data: $("#f_id").serialize(),
			/* processData: false,
			contentType: false, */
			type: 'POST',
			//dataType:'text',
			success: function(data)   // A function to be called if request succeeds
			{
				//alert(data);
				$('#record_view').html(data);
			}	
		});
   });
   });
  </script>
