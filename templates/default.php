<?php
foreach($this->_['entries'] as $entry){
?>

<h2><a href="?action=<?php echo $entry['content'] ?>&id=<?php echo $entry['id'] ?>"><?php echo $entry['title']; ?></a></h2>


<?php
}
?>