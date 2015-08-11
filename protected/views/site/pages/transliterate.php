<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Transliterate';
$this->breadcrumbs=array(
    'Transliterate',
);
?>

<form action="" method="post">
    <p>
      <?php error_reporting(E_ALL);
        ini_set('display_errors', 'on');
        echo $this->handledText; ?>
    </p>
    <textarea name="text" style="width:500px; height: 300px"></textarea>
    <br>
    <input type="submit" />
</form>
