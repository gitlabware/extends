<?php

use Phinx\Migration\AbstractMigration;

class CambiaEstado extends AbstractMigration {

  /**
   * Change Method.
   *
   * More information on this method is available here:
   * http://docs.phinx.org/en/latest/migrations.html#the-change-method
   * @return void
   */
  public function change() {
    $table = $this->table('contactosboletines');
    $table->changeColumn('estado', 'integer', [
      'default' => null,
      'limit' => 1,
      'null' => true,
    ]);
    $table->addColumn('enviado', 'integer', [
      'default' => null,
      'limit' => 1,
      'null' => true,
    ]);
    $table->update();
  }

}
