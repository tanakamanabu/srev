<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property int $sr_id
 * @property string $name
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sr $sr
 * @property \App\Model\Entity\EventPoint[] $event_points
 * @property \App\Model\Entity\EventRoom[] $event_rooms
 */
class Room extends Entity
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
        'sr_id' => true,
        'name' => true,
        'created' => true,
        'modified' => true,
        'sr' => true,
        'event_points' => true,
        'event_rooms' => true,
    ];
}
