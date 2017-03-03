in your theme -->edit template/page/html/header.phtml

find  $this->getChildHtml('topMenu')  and edit :

<?php
     $menu =  $this->getChildHtml('topMenu');
     $menuContainerHtml = '<div class="nav-container>'.$menu.'</div>';
?>
<div class="hp-blocks-holder">
     <?php echo $menuContainerHtml; ?>
</div>
