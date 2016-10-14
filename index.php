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
    <img src="images/<?php echo $filename; ?>"><br><br>
<?php
    endforeach;
?>

</div>
</body></html>