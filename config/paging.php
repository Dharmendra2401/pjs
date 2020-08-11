<?php
/*mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysql_select_db(DB_NAME);*/
function paginationjquery($conn,$query, $per_page = 10,$page = 1, $url = '?',$type=""){  
    	$query = "SELECT COUNT(*) as `num` FROM {$query}";
    	$row1 = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($row1);
    	$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	$pagination = "";
    	if($lastpage > 1)
    	{	
			$pagination .= "<span class='details'>Page $page of $lastpage</span>";
    		$pagination .= "<ul class='pagination'>";
               
               
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
					{
    					$pagination.= "<li class='active'><a>$counter</a></li>";
    				}
					else{
    					$pagination.= "<li><a href='#' onclick='return BtnClickPage(\"".$counter."\",\"".$type."\");'>$counter</a></li>";					
						}
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    					{	
							$pagination.= "<li class='active'><a>$counter</a></li>";
						}
    					else{
    						$pagination.= "<li><a  href='#' onclick='return BtnClickPage(\"".$counter."\",\"".$type."\");'>$counter</a></li>";	}				
    				}
    				$pagination.= "<li class='dot'><a>..</a></li>";
    				$pagination.= "<li><a  href='#' onclick='return BtnClickPage(\"".$lpm1."\",\"".$type."\");'>$lpm1</a></li>";					
                                $pagination.= "<li><a  href='#' onclick='return BtnClickPage(\"".$lastpage."\",\"".$type."\");'>$lastpage</a></li>";					
    				
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{        $pagination.= "<li><a href='#' onclick='return BtnClickPage(\"1\",\"".$type."\");'>1</a></li>";					
                                 $pagination.= "<li><a href='#' onclick='return BtnClickPage(\"2\",\"".$type."\");'>2</a></li>";					
                                 $pagination.= "<li class='dot'><a>..</a></li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active'><a href='#'>$counter</a></li>";
    					else
    					    
                                            $pagination.= "<li><a href='#' onclick='return BtnClickPage(\"".$counter."\",\"".$type."\");'>$counter</a></li>";									
    				}
    				$pagination.= "<li class='dot'><a>..</a></li>";
    				$pagination.= "<li><a href='#' onclick='return BtnClickPage(\"".$lpm1."\",\"".$type."\");'>$lpm1</a></li>";					
                                $pagination.= "<li><a href='#' onclick='return BtnClickPage(\"".$lastpage."\",\"".$type."\");'>$lastpage</a></li>";					
    			}
    			else
    			{
				{  
                            $pagination.= "<li><a href='#' onclick='return BtnClickPage(\"1\",\"".$type."\");'>1</a></li>";					
                            $pagination.= "<li><a href='#' onclick='return BtnClickPage(\"2\",\"".$type."\");'>2</a></li>";					
    				$pagination.= "<li class='dot'><a>..</a></li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active'><a>$counter</a></li>";
    					else
    					$pagination.= "<li><a href='#' onclick='return BtnClickPage(\"".$counter."\",\"".$type."\");'>$counter</a></li>";									
    				}
    			}
    		}
                
                }
    		
    		if ($page < $counter - 1){ 
    		$pagination.= "<li><a href='#' onclick='return BtnClickPage(\"".$next."\",\"".$type."\");'>Next <i class='fa fa-fw fa-angle-right'></i> </a></li>";										
            $pagination.= "<li><a href='#' onclick='return BtnClickPage(\"".$lastpage."\",\"".$type."\");'>Last <i class='fa fa-fw fa-angle-double-right'></i> </a></li>";    
    		}else{
    		$pagination.= "<li class='active'><a >Next <i class='fa fa-fw fa-angle-right'></i></a></li>";
            $pagination.= "<li class='active'><a >Last <i class='fa fa-fw fa-angle-double-right'></a></li>";
            }
    		$pagination.= "</ul>";		
    	}
    
    
        return $pagination;
    } 
	?>