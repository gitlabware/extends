<?php
use Phinx\Migration\AbstractMigration;

class AddCiudadToMedios extends AbstractMigration
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
        $table = $this->table('medios');
        $table->addColumn('ciudad', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->update();
    }
}
