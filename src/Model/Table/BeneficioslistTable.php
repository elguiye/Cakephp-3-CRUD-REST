<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Beneficioslist Model
 *
 * @method \App\Model\Entity\Beneficioslist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Beneficioslist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Beneficioslist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Beneficioslist|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Beneficioslist|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Beneficioslist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Beneficioslist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Beneficioslist findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BeneficioslistTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('beneficioslist');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');


        $this->addBehavior('Proffer.Proffer', [
            'photo' => [	// The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',	// The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [	// Define the prefix of your thumbnail
                        'w' => 300,	// Width
                        'h' => 300,	// Height
                        'crop' => true,
                        'jpeg_quality'	=> 100
                    ],
                    'portrait' => [		// Define a second thumbnail
                        'w' => 100,
                        'h' => 300
                    ],
                ],
                'thumbnailMethod' => 'gd'	// Options are Imagick or Gd
            ]
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('negocio')
            ->maxLength('negocio', 255)
            ->requirePresence('negocio', 'create')
            ->notEmpty('negocio');

        $validator
            ->scalar('descuento')
            ->maxLength('descuento', 255)
            ->requirePresence('descuento', 'create')
            ->notEmpty('descuento');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->integer('categoria')
            ->requirePresence('categoria', 'create')
            ->notEmpty('categoria');

        return $validator;
    }



    
}
