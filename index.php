<?php
$filenames = array(
	"logo.png",
	"26.png",
	"25.png",
	"24.png",
	"23.png",
	"22.png",
	"21.png",
	"20.png",
   "occupy_the_future2.png",
	"newworldorder.png",
	"stage2.png",
	"draft.png",
	"afrika.png",
	"monopoly.png",
	"occupy_the_future.png",
	"stage.png",
	"waris.png"
);
?>
<html><body>
<div style="width:95%">

<?php
    foreach( $filenames as $filename ):
?>
    <img width="100%" src="images/<?php echo $filename; ?>"><br><br>
<?php
    endforeach;
?>

</div>
</body></html>