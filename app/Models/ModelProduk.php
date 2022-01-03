<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelProduk extends Model
{
    public function getProduct($id = false)
    {
        $builder = $this->db->table('barang');
        if ($id === false) {
            return $builder->get()->getResult();
        } else {
            return $builder->getWhere(['id' => $id]);
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
            $res = [
                'kode'      => 'success',
                'msg'       => 'berhasil'
            ];
        } else {
            $res = [
                'kode'      => 'error',
                'msg'       => 'gagal'
            ];
        }
        return $res;
    }

    function hapusBarang($id)
    {
        $builder = $this->db->table('barang');
        $builder->where('id', $id);
        $cek =  $builder->delete();
        if ($cek) {
            $res = [
                'kode'      => 'success',
                'msg'       => 'Data Berhasil Dihapus'
            ];
        } else {
            $res = [
                'kode'      => 'error',
                'msg'       => 'Gagal Hapus Data'
            ];
        }
        return $res;
    }
}
