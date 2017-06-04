﻿<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <div id="banner">
                     <?php
                        $bannernames=file('files/bannernames.txt', FILE_IGNORE_NEW_LINES);
                        $bannerimgs=file('files/bannerimgs.txt', FILE_IGNORE_NEW_LINES);
                        $bannersrcs=file('files/bannersrcs.txt', FILE_IGNORE_NEW_LINES);
                        for ($i=0; $i<count($bannernames); $i++)
                        {
                        	echo '<a href="',$bannersrcs[$i],'"target="_blank"><img src="banner/',$bannerimgs[$i],'" alt="',$bannernames[$i],'"></a>';
                        }
                        ?>
                  </div>
                  <?php
					 $productarticles=file('files/productarticles.txt', FILE_IGNORE_NEW_LINES);
                     $productnames=file('files/productnames.txt', FILE_IGNORE_NEW_LINES);
                     $productdescs=file('files/productdescs.txt', FILE_IGNORE_NEW_LINES);
                     $productimgs=file('files/productimgs.txt', FILE_IGNORE_NEW_LINES);
                     $productprices=file('files/productprices.txt', FILE_IGNORE_NEW_LINES);
                     for ($i=0; $i<count($productarticles); $i++)
                     {
                     	echo '<div id="product">
			     <p  style="font-size:28px; padding:15px;"><img align="left" src="products/',$productimgs[$i],'" alt="',$productnames[$i],'"/>',$productnames[$i],'<br><p align="left" style="margin-top:20px;text-align:justify;">Артикул: ',$productarticles[$i], '<br>' , $productdescs[$i], '</p></p>
			     <p align="center" style="font-size:24px;margin-top:50px;">Цена: ',$productprices[$i],'руб.</p>';
                     
                      	if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
			     echo '<form action="delproduct.php" method="GET" >
			     <center><input style="margin-top:5px;" type="submit" value="Удалить товар" name="product',$i,'"/></center>
			     </form>';
			}
			else
			{
			     echo '<form action="addtobasket.php">';
			     $is_item_added[$i]=false;
			     for ($j=0; $j<$_SESSION['basketcounter']; $j++) {
			     	if ($_SESSION['item'.$j]==$productarticles[$i])
			     	{
			     		echo '<center><input style="margin-top:5px;" type="submit" value="Добавлено в корзину" name="product', $i, '" disabled></center>';
			     		$is_item_added[$i]=true;
			     	}
			     }
			     if ($is_item_added[$i]==false)
			     {
			     echo '<center><input style="margin-top:5px;" type="submit" value="Добавить в корзину" name="product', $i, '"></center>';
			     }
			     echo '</form>';
			};echo'</div>';
		     }	
		       
                     	
                     ?>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>
