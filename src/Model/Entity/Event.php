<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $begin
 * @property \Cake\I18n\FrozenTime $end
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\EventPoint[] $event_points
 * @property \App\Model\Entity\EventRoom[] $event_rooms
 */
class Event extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'slug' => true,
        'begin' => true,
        'end' => true,
        'created' => true,
        'modified' => true,
        'event_points' => true,
        'event_rooms' => true,
    ];
}
