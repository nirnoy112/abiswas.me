<div style="min-height: 430px;" class="lo-container">


	<h3 style="text-align: center;">MY PHOTOGRAPHY</h3>
	<br><br>
	
	<?php
		$photographyDirectory = FCPATH . 'resource/photography/';

		if(is_dir($photographyDirectory)) {

			if($directoryHandler = opendir($photographyDirectory)) {

		    	while(($phptographyFile = readdir($directoryHandler)) != false) {

		    	if($phptographyFile != '.' && $phptographyFile != '..') {

		    		echo '<img width="100%" src="' . base_url('resource/photography/' . $phptographyFile) . '"><br><br>';

		    	}

		    }

		    closedir($directoryHandler);

		  }

		}

	?>
</div>
<br>
<br>