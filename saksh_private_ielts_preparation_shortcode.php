<?php

//[PrivateIELTSEXCERCISE]
function saksh_private_ielts_preparation__excersize_func( $atts ){
    ob_start();
	
	
   if(isset($_GET['exercise_id'])) 
{ 
   
  $exercise_id=sanitize_text_field($_GET['exercise_id']);
  
      
    global $wpdb;
     
    ?>
        <h1>Exercise -  <?php  echo  $exercise_id; ?></h1>

  
        
          <div id="sakshaccordion">
            
            
            
  <?php

$query = "SELECT * FROM {$wpdb->prefix}exercise where exercise_id= $exercise_id";


    $results = $wpdb->get_results( $query , OBJECT );
    

     foreach (   $results  as $row    ) 
    { 
      // print_r($row);
        ?>
      
            
            <h3 class="sakshh3">
                
                
                 
        
        <p>Question: <?php  echo $row->question_no ?> <?php echo $row->question ?></p>
        
        <input type="radio" id="contactChoice<?php echo $row->qid ?>"
      value="1" name="answer">
    <label for="contactChoice<?php echo $row->qid ?>"><?php echo $row->a1 ?></label>

    <input type="radio" id="contactChoice<?php echo $row->qid ?>"
     value="2" name="answer">
    <label for="contactChoice<?php echo $row->qid ?>"><?php echo $row->a2 ?></label>

    <input type="radio" id="contactChoice<?php echo $row->qid ?>"
      value="3" name="answer">
    <label for="contactChoice<?php echo $row->qid ?>"><?php echo $row->a3 ?></label>
       <input type="radio" id="contactChoice<?php echo $row->qid ?>"
      value="4" name="answer">
    <label for="contactChoice<?php echo $row->qid ?>"><?php echo $row->a4 ?></label>
  
       
        
  <!-- Toogle Buttons -->
    <button type="button" class="btn btn-warning  togglebtn" id="toggle-btn<?php echo $row->id ?>"
  data-toggle="collapse<?php echo $row->id ?>" data-target="#toggle-example<?php echo $row->id ?>">  Show Answer</button>
 
 
 
    </h3>
    
    
    <div class="block">
        
        
        
 
    
    <div id="toggle-example<?php echo $row->id ?>" class="collapse<?php echo $row->id ?> in">
      <p>Correct Answer : <?php echo $row->answer_no  . "  ". "[".$row->answer."]"; ?></p>
          <p>Notes: <?php echo $row->answer_detail ; ?></p>
</div>



        
    
    </div>  
        <?php
    }
    
    
    echo "</div>";
    
    
}
else
{
    global $wpdb;
    
$query = "SELECT exercise_id,exercise_title FROM {$wpdb->prefix}exercise group by exercise_id";




    $results = $wpdb->get_results( $query , OBJECT );
    
  
     
    ?>
    
    
    
 <div class="box-body table-responsive no-padding">
     <table class="sakshtable  table table-hover">
          <tr>
            
              <th>Excercise ID</th>
              <th>Title</th>   <th>&nbsp;</th>
          </tr>
          
                <?php
   
   foreach (   $results  as $row    ) 
	{ 
		
  
        
                ?>
                <tr>
                 
                  <td><?php echo $row->exercise_id ; ?></td> 
                  <td><?php echo $row->exercise_title ; ?></td> 
                  <td><a href="?exercise_id=<?php echo $row->exercise_id ; ?>">View</a>
                  
                  
                  </td>
                  </tr>
                <?php


}
 ?>
              
       </table>
    </div>
    
 
 
 
 <?php
    
    
}
	   $output = ob_get_contents();
    ob_end_clean(); 
    return    $output;
}
add_shortcode( 'PrivateIELTSEXCERCISE', 'saksh_private_ielts_preparation__excersize_func' );
