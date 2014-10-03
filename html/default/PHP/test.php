					<?php


							$file="css/images/shirt.png";
							
							$inner = '155,255,255';
							$outer = '0,0,0';
							$rgbInner = explode(',', $inner);
							$rgbOuter = explode(',', $outer);
							

							$im = imagecreatefrompng ($file);
							imagetruecolortopalette($im,false, 255);
							
		
							imagecolorset($im,58,$rgbOuter[0],$rgbOuter[1],$rgbOuter[2]); // SET NEW COLOR
						

							imagecolorset($im,53,$rgbInner[0],$rgbInner[1],$rgbInner[2]); // SET NEW COLOR
							ob_start();
							imagepng($im);
							// Capture the output
							$imagedata = ob_get_contents();
							// Clear the output buffer
							ob_end_clean();

							echo '<p><img src="data:image/png;base64,'.base64_encode($imagedata).'" alt="image 1" style="width:30%;height:30%;" /></p>';
							
					?>