<?php
use Migrations\AbstractMigration;

class BeneficiosList extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('beneficiosList');
        $table ->addColumn('negocio','string')
               ->addColumn('descuento','string')
               ->addColumn('photo','string')
               ->addColumn('photo_dir','string')
               ->addColumn('categoria','integer')
               ->addColumn('created', 'datetime')
               ->addColumn('modified', 'datetime')
               ->create();
    
    }
}
