#20251111
Install xampp 3.3.
PHP 8.2
Download https://getcomposer.org/Composer-Setup.exe install di komputer
Didalam xampp/htdocs/
xxxxx = bts, jaringan, sisdomain, blankspot
Gunakan command prompt buka folder xampp/htdocs
composer create-project --prefer-dist laravel/laravel xxxxx

buat databases untuk masing2 aplikasi yang dibangun
nama databases nya server_xxxxx
buat tabel: 
tab_admin
id int(11) auto increment Primary Key
nama varchar(50) Null
email varchar(50) Null 
no_hp varchar(30) Null 
aktivasi enum('1', '0') '0'
created_id int(11) Null
created_at datetime Null
updated_id int(11) Null
updated_at datetime Null
tambahkan baris data untuk tab_admin identitas kalian gunakan perintah insert

ref_kabupaten
id int(11) auto increment Primary Key
kd_kab varchar(30) Null
kabupaten varchar(50) Null 
created_id int(11) Null
created_at datetime Null
updated_id int(11) Null
updated_at datetime Null
tambahkan baris data untuk ref_kabupaten kd_kab=6208, kabupaten=SUKAMARA

ref_kecamatan
id int(11) auto increment Primary Key
kd_kec varchar(30) Null
kecamatan varchar(50) Null 
created_id int(11) Null
created_at datetime Null
updated_id int(11) Null
updated_at datetime Null
tambahkan baris data untuk ref_kecamatan : 
kd_kec=620801, kecamatan=SUKAMARA
kd_kec=620802, kecamatan=JELAI
kd_kec=620803, kecamatan=BALAI RIAM
kd_kec=620804, kecamatan=PANTAI LUNCI
kd_kec=620805, kecamatan=PERMATA KECUBUNG

ref_desa
id int(11) auto increment Primary Key
kd_desa varchar(30) Null
desa varchar(50) Null 
created_id int(11) Null
created_at datetime Null
updated_id int(11) Null
updated_at datetime Null
tambahkan baris data untuk ref_desa : 
kd_desa='6208011003', desa='KELURAHAN MENDAWAI'
kd_desa='6208011004', desa='KELURAHAN PADANG'
kd_desa='6208012001', desa='DESA NATAI SEDAWAK'
kd_desa='6208012002', desa='DESA PUDU'
kd_desa='6208012005', desa='DESA KARTAMULIA'
kd_desa='6208012006', desa='DESA SUKARAJA'
kd_desa='6208012007', desa='DESA PANGKALAN MUNTAI'
kd_desa='6208012008', desa='DESA PETARIKAN'
kd_desa='6208021001', desa='KELURAHAN KUALA JELAI'
kd_desa='6208022002', desa='DESA PULAU NIBUNG'
kd_desa='6208022003', desa='DESA SUNGAI BARU'
kd_desa='6208022004', desa='DESA SUNGAI BUNDUNG'
kd_desa='6208022005', desa='DESA SUNGAI RAJA'
kd_desa='6208032001', desa='DESA JIHING'
kd_desa='6208032002', desa='DESA AIR DUA'
kd_desa='6208032005', desa='DESA LUPU PERUCA'
kd_desa='6208032006', desa='DESA BALAI RIAM'
kd_desa='6208032007', desa='DESA PEMPANING'
kd_desa='6208032011', desa='DESA SEKUNINGAN BARU'
kd_desa='6208032012', desa='DESA BANGUN JAYA'
kd_desa='6208032013', desa='DESA BUKIT SUNGKAI'
kd_desa='6208042001', desa='DESA SUNGAI DAMAR'
kd_desa='6208042002', desa='DESA SUNGAI TABUK'
kd_desa='6208042003', desa='DESA SUNGAI CABANG BARAT'
kd_desa='6208042004', desa='DESA SUNGAI PASIR'
kd_desa='6208052001', desa='DESA KENAWAN'
kd_desa='6208052002', desa='DESA LAMAN BARU'
kd_desa='6208052003', desa='DESA AJANG'
kd_desa='6208052004', desa='DESA SEMANTUN'
kd_desa='6208052005', desa='DESA NIBUNG TERJUN'
kd_desa='6208052006', desa='DESA NATAI KONDANG'
kd_desa='6208052007', desa='DESA SEMBIKUAN'
