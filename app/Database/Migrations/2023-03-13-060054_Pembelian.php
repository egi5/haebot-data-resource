<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembelian extends Migration
{
    public function up()
    {
        // Pembelian
        $fields = [
            'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_pemesanan'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'id_supplier'           => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'id_user'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'id_gudang'             => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'no_pembelian'          => ['type' => 'varchar', 'constraint' => 30],
            'tanggal'               => ['type' => 'date'],
            'origin'                => ['type' => 'varchar', 'constraint' => 80],
            'total_harga_produk'    => ['type' => 'int', 'unsigned' => true],
            'status'                => ['type' => 'enum', 'constraint' => ['Diproses', 'Dikirim', 'Sampai', 'Gagal'], 'default' => 'Diproses'],
            'tanggal_datang'        => ['type' => 'date', 'null' => true],
            'dimensi'               => ['type' => 'varchar', 'constraint' => 30],
            'berat'                 => ['type' => 'varchar', 'constraint' => 30],
            'carton_koli'           => ['type' => 'varchar', 'constraint' => 250],
            'catatan'               => ['type' => 'varchar', 'constraint' => 250],
            'created_at'            => ['type' => 'datetime', 'null' => true],
            'updated_at'            => ['type' => 'datetime', 'null' => true],
            'deleted_at'            => ['type' => 'datetime', 'null' => true],
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('no_pembelian');
        $this->forge->addForeignKey('id_pemesanan', 'pemesanan', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('id_supplier', 'supplier', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'users', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('id_gudang', 'gudang', 'id', '', 'CASCADE');
        $this->forge->createTable('pembelian', true);



        // Pembelian List Produk
        $fields = [
            'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_pembelian'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'default' => 0],
            'id_produk'             => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'default' => 0],
            'qty'                   => ['type' => 'int', 'unsigned' => true],
            'harga_satuan'          => ['type' => 'int', 'unsigned' => true],
            'total_harga'           => ['type' => 'int', 'unsigned' => true],
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_pembelian', 'pembelian', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('id_produk', 'produk', 'id', '', 'CASCADE');
        $this->forge->createTable('pembelian_detail', true);
    }

    public function down()
    {
        $this->forge->dropTable('pembelian_detail');
        $this->forge->dropTable('pembelian');
    }
}
