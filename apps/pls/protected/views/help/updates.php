<?php
/**
 * @var HelpController     $this
 * @var SimpleXMLElement[] $updates
 */

$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('pls', 'Latest Updates');
$this->breadcrumbs = [
	Yii::t('pls', 'Latest Updates'),
];
?>
<h1><?= Yii::t('pls', 'Latest Updates') ?></h1>

<div class="row">
	<?php
	if (!empty($updates)) {
		for($x=0; $x < 5; $x++) {
			?>
			<div class="col-md-12 update">
				<h3><a href="<?= $updates->link ?>" target="_blank"><?= $updates->title ?></a></h3>
				<p><?= $updates->description ?></p>
			</div>
			<?php
		}
	}
	else {
		?>
		<?= Yii::t('pls', 'No updates are available at this time.') ?>
		<?php
	}
	?>
</div>