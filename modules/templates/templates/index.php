<?php
/**
 * Social All in One Bot plugin file.
 *
 * Copyright (C) 2010-2020, Smackcoders Inc - info@smackcoders.com
 */
?>
<div>
	<div class = 'form-group'>
		<button class = 'btn btn-primary' name = 'createtemplate' id = 'createtemplate' onclick = 'window.location.href = "admin.php?page=<?php echo WP_SOCIAL_ALL_IN_ONE_BOT_SLUG; ?>/index.php&__module=templates&__action=create"'> Create New Template </button>
		<button class = 'btn btn-primary' name = 'newpost' id = 'newpost' onclick = 'window.location.href = "admin.php?page=<?php echo WP_SOCIAL_ALL_IN_ONE_BOT_SLUG; ?>/index.php&__module=templates&__action=newpost"' style="margin-left:20px;"> New Post </button>
        </div>
	<div class="table-responsive">
  		<table class="table table-striped">
			<tr>
				<th> # </th>
				<th> Template Name </th>
				<th> Created Time </th>
				<th> Modified Time</th>
				<th> Actions </th>
			</tr>
			<!-- if there is template -->
			<?php 
			if(isset($skinnyData['templateslist']) && !empty($skinnyData['templateslist']))
			{    
				foreach($skinnyData['templateslist'] as $singletemplate_key => $singletemplate_value)	
				{ ?>
					<tr> 
						<td> <?php echo $singletemplate_key; ?> </td>
						<td> <?php echo $singletemplate_value['templatename']; ?> </td>
						<td> <?php echo $singletemplate_value['createdtime']; ?>  </td>
						<td> <?php echo $singletemplate_value['modifiedtime']; ?> </td>
						<td style='cursor:pointer;color:#0074A2;padding-bottom:5px'  ><i class = 'fa fa-edit fa-2x' name='edit_template' id='edit_template' style='margin-right:4px;' onclick = 'window.location.href = "admin.php?page=<?php echo WP_SOCIAL_ALL_IN_ONE_BOT_SLUG; ?>/index.php&__module=templates&__action=edit&id=<?php echo $singletemplate_key;?>"'> </i> <i class = 'fa fa-copy fa-2x' style='margin-right:4px;' onclick = 'window.location.href = "admin.php?page=<?php echo WP_SOCIAL_ALL_IN_ONE_BOT_SLUG; ?>/index.php&__module=templates&__action=temp&id=<?php echo $singletemplate_key;?>"'></i> <i name="delete_template" id="delete_template" style='margin-right:4px;' class = 'fa fa fa-trash-o fa-2x' onclick = 'saiob_deletetemplate("<?php echo $singletemplate_key;?>",this)'></i> </td>
					</tr>
			<?php 	}
		 	} ?>
		</table>
		<!-- if there is no template -->
		<?php if($skinnyData['templates_count'] == 0)	{	?>
			<label class = 'alert alert-info'> No Templates created yet </label>
		<?php	} ?>
	</div>

</div>
</div>
</div>
