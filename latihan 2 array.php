<?php 

$nama = [
    [
        "Nama Lengkap" => "Dimas Putra Agustav",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Mangga Besar XII',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Coding Boy',
        'Cita-cita' => 'Front End'
    ],
    [
        "Nama Lengkap" => "Dwi Andika",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Roxy Mas',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Berenang',
        'Cita-cita' => 'Designer'
    ],
    [
        "Nama Lengkap" => "Agung Prakoso",  
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Jati Pulo',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Design',
        'Cita-cita' => 'Designer'
    ],
    [
        "Nama Lengkap" => "Irza Rafa",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Mangga Besar 1',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Main Game',
        'Cita-cita' => 'Gamer'
    ],
    [
        "Nama Lengkap" => "M Rizqi",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Mangga Besar XII',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Clothting',
        'Cita-cita' => 'Sukses'
    ],
    [
        "Nama Lengkap" => "Afrizal Dwi A",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. GG Kancil 2',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Main Laptop',
        'Cita-cita' => 'Arsitektur'
    ],
    [
        "Nama Lengkap" => "M Bima A",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Mangga Besar XII',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Coding Boy',
        'Cita-cita' => 'Front End'
    ],
    [
        "Nama Lengkap" => "M Messi Pratama",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Kober',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Gambar',
        'Cita-cita' => 'Design'
    ],
    [
        "Nama Lengkap" => "M Naufal A",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Mangga Besar XII',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Ridding',
        'Cita-cita' => 'MotoVlog'
    ],
    [
        "Nama Lengkap" => "Rio Puji N",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Pulo Gadung',
        'NISN' => '00573685',
        'Nomor WhatsApp' => '081935679330',
        'Hobi' => 'Belajar',
        'Cita-cita' => 'Sukses'
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Table</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>NISN</th>
            <th>Nomor WhatsApp</th>
            <th>Hobi</th>
            <th>Cita-cita</th>
        </tr>
        <?php foreach($nama as $data) : ?>
        <tr>
            <td><?= $data["Nama Lengkap"] ?></td>
            <td><?= $data['Kelas'] ?></td>
            <td><?= $data['Alamat'] ?></td>
            <td><?= $data['NISN'] ?></td>
            <td><?= $data['Nomor WhatsApp'] ?></td>
            <td><?= $data['Hobi'] ?></td>
            <td><?= $data['Cita-cita'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>