<a href=  "<?php echo $name ?>" >    here is a link </a>
<img src="<?php echo $photo ?>"  alt= "here is photo" </img>

<ol> <?php foreach ($list as $listitem): ?>
    <li>  <?php echo $listitem ?></li>
 <?php endforeach ;?>
</ol>



<?php
foreach ($list as $listitem):
    echo $listitem."</br>";
endforeach;
?>