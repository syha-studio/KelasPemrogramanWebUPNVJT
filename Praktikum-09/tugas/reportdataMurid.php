<?php
include('functions.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1','No');
$sheet->setCellValue('B1','Tanggal Pengisian Formulir');
$sheet->setCellValue('C1','Jenis Pendaftaran'); 
$sheet->setCellValue('D1','Tanggal Masuk Sekolah');
$sheet->setCellValue('E1','NIS');
$sheet->setCellValue('F1','Nomor Peserta Ujian');
$sheet->setCellValue('G1','Apakah Pernah PAUD');
$sheet->setCellValue('H1','Apakah Pernah TK'); 
$sheet->setCellValue('I1','No. Seri SKHUN Sebelumnya');
$sheet->setCellValue('J1','No. Seri Ijazah Sebelumnya');
$sheet->setCellValue('K1','Hobi');
$sheet->setCellValue('L1','Cita-cita');
$sheet->setCellValue('M1','Nama Lengkap'); 
$sheet->setCellValue('N1','Jenis Kelamin');
$sheet->setCellValue('O1','NISN');
$sheet->setCellValue('P1','NIK');
$sheet->setCellValue('Q1','Tempat Lahir');
$sheet->setCellValue('R1','Tanggal Lahir'); 
$sheet->setCellValue('S1','Agama');
$sheet->setCellValue('T1','Berkebutuhan Khusus');
$sheet->setCellValue('U1','Alamat Jalan');
$sheet->setCellValue('V1','RT');
$sheet->setCellValue('W1','RW'); 
$sheet->setCellValue('X1','Nama Dusun');
$sheet->setCellValue('Y1','Nama Kelurahan/Desa');
$sheet->setCellValue('Z1','Kecamatan');
$sheet->setCellValue('AA1','Kode Pos');
$sheet->setCellValue('AB1','Tempat Tinggal'); 
$sheet->setCellValue('AC1','Moda Transportasi');
$sheet->setCellValue('AD1','nomor HP');
$sheet->setCellValue('AE1','Nomor Telepon');
$sheet->setCellValue('AF1','E-mail Pribadi');
$sheet->setCellValue('AG1','Penerima KPS/PKH/KIP'); 
$sheet->setCellValue('AH1','No. KPS/KKS/PKH/KIP');
$sheet->setCellValue('AI1','Kewarganegaraan');
$sheet->setCellValue('AJ1','Nama Ayah Kandung');
$sheet->setCellValue('AK1','Tahun Lahir');
$sheet->setCellValue('AL1','Pendidikan'); 
$sheet->setCellValue('AM1','Pekerjaan');
$sheet->setCellValue('AN1','Penghasilan Bulanan');
$sheet->setCellValue('AO1','Berkebutuhan Khusus');
$sheet->setCellValue('AP1','Nama Ibu Kandung');
$sheet->setCellValue('AQ1','Tahun Lahir'); 
$sheet->setCellValue('AR1','Pendidikan');
$sheet->setCellValue('AS1','Pekerjaan');
$sheet->setCellValue('AT1','Alamat');
$sheet->setCellValue('AU1','Berkebutuhan Khusus');
$query = mysqli_query($conn,"select * from murid");
$i=2; $no = 1;
while($row = mysqli_fetch_array($query)){
    $sheet->setCellValue('A'.$i,$no++);
    $sheet->setCellValue('B'.$i,$row['tanggalPengisian']);
    $sheet->setCellValue('C'.$i,$row['jenisPendaftaran']);
    $sheet->setCellValue('D'.$i,$row['tanggalMasuk']);
    $sheet->setCellValue('E'.$i,$row['NIS']);
    $sheet->setCellValue('F'.$i,$row['noPesertaUjian']);
    $sheet->setCellValue('G'.$i,$row['paud']);
    $sheet->setCellValue('H'.$i,$row['tk']);
    $sheet->setCellValue('I'.$i,$row['noSKHUN']);
    $sheet->setCellValue('J'.$i,$row['noIjazah']);
    $sheet->setCellValue('K'.$i,$row['hobi']);
    $sheet->setCellValue('L'.$i,$row['citaCita']);
    $sheet->setCellValue('M'.$i,$row['namaLengkap']);
    $sheet->setCellValue('N'.$i,$row['jenisKelamin']);
    $sheet->setCellValue('O'.$i,$row['NISN']);
    $sheet->setCellValue('P'.$i,$row['NIK']);
    $sheet->setCellValue('Q'.$i,$row['tempatLahir']);
    $sheet->setCellValue('R'.$i,$row['tanggalLahir']);
    $sheet->setCellValue('S'.$i,$row['agama']);
    $sheet->setCellValue('T'.$i,$row['muridBerkebutuhan']);
    $sheet->setCellValue('U'.$i,$row['alamatJalan']);
    $sheet->setCellValue('V'.$i,$row['rt']);
    $sheet->setCellValue('W'.$i,$row['rw']);
    $sheet->setCellValue('X'.$i,$row['dusun']);
    $sheet->setCellValue('Y'.$i,$row['desa']);
    $sheet->setCellValue('Z'.$i,$row['kecamatan']);
    $sheet->setCellValue('AA'.$i,$row['kodePos']);
    $sheet->setCellValue('AB'.$i,$row['tempatTinggal']);
    $sheet->setCellValue('AC'.$i,$row['transportasi']);
    $sheet->setCellValue('AD'.$i,$row['hp']);
    $sheet->setCellValue('AE'.$i,$row['telp']);
    $sheet->setCellValue('AF'.$i,$row['email']);
    $sheet->setCellValue('AG'.$i,$row['bantuan']);
    $sheet->setCellValue('AH'.$i,$row['noBantuan']);
    $sheet->setCellValue('AI'.$i,$row['Kewarganegaraan']);
    $sheet->setCellValue('AJ'.$i,$row['namaAyah']);
    $sheet->setCellValue('AK'.$i,$row['lahirAyah']);
    $sheet->setCellValue('AL'.$i,$row['pendidikanAyah']);
    $sheet->setCellValue('AM'.$i,$row['pekerjaanAyah']);
    $sheet->setCellValue('AN'.$i,$row['penghasilanAyah']);
    $sheet->setCellValue('AO'.$i,$row['kebutuhanAyah']);
    $sheet->setCellValue('AP'.$i,$row['namaIbu']);
    $sheet->setCellValue('AQ'.$i,$row['lahirIbu']);
    $sheet->setCellValue('AR'.$i,$row['pendidikanIbu']);
    $sheet->setCellValue('AS'.$i,$row['pekerjaanIbu']);
    $sheet->setCellValue('AT'.$i,$row['penghasilanIbu']);
    $sheet->setCellValue('AU'.$i,$row['kebutuhanIbu']);
    $i++;}
$styleArray = [
    'borders' => [
        'allborder' => [
            'borderstyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:AU'.$i)->applyFromArray($styleArray);
$tanggal = date('D m y');
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa '.$tanggal.'.xlsx');
echo "
      <script>
        alert('Data Berhasil DiUnduh!');
        document.location.href = 'dataMurid.php'
      </script>
    ";
?>