<?php  
 //filter.php  

 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
    
                 $connect = mysqli_connect("localhost", "root", "", "inventory_mgt_sys");  
        
             
            
      
      $output = '';  
      $query = "  
           SELECT * FROM all_stores  
           WHERE sup_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Name</th>  
                     <th width="5%">Classification</th> 
                     <th width="43%">Cost</th>  
                     <th width="10%">Supply date</th>  
                     <th width="12%">Issued to Coy</th> 
                       <th width="12%">Grant</th> 
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row["nomenclature"].'</td>
                                         
                               <td>'.$row["classification"].'</td>
                               <td>'.$row["cost"].'</td>
                                        <td>'.$row["sup_date"].'</td>
                                        <td>'.$row["coy"].'</td> 
                                        <td>'.$row["grnt"].'</td> 
                    
                     
           </tr>
                '; 
           }
         
         
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No item found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output; 
     
 }  
 ?>
