<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Beneficioslist Entity
 *
 * @property int $id
 * @property string $negocio
 * @property string $descuento
 * @property string $logo
 * @property string $logo_path
 * @property int $categoria
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Beneficioslist extends Entity
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
        '*' => true,
        'id' => false,
        'photo_dir' => false 

        /*'negocio' => true,
        'descuento' => true,
        'photo' => true,
        'logo_path' => true,
        'categoria' => true,
        'created' => true,
        'modified' => true*/
    ];
}
