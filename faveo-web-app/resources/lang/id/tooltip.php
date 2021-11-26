<?php

return [
//Admin Panel tooltips

/*----------STAFF>AGENTS----------------*/
	'agent-status'                          => 'Status akun agent akan aktif/non-aktifkan agen untuk masuk ke sistem.',
	'agent-role'                            => 'Silakan pilih aturan yang akan diberikan ke agen ini. Admin dapat melakukan semua konfigurasi pengaturan lewat Panel Admin. Agen hanya dapat membuat, membalas, memperbaharui dan menanggapi tiket sesuai departementnya.',
	'agent-department'                      => 'Pilih departemen untuk penempatan agen ini.',
	'agent-team'                            => 'Pilih tim untuk penempatan agen ini.',
	'agent-Access Permissions'              => 'Pilih hak akses untuk agen ini.',
	'agent-password'                        => 'Pilih opsi ini jika anda ingin mengirim password agen lewat email.',

/*----------STAFF>Department---------------*/
	'department-type'                       => 'Pilih Departemen sebagai privat jika anda tidak ingin ditampilkan pada portal pengguna.',
	'department-manager'                    => 'Pilih manager pada Departemen ini.',
	'department-outgoin-mail'               => 'Alamat email ini digunakan untuk mengirim respon dari pengguna kepada agen ketika agen membalas tiket.',
	'default-department'                    => 'Tetapkan Salah satu Departemen jika hanya ada departemen standar.',

/*-----------STAFF>TEAMS-----------------*/
	'team-status'                           => 'Aktifkan status tim ini sehingga akan tersedia untuk penentapan tiket dan untuk menerima peringatan dan catatan.',
	'team-lead'                             => 'Pilih katim untuk tim ini yang nantinya akan menerima peringatan dan catatan yang terpisah dari anggota tim.',
	'team-admin-notes'                      => 'Berikan catatan untuk informasi perihal tim yang dapat anda bagikan dengan admin',

/*----------STAFF>PERMISSION-------------*/
	'permission-status'                     => 'Aktifkan status dari hak akses ini sehingga dapat tersedia untuk penugasan pada seorang agen.',

/*-----------Ticket Custom form----------*/
	'link_department_and_helptopic_tooltip' => 'Linking helptopic and department allows clients to choose department based on selected helptopic, and vice versa. Please note whichever field is kept on top in form will be used to render options in the other field. Tautan topik bantuan dan departemen dapat memperbolehkan pengguna untuk memilih departemen sesuai dengan pilihan topik bantuan, dan sebaliknya. 
Harap perhatikan kolom apa saja yang disimpan pada bagian atas dalam formulir yang akan digunakan untuk memberikan opsi pada kolom lain',
];
