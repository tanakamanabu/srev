<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventPoint Entity
 *
 * @property int $id
 * @property int|null $event_id
 * @property int|null $room_id
 * @property int|null $point
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\Room $room
 */
class EventPoint extends Entity
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
        'event_id' => true,
        'room_id' => true,
        'point' => true,
        'created' => true,
        'event' => true,
        'room' => true,
    ];
}
