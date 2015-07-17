<?php
use Phinx\Migration\AbstractMigration;

class CreateNoticias extends AbstractMigration
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
        $table = $this->table('noticias');      
        
        $table->addColumn('tema_id', 'string', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        
        $table->addColumn('tipo', 'string', [
            'default' => null,
            'limit' => 80,
            'null' => true,
        ]);
        
        $table->addColumn('medio_id', 'string', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        
        $table->addColumn('fecha', 'date', [
            'default' => null,
            'null' => true,
        ]);
        
        $table->addColumn('notaprensa', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => true,
        ]);
        
        $table->addColumn('codigo', 'string', [
            'default' => null,
            'limit' => 80,
            'null' => true,
        ]);
        
        $table->addColumn('clasificacion', 'string', [
            'default' => null,
            'limit' => 3,
            'null' => true,
        ]);
                
        
        $table->addColumn('seccion', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        
        $table->addColumn('pagina', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        
        $table->addColumn('titulo', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => true,
        ]);
        
        $table->addColumn('genero', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
        ]);
        
        $table->addColumn('web', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => true,
        ]);
        
        $table->addColumn('fuente', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        
        $table->addColumn('alias', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        
        $table->addColumn('riesgo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        
        $table->addColumn('formato', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => true,
        ]);
        
        $table->addColumn('nombrearchivo', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
        ]);                
        
        $table->addColumn('descripcion', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => true,
        ]);
        
        $table->addColumn('tendencia', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        
        $table->addColumn('longitud', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        
        $table->addColumn('costo', 'string', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);                
        
        $table->create();
    }
}
