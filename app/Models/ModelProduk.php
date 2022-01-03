<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelProduk extends Model
{
    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->db->table('barang')->get()->getResult();
        } else {
            return $this->db->table('barang')->getWhere(['id' => $id]);
        }
    }

    function simpanProduk($id, $data)
    {
        if ($id) {
            $type = "update";
            $cek =  $this->db->table('barang')->update($data, ['id'  => $id]);
        } else {
            $type = "simpan";
            $cek =  $this->db->table('barang')->insert($data);
        }
        if ($cek) {
            return [
                'kode'      => 'success',
                'msg'       => 'berhasil'
            ];
        }
        return [
            'kode'      => 'error',
            'msg'       => 'gagal'
        ];
    }

    function hapusBarang($id)
    {
        $cek = $this->db->table('barang')->where('id', $id)->delete();
        if ($cek) {
            return [
                'kode'      => 'success',
                'msg'       => 'Data Berhasil Dihapus'
            ];
        }
        return [
            'kode'      => 'error',
            'msg'       => 'Gagal Hapus Data'
        ];
    }
}
