					<?php


							$file="../css/images/shirtTest.png";

							$inner = filter_input(INPUT_POST, 'inner');
							$outer = filter_input(INPUT_POST, 'outer');
							$rgbInner = explode(',', $inner);
							$rgbOuter = explode(',', $outer);
							

							$im = imagecreatefrompng ($file);
							imagetruecolortopalette($im,false, 255);
							
							$index = imagecolorclosest( $im,  150,150,150 ); // get White COlor
							imagecolorset($im,$index,$rgbOuter[0],$rgbOuter[1],$rgbOuter[2]); // SET NEW COLOR
							$index = imagecolorclosest( $im,  0,0,0 ); // get White COlor
							imagecolorset($im,$index,$rgbInner[0],$rgbInner[1],$rgbInner[2]); // SET NEW COLOR
							ob_start();
							imagepng($im);
							// Capture the output
							$imagedata = ob_get_contents();
							// Clear the output buffer
							ob_end_clean();

							echo '<p><img src="data:image/png;base64,'.base64_encode($imagedata).'" alt="image 1" style="width:30%;height:30%;" /></p>';
							
					?>