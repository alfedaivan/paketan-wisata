<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Package_model extends CI_Model {

        public function tampil() {
            $this->db->select('*');
            $this->db->from('package a');
            $this->db->join('alternatif b', 'a.id_alternatif=b.id_alternatif');
            $this->db->join('hasil c', 'b.id_alternatif=c.id_alternatif');
            $this->db->order_by('c.nilai', 'DESC');

            return $this->db->get();
        }

        public function simpan($data) {
            return $this->db->insert('package', $data);
        }

        public function detail($id_package) {
            $this->db->select('*');
            $this->db->from('package a');
            $this->db->join('alternatif b', 'a.id_alternatif=b.id_alternatif');
            $this->db->join('hasil c', 'b.id_alternatif=c.id_alternatif');
            $this->db->where('a.id_package', $id_package);

            return $this->db->get();
        }

        public function sub_detail($id_alternatif) {
            $this->db->select('*');
            $this->db->from('alternatif a');
            $this->db->join('penilaian b', 'a.id_alternatif=b.id_alternatif');
            $this->db->join('kriteria c', 'b.id_kriteria=c.id_kriteria');
            $this->db->join('sub_kriteria d', 'b.nilai=d.id_sub_kriteria');
            $this->db->where('a.id_alternatif', $id_alternatif);

            return $this->db->get();
        }

        public function cek_exist($id_alternatif) {
            $this->db->select('*');
            $this->db->from('package a');
            $this->db->join('alternatif b', 'a.id_alternatif=b.id_alternatif');
            $this->db->where('a.id_alternatif', $id_alternatif);

			return $this->db->get();
        }

        public function simpan_deskripsi($id_package, $data) {
            $this->db->where('id_package', $id_package);
            $this->db->update('package', $data);
        }

        public function delete($id_package)
        {
            $this->db->where('id_package', $id_package);
            $this->db->delete('package');
        }

        public function delete_alternatif($id_alternatif) {
            $this->db->where('id_alternatif', $id_alternatif);
            $this->db->delete('package');
        }
    } 
?>