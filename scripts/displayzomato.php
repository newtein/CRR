<head>
    <link href='css_zomato/bootstrap.css' rel='stylesheet' />
    <link href='css_zomato/rotating-card.css' rel='stylesheet' />
	
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
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
function displayzomato($num,$id,$name,$url,$location,$price_range,$rating,$photo,$menu,$phone,$review1,$rating1,$name1,$review2,$rating2,$name2,$review3,$rating3,$name3,$img1,$img2,$img3){

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
                            <img class="img-circle" src='<?php echo $photo;?>' height=150/>
                        </div>
                        <div class="content">
                            <div class="main">
							    <a href='<?php echo $url;?>' target='_blank'><h3 class="name" style='padding-bottom:10px;'><?php echo $name;?></h3></a>
								<p class="text-center" style='font-size:12px;'><?php echo $location;?> </p>
                               
                                <p class="text-center"><?php starshow(round($rating));?></p>
                                <p class="text-center"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo " ".$phone;?> </p>
								
						<center><a href='<?php echo $menu; ?>' target='_blank'><button type="button" class="btn btn-info btn-sm" style="background-color:#ed5565;margin-top:0px;"><i class="fa fa-cutlery" aria-hidden="true"></i>
  &nbsp;View Menu</button></a></center>';
								
                        
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
						 <div class="well">
						<center> <img class='img-circle' src='<?php echo $img1; ?>' height=100 width=100></center>
						 <h5 class='name'> <?php echo $name1; ?></h5>
						 <p class="text-center"><?php starshow(round($rating1)) ?> </p>
						 <p class="text-center"><?php echo $review1; ?> </p>
						 </div>
						 <div class="well">
						 <center> <img class='img-circle' src='<?php echo $img2; ?>' height=100 width=100></center>
						 <h5 class='name'> <?php echo $name2; ?></h5>
						 <p class="text-center"><?php starshow(round($rating2)) ?> </p>
						 <p class="text-center"><?php echo $review2; ?> </p>
						 </div>
						 <div class="well">
						 <center> <img class='img-circle' src='<?php echo $img3; ?>' height=100 width=100></center>
						 <h5 class='name'> <?php echo $name3; ?></h5>
						 <p class="text-center"><?php starshow(round($rating3)) ?> </p>
						 <p class="text-center"><?php echo $review3; ?> </p>
						 </div>
						 
						 </div>
						  <button type="button" class="btn btn-info btn-md" style='background-color:#ed5565;margin-top:0px;' data-toggle="modal" data-target='#myModal<?php echo $id; ?>'>See all reviews</button>
					   </div>
                        
                           
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            
		         <?php modal($name,$id); ?>
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



