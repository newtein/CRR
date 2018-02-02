<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  div.modal div.modal-backdrop {
    z-index: 0;
}
body.modal-open div.modal-backdrop { 
    z-index: 0; 
}
  
  </style>
</head>
<body>
<?php

function modal($id,$com_name,$web,$ceo_name,$ceo_title,$ceo_upvotes,$ceo_downvotes,$ceo_img){

?>




<!-- Modal -->
<div id='myModal<?php echo $id; ?>' class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style='text-align:center;'>CEO <a href='<?php echo $web;?>' target='_blank'><?php echo $com_name;?></a></h4>
      </div>
      <div class="modal-body" style="height:50%;text-align:center;">
      <img class="img-circle" src='<?php echo  $ceo_img;?>' width=150 height=150>
	  <h3 class='name'><?php echo $ceo_name;?> </h3>
	  <h5 class='jtitle'><?php echo $ceo_title;?> </h5>
	  <div class="row">
       <div class="col-6-sm"> <div class="alert alert-success">
						 <i class="fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $ceo_upvotes."%"; ?>
						 </div> </div>
	   <div class="col-6-sm"> <div class="alert alert-danger">
						 <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?php echo $ceo_downvotes."%"; ?>
						 </div> </div>
	  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"></button>
      </div>
    </div>

  </div>
</div>

<?php

}



?>
</body>