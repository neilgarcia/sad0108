<div class="main">
					<a href="#" class="m-btn-grey grey-btn">request a demo</a>
					
					<section class="cnus">
					<?php
					
					if(isset($_SESSION['activeadmin'])){
						include_once 'prodAdd.php';
					}else{
						echo '<br><br><br><br><br><br><br>
						
						<h2><strong>You dont have the permission to view this page..</strong></h2>
						
						<div class="cl">&nbsp;</div>

						<br><br><br><br><br><br><br><br>';
					}
						
					?>
					</section>
					

				</div>