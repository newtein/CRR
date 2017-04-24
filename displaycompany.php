<head>
    <link href='css_comp/bootstrap.css' rel='stylesheet' />
    <link href='css_comp/rotating-card.css' rel='stylesheet' />
	
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

 
</head>

<style>

#style-3::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

#style-3::-webkit-scrollbar
{
	width: 6px;
	background-color: #F5F5F5;
}

#style-3::-webkit-scrollbar-thumb
{
	background-color: #ed5565;
}

font-family: 'Open Sans', sans-serif;
</style>
<?php
function displaycompany($num,$id,$com_name,$web,$type,$logo,$rating,$review_pros,$review_cons,$job_title,$location,$ceo_name,$ceo_title,$ceo_upvotes,$ceo_downvotes,$ceo_img,$glassdoor,$ceo_bool){

if($num%2==0) $style="margin-left:8%;";
else $style="";

?>
<div class="col-md-5" style='<?php echo $style;?>'>
        
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                           <!-- <img src="images/rotating_card_thumb.png"/>-->
                        </div>
                        <div class="user">
                            <img class="img-circle" src='<?php echo $logo;?>'/>
                        </div>
                        <div class="content">
                            <div class="main">
							    <a href='<?php echo $web;?>' target='_blank'><h3 class="name" style='padding-bottom:10px;'><?php echo $com_name;?></h3></a>
								<p class="text-center" style='font-size:12px;'><?php echo $type;?> </p>
                                <h5 class='jtitle'>Review by <?php echo $job_title;?></h5>
                                <p class="text-center"><?php starshow($rating);?></p>
                                <p class="text-center"><?php echo $location;?> </p>
						<?php 		
								if($ceo_bool==1) echo  '<center><button type="button" class="btn btn-info btn-sm" style="background-color:#ed5565;margin-top:0px;" data-toggle="modal" data-target="#myModal'.$id.'">CEO</button></center>';
								
                        ?>
                            </div>
                            <div class="footer" style='margin-top:0px;'>
                                <button class="btn btn-simple" id='get<?php echo $id;?>' onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Pros/Cons
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back" style='overflow-y:scroll;cursor:pointer;'  onclick="rotateCard(this)" id='style-3'>
					       
                       <div class='text-center'>
					     <div class='result<?php echo $id;?>' style='padding:20px;'>
						 <div class="alert alert-success">
						 <i class="fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $review_pros; ?>
						 </div>
						 <div class="alert alert-danger">
						 <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?php echo $review_cons; ?>
						 </div>
						 </div>
						<a href='<?php echo $glassdoor; ?>' target='_blank'>   <button type="button" class="btn btn-info btn-md" style='background-color:#ed5565;margin-top:5px;' >More at GlassDoor</button></a>
					   </div>
                        
                           
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            
		         <?php modal($id,$com_name,$web,$ceo_name,$ceo_title,$ceo_upvotes,$ceo_downvotes,$ceo_img); ?>
        </div> <!-- end col sm 3 -->
		

<script type="text/javascript">

    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>
		
		<?php
}
?>



