<?php
$filenames = array(
    'logo.png',
    'draft.png'
);
?>
<html><body>
<div style="width:90%">

<?php
    foreach( $filenames as $filename ):
?>
    <img width="100%" src="images/<?php echo $filename; ?>"><br><br>
<?php
    endforeach;
?>

</div>
</body></html>