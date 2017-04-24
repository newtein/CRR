<head>
    <link href='css_flight/bootstrap.css' rel='stylesheet' />
    <link href='css_flight/rotating-card.css' rel='stylesheet' />	
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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


</style>
<?php
function displayflights($num,$fid,$name,$headline,$image,$id,$rating,$ta_link){

if($num%2!=0) $style="margin-left:8%;";
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
                            <img class="img-circle" src='<?php echo $image;?>'/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php echo $name;?></h3>
                                <p class="profession"><?php starshow($rating);?></p>
                                <p class="text-center"><?php echo $headline;?> </p>
								
								

                            </div>
                            <div class="footer" style='margin-top:0px;'>
                                <button class="btn btn-simple" id='get<?php echo $id;?>' onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Reviews
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back" style='overflow-y:scroll;cursor:pointer;'  onclick="rotateCard(this)" id='style-3'>
					       
                       <div class='text-center'>
					     <div class='result<?php echo $id;?>' style='padding:20px;'>
						 
						 </div>
						<a href='<?php echo "https://tripadvisor.com".$ta_link; ?>' target='_blank'>   <button type="button" class="btn btn-info btn-md" style='background-color:#ed5565;margin-top:5px;' >Read at TripAdvisor</button></a>
					   </div>
                        

                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            
		
        </div> <!-- end col sm 3 -->
		</div>
<script type="text/javascript">

$('#get<?php echo $id;?>').click(function() {
 
     var id='<?php echo $id;?>';
	 var fid='<?php echo $fid;?>';
	
     $.post('review_detail.php',{postid:id,postfid:fid},function(data){
		 $('.result<?php echo $id;?>').html(data);
	 });	 

    });
		
	
</script>
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



