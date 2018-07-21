<style type="text/css">
div.card {
	width: 200px;
	text-align: center;
	/*box-shadow: 0 8px 16px 0 rgba(0, 0, 0.1, 0.5), 0 12px 40px 0 rgba(0, 0, 0, 0.19);*/
	cursor: pointer;
	transition: transform 0.3s;
	backface-visibility: hidden;
}

div.card:hover {
	transform: scale(1.050);
}

.modal {
	display: none;
}

.modal .show {
	display: block;
}

</style>


<script>

	function openCp(positionCount) {

	    var popup = document.getElementById("cp" + positionCount);
	    popup.classList.toggle("show");

	}

	function closeCp(positionCount) {

	    var popup = document.getElementById("cp" + positionCount);
	    popup.classList.remove("show");

	}

</script>

<div style="min-height: 430px;">
	<h3 style="text-align: center;">MY RECOMMENDATION</h3>
	<br><br>
	<div class="row clearfix">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(1)">
			    	<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
			    	<p><b>Md. Abidur Rahman Mallik</b><br><small>CTO, MezeGeek Inc.<br>Dhaka, Bangladesh.</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(2)">
					<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user_default.png'); ?>" width="200px" height="200px">
					<p><b>Michael Jordan</b><br><small>Co-Founder, BigO Lab.<br>Queens, New York, USA.</small></p>
				</div>	
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(3)">
					<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
					<p><b>Md. Nasid Kamal Nirnoy</b><br><small>Software Engineer.<br>Dhaka, Bangladesh.</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(4)">
			    	<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
			    	<p><b>Henry Fonda</b><br><small>Web Developer,Easy Alliance.<br>Boston, MA, USA.</small></p>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="row clearfix">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(5)">
			    	<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
			    	<p><b>Md. Abidur Rahman Mallik</b><br><small>CTO, MezeGeek Inc.<br>Dhaka, Bangladesh.</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(6)">
					<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user_default.png'); ?>" width="200px" height="200px">
					<p><b>Michael Jordan</b><br><small>Co-Founder, BigO Lab.<br>Queens, New York, USA.</small></p>
				</div>	
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(7)">
					<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
					<p><b>Md. Nasid Kamal Nirnoy</b><br><small>Software Engineer.<br>Dhaka, Bangladesh.</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(8)">
			    	<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
			    	<p><b>Henry Fonda</b><br><small>Web Developer,Easy Alliance.<br>Boston, MA, USA.</small></p>
				</div>
			</div>
		</div>
	</div>
	<br><br>
</div>

<div id="cp1" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(1)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Md. Abidur Rahman Mallik</label></h4>
                <h5><label>CTO, MezeGeek Inc. Dhaka, Bangladesh.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"Amit Biswas is one of the very rarest entrepreneurs who possesses the power to make a significant difference single-handedly."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp2" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(2)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Michael Jordan</label></h4>
                <h5><label>Co-Founder, BigO Lab. Queens, New York, USA.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user_default.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"Working with Amit Biswas is a real pleasure."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp3" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(3)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Md. Nasid Kamal Nirnoy</label></h4>
                <h5><label>Software Engineer. Dhaka, Bangladesh.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"He's an exclusive combo of a great person, the best friend, a brother and a motivator to me who'll be always there to back me up."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp4" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(4)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Henry Fonda</label></h4>
                <h5><label>Web Developer,Easy Alliance. Boston, MA, USA.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"This guy is undoubtedly a remarkable iOS developer I'm honored having the opportunity to work with. He's the best possible kind of colleague you can ever wish for!"</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp5" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(5)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Md. Abidur Rahman Mallik</label></h4>
                <h5><label>CTO, MezeGeek Inc. Dhaka, Bangladesh.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"Amit Biswas is one of the very rarest entrepreneurs who possesses the power to make a significant difference single-handedly."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp6" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(6)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Michael Jordan</label></h4>
                <h5><label>Co-Founder, BigO Lab. Queens, New York, USA.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user_default.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"Working with Amit Biswas is a real pleasure."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp7" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(7)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Md. Nasid Kamal Nirnoy</label></h4>
                <h5><label>Software Engineer. Dhaka, Bangladesh.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"He's an exclusive combo of a great person, the best friend, a brother and a motivator to me who'll be always there to back me up."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp8" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(8)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Henry Fonda</label></h4>
                <h5><label>Web Developer,Easy Alliance. Boston, MA, USA.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"This guy is undoubtedly a remarkable iOS developer I'm honored having the opportunity to work with. He's the best possible kind of colleague you can ever wish for!"</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>