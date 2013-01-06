<?php 
  $title = "Tour Virtual";
  $activeMenu = "tour";
?>
<?php include("shared/top.php") ?>

    <div class="tabbable">
	    <ul class="nav nav-tabs">
		    <li class="active"><a href="#tab1" data-toggle="tab">Embedded</a></li>
		    <li><a href="#tab2" data-toggle="tab">Pop-Up</a></li>
		    <li><a href="#tab3" data-toggle="tab">QRCode</a></li>
	    </ul>
	    <div class="tab-content">
		    <div class="tab-pane active" id="tab1">
		    	<p>O Tour Virtual pode ser facilmente incorporado à sua homepage em qualquer dimensão.</p>
		    	<iframe src="http://www.virtour.com.br/vtour/tour.html" width="640px" height="480px"></iframe>
	    	</div>
	    	<div class="tab-pane" id="tab2">
	    		<p>Howdy, I'm in Section 2.</p>
	    	</div>
	    	<div class="tab-pane" id="tab3">
	    		<p>Howdy, I'm in Section 3.</p>
	    	</div>	    	
	    </div>
    </div>

<?php include("shared/bottom.php") ?>