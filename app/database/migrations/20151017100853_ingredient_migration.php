<?php

use Phinx\Migration\AbstractMigration;

class IngredientMigration extends AbstractMigration
{

    /**
     * Migrate Up
     */
    public function up()
    {
        $ingredients = $this->table('ingredients');
        $ingredients->addColumn('name', 'string', ['limit' => 40])
            ->addColumn('price', 'integer', ['null' => true])
            ->addColumn('calories', 'integer', ['null' => true])
            ->addColumn('sugar', 'integer', ['null' => true])
            ->addColumn('fat', 'integer', ['null' => true])
            ->addColumn('protein', 'integer', ['null' => true])
            ->addColumn('sodium', 'integer', ['null' => true])
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->addIndex('name', ['unique' => true])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('ingredients');
    }

}
