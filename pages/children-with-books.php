<?php
    $page_title = 'Children&#39;s Books';
    include ('../shared/header.html');
?> 
    <div class="content">
		  
		  <style>
                body {
                    height: 100%;
                }
                .pager {
                    position: absolute;
                    bottom:30px;
                    left: 20px;
                }
                .page {
                    display: none;
                    height: 90%;
                    overflow: hidden;
                    margin-bottom: 10px;
                }
        </style>
		  
            <div id="page1" class="page" style="display: block;">
		  <div class="header">
				<a href="under-construction.php"><span>C</span>hildren&#39;s  <span>B</span>ooks</a>
		  </div>
		  <div class="book-series-summary">
				<div class="header-novel">
					 <span>M</span>r. <span>B</span>.<span>E</span>.<span>R</span>.
				</div>
            <div class="small-header">
                (Five Book Children's Series)
            </div>
            <div class="series-pic-iftmus">
                <a href="under-construction.php"><img src="../images/no-christmas-353x500.jpg" width="353" height="500" alt="The B.E.R. Who Couldn't Afford Christmas Image" /></a>
            </div>
            <div class="series-text-children">
                <ul class="ul">
						  <li><a href="under-construction.php"><span>T</span>he B.E.R. Who Couldn't Afford Christmas</a></li>
								<p>
									 A stuffed bear in a toy store has been sold and knows that he must face Christmas at real peoples&#39; house. He has no idea how to participate
									 in the holiday without money to buy gifts, or fingers to wrap presents.
								</p>
								<div class="text">
									 Copyright &copy; 1990 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
								</div>
						  <li><a href="under-construction.php"><span>S</span>ir BER-A-LOT (In Search of the Grumble Grump)</a></li>
								<p>
									 A stuffed bear wakes up as a knight, sent on a quest to seek out and vanquish the spririt of discontent over the land; the source of which is
									 the Grumble Grump.
								</p>
								<div class="text">
									 Copyright &copy; 2000 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
								</div>
						  <li><a href="under-construction.php"><span>A</span> B.E.R. Without A Home</a></li>
								<p>
									 A stuffed bear is homeless, having lost his family and experiences an aspect of living that most pray they never will.
								</p>
								<div class="text">
									 Copyright &copy; 2000 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
								</div>
						  <li><a href="under-construction.php"><span>M</span>r. B.E.R. (A Three Dog Night)</a></li>
								<p>
									 A stuffed bear rescues himself, three dogs and a lost child while finding them all a new home.
								</p>
								<div class="text">
									 Copyright &copy; 2000 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
								</div>
						  <li><a href="under-construction.php"><span>M</span>r. B.E.R. (To Find The Final Stitch)</a></li>
								<p>
									 A stuffed bear goes in search of that final stitch that promises to make him a real B.E.R.
								</p>
								<div class="text">
									 Copyright &copy; 2000 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
								</div>
					 </ul>
            </div>  <!-- [end series-text-children div] -->
        </div>  <!-- [end books-series-summary div] -->
	 </div>  <!-- [end page 1] -->
		  
				
		  <div id="page2" class="page">
				<div class="book-series-monster">
					 <div class="header">
						  <span>T</span>he <span>M</span>onster <span>T</span>here <span>U</span>nder <span>M</span>y <span>B</span>ed
					 </div>
					 
					 <div class="series-pic-iftmus">
						  <img src="../images/the-monster-there-378x500.jpg" width="378" height="500" alt="The Monster There Under My Bed Image" /></a>
					 </div>
				
					 <div class="text">
						  Copyright &copy; 1987 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
					 </div>
					 </div>  <!--[end series-text-monster div] -->
				</div>  <!-- [end books-series-summary div] -->
		  </div>  <!-- [end page 2 -->
		  
		  <div id="page3" class="page">
				<div class="book-series-summary">
					 <div class="header">
						  <span>T</span>he <span>O</span>nce <span>L</span>ittle <span>B</span>reeze 
					 </div>
					 
					 <div class="series-pic-iftmus">
						  <img src="../images/the-once-little-breeze-377x500.jpg" width="377" height="500" alt="The Once Little Breeze Image" /></a>
					 </div>
					 
					 <div class="text">
						  Copyright &copy; 1999 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
					 </div>
					 </div>  <!--[end series-text-monster div] -->
				</div>  <!-- [end books-series-summary div] -->
		  </div>  <!-- [end page 3] -->
     
	 <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../scripts/jquery.simplePagination.js"></script>
    
    <script>
        $(function() {
            var currentPage = 1;
            $(".pager").pagination({
                items: 4,
                itemsOnPage: 1,
                cssStyle: 'light-theme',
                onPageClick: onPageClick
            });
            
            function onPageClick(pageNumber, event) {
                $("#page" + currentPage).hide();
                $("#page" + pageNumber).show();
                currentPage = pageNumber;
            }
        });
    </script>     
      
<div class="pager"></div>   
        
<?php
    include ('../shared/footer.html');            
?>         