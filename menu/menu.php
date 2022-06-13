<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/internal_settings.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php';
use classes\Link;
?>
<ul>
    <li><?php echo (new Link())->setAttr('href', '/content/page1.php')->setText('page1')->show();?></li>
    <li><?php echo (new Link())->setAttr('href', '/content/page2.php')->setText('page2')->show();?></li>
    <li><?php echo (new Link())->setAttr('href', '/content/page3.php')->setText('page3')->show();?></li>
    <li><?php echo (new Link())->setAttr('href', '/content/page4.php')->setText('page4')->show();?></li>
    <li><?php echo (new Link())->setAttr('href', '/content/page5.php')->setText('page5')->show();?></li>
</ul>

<style>
    .active{
        color: red;
        font-weight: bold;
    }
</style>