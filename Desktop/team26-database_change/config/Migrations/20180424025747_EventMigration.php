<?php
use Migrations\AbstractMigration;

class EventMigration extends AbstractMigration
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
        $table = $this->table('events');
        $table
            ->addColumn('title', 'string', [
                'default' => null,
                'null' => false
            ])
            ->addColumn('details', 'string', [
                'default' => null,
                'null' => false
            ])
            ->addColumn('start', 'datetime', [
                'default' => null,
                'null' => false
            ])
            ->addColumn('end', 'datetime', [
                'default' => null,
                'null' => false
            ])
            ->addColumn('all_day', 'boolean', [
                'default' => '1',
                'null' => false
            ])
            ->addColumn('status', 'string', [
                'default' => 'Scheduled',
                'null' => false
            ])
            ->addColumn('active', 'boolean', [
                'default' => '1',
                'null' => false
            ])
            ->addColumn('event_type_id', 'integer')
            ->addForeignKey('event_type_id', 'event_types', 'id')
            ->create();
    }
}
