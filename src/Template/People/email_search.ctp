<?php
/**
 * @type $this \App\View\AppView
 * @type $affiliate_id int
 * @type $affiliates string[]
 */

$this->Html->addCrumb(__('People'));
$this->Html->addCrumb(__('Email Search'));
?>

<div class="people search">
	<h2><?= __('Search People') ?></h2>

	<div class="search form">
		<?= $this->Form->create(false, ['align' => 'horizontal']) ?>
<?php
if (isset($affiliate_id)) {
	echo $this->Form->hidden('affiliate_id', ['value' => $affiliate_id]);
} else if (isset($affiliates)) {
	echo $this->Form->input('affiliate_id', [
		'options' => $affiliates,
		'hide_single' => true,
	]);
}

echo $this->Form->input('email', ['size' => 70, 'maxlength' => 100]);
echo $this->Form->hidden('sort', ['value' => 'last_name']);
echo $this->Form->hidden('direction', ['value' => 'asc']);

echo $this->Jquery->ajaxButton(__('Search'), ['selector' => '#SearchResults']);

echo $this->Form->end();
?>
	</div>

	<div id="SearchResults" class="zuluru_pagination">

<?= $this->element('People/search_results') ?>

	</div>
</div>
