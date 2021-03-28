<?php    
include("components/header.php");
?>
			

	<!--HeroImage-->
	<div class="spaceCont"></div>

	<section class="primerCont">
		<div class="container p-0">
			<div class="row m-0">
				<div class="col-lg-12 align-self-center p-0">
					<div class="contText">
						<img src="img/TABLETS_1920x570.jpg" alt="cerrar">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--Contenido-->
	<section class="primerCont">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center">
					<div class="contText">
						<img src="img/titulo.png" alt="cerrar">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contVid">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/m3Jeb4zy72A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>	

	<section>
		<div class="container">
			<!--mod00-->
			<div class="row">
				<?php include("prods/tv.php");?>
				<?php include("prods/aires.php");?>
			</div>
			<div class="row">
				<a name="mod00" id="mod"></a>
				<?php include("components/modal/modalTv.php");?>
				<?php include("components/modal/modalAires.php");?>	
			</div>
			<!--mod01-->
			<div class="row">
				<?php include("prods/tcl10seIcySilver.php");?>
				<?php include("prods/tcl10sePolarNight.php");?>
			</div>
			<div class="row">
				<a name="mod01" id="mod"></a>
				<?php include("components/modal/modal10SEIcySilver.php");?>
				<?php include("components/modal/modal10SEPolarNight.php");?>
			</div>
			<!--mod02-->
			<div class="row">
				<?php include("prods/tclTpro.php");?>
				<?php include("prods/tclLt7m.php");?>
			</div>
			<div class="row">
				<a name="mod02" id="mod"></a>
				<?php include("components/modal/modalTpro.php");?>	
				<?php include("components/modal/modalLT7M.php");?>
			</div>
			<!--mod03-->
			<div class="row">
				<?php include("prods/tcltab10neo.php");?>
				<?php include("prods/tcltab10neoKb.php");?>
			</div>
			<div class="row">
				<a name="mod03" id="mod"></a>
				<?php include("components/modal/modaltab10Neo.php");?>
				<?php include("components/modal/modaltab10Neokb.php");?>
			</div>
			<!--mod04-->
			<div class="row">
				<?php include("prods/tclLt10.php");?>
				<?php include("prods/tcltab10lite.php");?>
			</div>
			<div class="row">
				<a name="mod04" id="mod"></a>
				<?php include("components/modal/modalLT10.php");?>
				<?php include("components/modal/modaltab10lite.php");?>
			</div>
			<!--mod05-->
			<div class="row">
				<?php include("prods/tclL10+.php");?>
				<?php include("prods/tclT9.php");?>
			</div>
			<div class="row">
				<a name="mod05" id="mod"></a>
				<?php include("components/modal/modalL10Plus.php");?>
				<?php include("components/modal/modalT9.php");?>				
			</div>
			
			<!--mod06-->
			<div class="row">
				<?php include("prods/tclL9s.php");?>
				<?php include("prods/tclL7+.php");?>
			</div>
			<div class="row">
				<a name="mod06" id="mod"></a>
				<?php include("components/modal/modalL9s.php");?>
				<?php include("components/modal/modalL7Plus.php");?>	
			</div>
			<!--mod07-->
			<div class="row desactivado">
				<?php include("prods/tclL10Lite.php");?>
			</div>
		</div>
	</section>
	
	<!--FOOTER-->
	<?php
    include("components/footer.php");
    ?>
	<!--SCRIPT-->
    <?php
    include("components/scripts.php");
    ?>

</body>
</html>