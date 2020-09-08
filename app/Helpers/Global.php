<?php
/**
 * START :: FUNCTION TANGGAL INDONESIA
 */
    function date_indo($tgl){
        $ubah = gmdate($tgl, time()+60*60*8);
        $pecah = explode("-",$ubah);
        $tanggal = $pecah[2];
        $bulan = bulan($pecah[1]);
        $tahun = $pecah[0];
        return $tanggal.' '.$bulan.' '.$tahun;
    }
    function bulan($bln){
        switch ($bln)
        {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }
    function shortdate_indo($tgl){
        $ubah = gmdate($tgl, time()+60*60*8);
        $pecah = explode("-",$ubah);
        $tanggal = $pecah[2];
        $bulan = short_bulan($pecah[1]);
        $tahun = $pecah[0];
        return $tanggal.'/'.$bulan.'/'.$tahun;
    }
    function short_bulan($bln){
        switch ($bln)
        {
            case 1:
                return "01";
                break;
            case 2:
                return "02";
                break;
            case 3:
                return "03";
                break;
            case 4:
                return "04";
                break;
            case 5:
                return "05";
                break;
            case 6:
                return "06";
                break;
            case 7:
                return "07";
                break;
            case 8:
                return "08";
                break;
            case 9:
                return "09";
                break;
            case 10:
                return "10";
                break;
            case 11:
                return "11";
                break;
            case 12:
                return "12";
                break;
        }
    }
    function mediumdate_indo($tgl){
        $ubah = gmdate($tgl, time()+60*60*8);
        $pecah = explode("-",$ubah);
        $tanggal = $pecah[2];
        $bulan = medium_bulan($pecah[1]);
        $tahun = $pecah[0];
        return $tanggal.'-'.$bulan.'-'.$tahun;
    }
    function medium_bulan($bln){
        switch ($bln)
        {
            case 1:
                return "Jan";
                break;
            case 2:
                return "Feb";
                break;
            case 3:
                return "Mar";
                break;
            case 4:
                return "Apr";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Jun";
                break;
            case 7:
                return "Jul";
                break;
            case 8:
                return "Ags";
                break;
            case 9:
                return "Sep";
                break;
            case 10:
                return "Okt";
                break;
            case 11:
                return "Nov";
                break;
            case 12:
                return "Des";
                break;
        }
    }
    function longdate_indo($tanggal){
        $ubah = gmdate($tanggal, time()+60*60*8);
        $pecah = explode("-",$ubah);
        $tgl = $pecah[2];
        $bln = $pecah[1];
        $thn = $pecah[0];
        $bulan = bulan($pecah[1]);
  
        $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
        $nama_hari = "";
        if($nama=="Sunday") {$nama_hari="Minggu";}
        else if($nama=="Monday") {$nama_hari="Senin";}
        else if($nama=="Tuesday") {$nama_hari="Selasa";}
        else if($nama=="Wednesday") {$nama_hari="Rabu";}
        else if($nama=="Thursday") {$nama_hari="Kamis";}
        else if($nama=="Friday") {$nama_hari="Jumat";}
        else if($nama=="Saturday") {$nama_hari="Sabtu";}
        return $nama_hari.','.$tgl.' '.$bulan.' '.$thn;
    }
/**
 * END :: FUNCTION TANGGAL INDONESIA
 */

/**
     * [Callback Kelurahan Name]
     * @param  [int] $kel_id [id kelurahan]
     * @return [string]       [Nama Provinsi]
     */
    function kelurahan($kel_id){
        $kelurahan = DB::table('kelurahan')
                        ->where('id', $kel_id)
                        ->first();
        $nama = $kelurahan->name;

        return $nama;
    }

    /**
     * [Callback Kecamatan Name]
     * @param  [int] $kec_id [id kecamatan]
     * @return [string]       [Nama Kecamatan]
     */
    function kecamatan($kec_id){
        $kecamatan = DB::table('kecamatan')
                        ->where('id', $kec_id)
                        ->first();
        $nama = $kecamatan->name;

        return $nama;
    }

     /**
     * [Callback Kabupaten Name]
     * @param  [int] $kab_id [id kabupaten]
     * @return [string]      [Nama Kabupaten]
     */
    function kabupaten($kab_id){
        $kabupaten = DB::table('kabupaten')
                        ->where('id', $kab_id)
                        ->first();
        $nama = $kabupaten->name;
        return ucfirst($nama);
    }
    
    /**
     * [Callback Provinsi Name]
     * @param  [int] $prov_id [id provinsi]
     * @return [string]       [Nama Provinsi]
     */
    function provinsi($prov_id){
        $provinsi = DB::table('provinsi')
                        ->where('id', $prov_id)
                        ->first();
        $nama = $provinsi->name;

        return $nama;
    }