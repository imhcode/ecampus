<?php
$sql = `SELECT tb_mahasiswa.mhs_nim, tb_mahasiswa.mhs_nama, tb_mahasiswa.mhs_angkatan, 
FROM ((tb_matakuliah
JOIN tb_mahasiswa_nilai ON tb_matakuliah.id = tb_mahasiswa_nilai.mk_id)
JOIN tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id)
WHERE tb_matakuliah.mk_kode = 'MK303'
ORDER BY tb_matakuliah.nilai DESC
LIMIT 1`