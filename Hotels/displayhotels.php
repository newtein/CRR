<head>
    <link href='css/bootstrap.css' rel='stylesheet' />
    <link href='css/rotating-card.css' rel='stylesheet' />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</head>
<?php
function displayhotels($hotelname,$stars,$review_count,$location,$img,$hid,$price,$link){


?>
<div class="col-sm-11 col-sm-offset-1">
        <div class="col-md-11 col-sm-6">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                           <!-- <img src="images/rotating_card_thumb.png"/>-->
                        </div>
                        <div class="user">
                            <img class="img-circle" height=200 src='<?php echo $img;?>'/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php echo $hotelname;?></h3>
                                <p class="profession"><?php starshow($stars);?></p>
                                <p class="text-center"><?php echo $location;?> </p>
								
								<div class='row' style='margin-bottom:0px;'>
		                               	<div class='col-md-4'></div>
						
		                     	<div class='col-md-4' style='margin-left:25px;'>
              			           <a href='<?php echo $link;?>' target="_blank" class="booknow"> Book Now @<span class="fl">₹ <?php echo $price;?></span> </a>
			                    </div>
			                  

                                </div>

                            </div>
                            <div class="footer" style='margin-top:0px;'>
                                <button class="btn btn-simple" id='get<?php echo $hid;?>' onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Reviews
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back" style='overflow-y:scroll;'>
                       <div class='text-center'>
					     <div class='result<?php echo $hid;?>'>
						 
						 </div>
						   <button type="button" class="btn btn-info btn-md" style='background-color:#ed5565;margin-top:5px;' data-toggle="modal" data-target='#myModal<?php echo $hid; ?>'>See all reviews</button>
					   </div>
                        
                        <div class="footer">
				 
						  
                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button>
						 
                         
							</div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
			 <?php modal($hid,$hotelname); ?>
        </div> <!-- end col sm 3 -->
		</div>
<script type="text/javascript">

$('#get<?php echo $hid;?>').click(function() {
 
     var id='<?php echo $hid;?>';
	
     $.post('reviewdisplay.php',{postid:id},function(data){
		 $('.result<?php echo $hid;?>').html(data);
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
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>


