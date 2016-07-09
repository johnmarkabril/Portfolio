
<!-- JQUERY -->
<script src="<?php echo base_url();?>public/js/jquery-2.2.3.min.js"></script>

<!-- TETHER -->
<script src="<?php echo base_url();?>public/js/tether.min.js"></script>

<!-- BOOTSTRAP -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>

<!-- MDB -->
<script src="<?php echo base_url();?>public/js/mdb.min.js"></script>

<script>
	$(document).ready(function(){
		function hide_all_panels(){
			$("#csharp-pnl").hide();
			$("#graphics-pnl").hide();
			$("#vbnet-pnl").hide();
			$("#microcon-pnl").hide();
			$("#webdev-pnl").hide();
		}
		$("#btn-csharp").click(function(){
			hide_all_panels();
			$("#csharp-pnl").show();
		});
		$("#btn-graphics").click(function(){
			hide_all_panels();
			$("#graphics-pnl").show();
		});
		$("#btn-vbnet").click(function(){
			hide_all_panels();
			$("#vbnet-pnl").show();
		});
		$("#btn-microcon").click(function(){
			hide_all_panels();
			$("#microcon-pnl").show();
		});
		$("#btn-webdev").click(function(){
			hide_all_panels();
			$("#webdev-pnl").show();
		});
		$("#btn-projects").click(function(){
			hide_all_panels();
		});

		// MODALS DOWNLOAD RESUME
		$("#btn-down-resume").click(function(){
			location.href="<?php base_url(); ?>public/files/JOHNMARKABRIL_RESUME.docx";
		});
	})
</script>