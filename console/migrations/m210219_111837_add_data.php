<?php
/**
 * @copyright Anton Tuyakhov <atuyakhov@gmail.com>
 */

namespace tuyakhov\notifications\migrations;

use yii\db\Migration;

class m210219_111837_add_data extends Migration
{

    public function up()
    {
        $this->addColumn('notification', 'data', $this->text());
    }

    public function down()
    {
        $this->dropColumn('notification', 'data');
    }

}