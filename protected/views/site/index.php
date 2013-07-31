<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<ul>
	<li><a href="http://erp.ucrm.uniforce.net/UniforceAccounting/index.php/users">Users</a></li>
	<li><a href="http://erp.ucrm.uniforce.net/UniforceAccounting/index.php/usersRole">Users Role</a></li>
	<li><a href="http://erp.ucrm.uniforce.net/UniforceAccounting/index.php/accounts">Accounts</a></li>
	<li><a href="http://erp.ucrm.uniforce.net/UniforceAccounting/index.php/products">Products</a></li>
	<li><a href="http://erp.ucrm.uniforce.net/UniforceAccounting/index.php/productsCategory">Products Category</a></li>
</ul>

<?/*
<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
*/?>
