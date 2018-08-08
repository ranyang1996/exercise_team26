<?php
use Migrations\AbstractMigration;

class CreateFiles extends AbstractMigration
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
        $table = $this->table('files');
        $table->addColumn('file_name', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => false,
        ]);
        $table->addColumn('file', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('category', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->create();
    }
}
