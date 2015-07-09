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
            'null' => false,
        ]);
        
        $table->addColumn('tipo_id', 'string', [
            'default' => null,
            'limit' => 80,
            'null' => false,
        ]);
        
        $table->addColumn('medio_id', 'string', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        
        $table->addColumn('fecha', 'date', [
            'default' => null,
            'null' => false,
        ]);
        
        $table->addColumn('notaprensa', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        
        $table->addColumn('codigo', 'string', [
            'default' => null,
            'limit' => 80,
            'null' => false,
        ]);
        
        $table->addColumn('clasificacion', 'string', [
            'default' => null,
            'limit' => 3,
            'null' => false,
        ]);
                
        
        $table->addColumn('seccion', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        
        $table->addColumn('pagina', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        
        $table->addColumn('titulo', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        
        $table->addColumn('genero', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        
        $table->addColumn('web', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        
        $table->addColumn('fuente', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        
        $table->addColumn('alias', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        
        $table->addColumn('riesgo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        
        $table->addColumn('formato', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        
        $table->addColumn('nombrearchivo', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => false,
        ]);                
        
        $table->addColumn('descripcion', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
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
            'null' => false,
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
