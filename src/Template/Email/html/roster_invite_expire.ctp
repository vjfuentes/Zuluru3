<?php
use Cake\Core\Configure;
use Cake\Routing\Router;

/**
 * @type $person \App\Model\Entity\Person
 * @type $team \App\Model\Entity\Team
 * @type $roster \App\Model\Entity\TeamsPerson
 * @type $captains string
 */
?>

<p><?= __('Dear {0},', $captains) ?></p>
<p><?= __('Your invitation to {0} to join the roster of the {1} team {2} as a {3} was not responded to by the player in the allotted time, and has been removed.',
	$person->full_name,
	Configure::read('organization.name'),
	$this->Html->link($team->name, Router::url(['controller' => 'Teams', 'action' => 'view', 'team' => $team->id], true)),
	Configure::read("options.roster_role.{$roster->role}")
) ?></p>
<?= $this->element('Email/html/footer');
