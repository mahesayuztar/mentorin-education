@extends('user.layouts.sidebar')

@section('content')

<style>
    .disabled-link {
        text-decoration: none;
        color: #001e26;
        pointer-events: none;
    }

    .unstyled-button {
        background: none;
        border: none;
        padding: 0;
        font: inherit;
        color: inherit;
        cursor: pointer;
    }
</style>

<h1 class="card-title">Pilih Materi Belajar yang Akan Kamu Download!</h1>
<div class="discussion-content">
    <div class="discussion-info">
        <table class="discussion-table">
            <tbody>
                <!--=======================================================================================================================================================================-->
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">INFO PENERIMAAN</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Buku Petunjuk Daftar DIKDIN 2024 V.1
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'BUKU PETUNJUK DAFTAR DIKDIN 2024 V.1.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Info Penerimaan Taruna Baru KEMENHAM TH 2024,2025
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'PENERIMAAN TARUNA BARU KEMENHAM TH 2024,2025.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Info Penerimaan Taruna Baru KEMENHUB TH 2024,2025
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'PENERIMAAN TARUNA BARU KEMENHUB TH 2024,2025.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Info Penerimaan Taruna Baru STIS TH 2024,2025
                        </a>
                    </td>
                    <td class="discussion-btn">
                       <a href="{{ route('download', ['filename' => 'PENERIMAAN TARUNA BARU STIS TH 2024,2025.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Info Penerimaan Taruna Baru STMKG TH 2024,2025
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'PENERIMAAN TARUNA BARU STMKG TH 2024,2025.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Info Penerimaan Taruna Baru STIN TH 2024,2025
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a class="download-link" href="{{ route('download', ['filename' => 'BROSUR STIN.pdf']) }}" style="display: none;">Download</a>
                        <a class="download-link" href="{{ route('download', ['filename' => 'INFO REKRUTMEN STIN TAHUN 2024.pdf']) }}" style="display: none;">Download</a>
                        <a class="download-link" href="{{ route('download', ['filename' => 'DAFTARKAN DIRI ANDA (STIN).pdf']) }}" style="display: none;">Download</a>
                        <button class="unstyled-button" onclick="promptDownload()">Download</button>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Jadwal Penerimaan Sekolah Kedinasan 2024
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'JADWAL PENERIMAAN SEKOLAH KEDINASAN 2024.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>

                <!--=======================================================================================================================================================================-->
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">PENGISIAN BLANGKO</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Contoh Pengisian Blangko Dinas
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'CONTOH PENGISIAN BLANGKO DINAS.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Contoh Pengisian Blangko Rikmin TNI
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'CONTOH PENGISIAN BLANKO RIKMIN TNI.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>

                <!--=======================================================================================================================================================================-->
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">PENGISIAN BERKAS BINTARA 2024</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Contoh Pengisian Berkas Bintara 2024
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'CONTOH PENGISIAN BERKAS BINTARA 2024.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>

                <!--=======================================================================================================================================================================-->
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">BERKAS DOKUMEN SEKOLAH KEDINASAN 2024</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Surat Pernyataan Ikatan Dinas
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'SURAT PERNYATAAN IKATAN DINAS.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Form Surat Keterangan OAP 2024
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'FORM SURAT KETERANGAN OAP 2024.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Pakta Integritas Peserta SPCP 2024
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'PAKTA INTEGRITAS PESERTA SPCP 2024.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>

                <!--=======================================================================================================================================================================-->
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">MATERI UU KEPOLISIAN</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Materi UU Kepolisian 1
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'MATERI UU KEPOLISIAN.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>

                <!--=======================================================================================================================================================================-->
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">MATERI TPU KEPOLISIAN</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Materi TPU Kepolisian 1
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'MATERI TPU KEPOLISIAN.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>

                <!--=======================================================================================================================================================================-->
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">MATERI TWK KEPOLISIAN</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Materi TWK Kepolisian 1
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'MATERI TWK KEPOLISIAN 1.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Materi TWK Kepolisian 2
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'MATERI TWK KEPOLISIAN 2.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#" class="disabled-link">
                            Materi TWK Kepolisian 3
                        </a>
                    </td>
                    <td class="discussion-btn">
                        <a href="{{ route('download', ['filename' => 'MATERI TWK KEPOLISIAN 3.pdf']) }}" style="text-decoration: none; color: #fff;">Download</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function downloadFiles() {
        const downloadLinks = document.querySelectorAll('.download-link');
        let successCount = 0;

        downloadLinks.forEach(link => {
            const url = link.href;
            const a = document.createElement('a');
            a.href = url;
            a.download = '';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            successCount++;
        });

        Swal.fire(
            'Unduh Selesai!',
            `${successCount} file berhasil di unduh.`,
            'success'
        );
    }

    function promptDownload() {
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Anda akan mengunduh beberapa file. Apakah Anda ingin melanjutkan?",
            icon: 'question',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            showCancelButton: true,
            confirmButtonText: 'Ya, Lanjutkan!',
            reverseButtons: true // Mengatur reverseButtons menjadi true
        }).then((result) => {
            if (result.isConfirmed) {
                downloadFiles();
            }
        });
    }
</script>
@endsection
