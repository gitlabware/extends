<?php
use Phinx\Migration\AbstractMigration;

class CreateContactos extends AbstractMigration
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
        $table = $this->table('contactos');
        $table->addColumn('nombre', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('cargo', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => true,
        ]);
        $table->addColumn('tipo', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->addColumn('celular', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('created', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
