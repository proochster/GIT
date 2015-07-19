	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
           
            <div class="grid">
                <div class="grid-24">
			        <a name="whats_not_included"></a>				
                    <h2><i class="fa fa-list-alt"></i> Image Upload</h2>
                    <div class="frame">
                        <div class="frame_note"> 
                        </div>
                        
						<?php echo $error;?>

                        <?php echo form_open_multipart('forms/imageuploaded');?>

                        <input type="file" name="userfile" size="20" />

                        <br /><br />

                        <input type="submit" value="upload" />

                        </form>					
				
						
                    </div>
                </div>
            </div>
        </div>
    </div>