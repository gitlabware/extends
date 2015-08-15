<?php

use Phinx\Migration\AbstractMigration;

class CambioBoletin extends AbstractMigration {

  /**
   * Change Method.
   *
   * More information on this method is available here:
   * http://docs.phinx.org/en/latest/migrations.html#the-change-method
   * @return void
   */
  public function change() {
    $table = $this->table('contactosboletines');
    $table->removeColumn('boletine_id');
    $table->addColumn('numero', 'integer', [
      'default' => null,
      'limit' => 11,
      'null' => true,
    ]);
    $table->update();
  }

}
