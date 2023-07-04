<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Portfolio</title>

  <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/portfolio.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="antialiased">
  <div class="container">
    @include('includes.navbar')

    <div class="row d-flex justify-content-center  mt-5">

      <div class="col-md-9 mt-5 mb-5">

        <div class="card p-3 py-4">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Pendidikan</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Skills</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Pengalaman</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Sertifikat dan Pelatihan</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title mt-4">Pendidikan</h5>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/1200px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">SD Negeri 140 Palembang</a>
                          </h6>
                          <table>
                            <tr>
                              <td class="align-top alamat">
                                Alamat :
                              </td>
                              <td>
                                Komplek TNI - AU, Jl. Adi Sucipto, Talang Betutu, Kec. Sukarami, Kota Palembang, Sumatera Selatan 30961
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/1200px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">SMP Negeri 11 Palembang</a>
                          </h6>
                          <table>
                            <tr>
                              <td class="align-top alamat">
                                Alamat :
                              </td>
                              <td>
                                Jl. Makam, RT.10/RW.02, Sukodadi, Kec. Sukarami, Kota Palembang, Sumatera Selatan 30154
                              </td>
                            </tr>
                          </table>
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://yt3.googleusercontent.com/ytc/AL5GRJWodrbEVLjgenr20DCyTK_wCNDDXqKuRMhMyLXK=s900-c-k-c0x00ffffff-no-rj" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">SMK Negeri 2 Palembang</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Jurusan Teknik Komputer Jaringan
                          </span>
                          <table>
                            <tr>
                              <td class="align-top alamat">
                                Alamat :
                              </td>
                              <td>
                                Jl. Demang Lebar Daun, 20 Ilir D. III, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30151
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://www.seekpng.com/png/detail/380-3807393_unsri-vector-logo-logo-universitas-sriwijaya.png" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Universitas Sriwijaya</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Jurusan Sistem Informasi
                          </span>
                          <table>
                            <tr>
                              <td class="align-top alamat">
                                Alamat :
                              </td>
                              <td>
                                Jl. Bukit Lama, Ilir Barat I, Palembang City, South Sumatra 30128
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit" id="profile-edit">
                <h5 class="card-title mt-4">Skill yang dimiliki</h5>
                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://w7.pngwing.com/pngs/5/917/png-transparent-web-development-computer-icons-computer-programming-programmer-html-firm-miscellaneous-angle-text.png" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Programming Website</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Merancang hingga mengembangkan suatu website menggunakan framework Laravel.
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://logowik.com/content/uploads/images/azure-sql-database6354.jpg" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Database Knowledge</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Memiliki pengetahuan dalam merancang dan membangun database dengan lebih baik
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://png.pngtree.com/templates/20180906/network-logo-template-png_31170.jpg" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Network Administration</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Memiliki pengetahuan dalam merancang dan membangun jaringan komputer yang lebih efisien dan baik
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Microsoft_Office_logo_%282019%E2%80%93present%29.svg/1024px-Microsoft_Office_logo_%282019%E2%80%93present%29.svg.png" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Microsoft Office</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Memiliki pengetahuan dalam penggunaan microsoft dan pengalaman di bidang administrasi
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade pt-3" id="profile-settings">
                <h5 class="card-title mt-4">Pengalaman Kerja</h5>
                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://1.bp.blogspot.com/-fiKUVHwC9Og/Xeblvios6-I/AAAAAAAAB3o/8Y7yx2kw7-gIVYwj07mfj16TMgeXgPQUgCEwYBhgL/s1600/logo-airnav-indonesia.png" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">AirNav Indonesia (Jan 2020-Mar 2020)</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Divisi Administrasi Personalia dan Keuangan
                          </span>
                          <li>Merekapitulasi dokumen-dokumen arsip AirNav
                          </li>
                          <li>Mengfilling Informasi pegawai kedalam sistem pengarsipan</li>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <h5 class="card-title mt-5">Pengalaman Organisasi</h5>
                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://media.licdn.com/dms/image/C560BAQHFTV4FrVQGiw/company-logo_200_200/0/1564377096169?e=2147483647&v=beta&t=ylgbDOV9D9tXNvsPNn-Qtds1ieMLX-MNevD5U7fSQn8" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Himpunan Mahasiswa Sistem Informasi (HIMSI)</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Kepala Dinas Kesektariatan (Jan 2023 - Sekarang)</br>
                            Staff Dinas KEsektariatan (Jan 2022 - Des 2022)
                          </span>
                          <li>Memimpin dan mengkoordinir Dinas Kesektariatan HIMSI</li>
                          <li>Mengurus administrasi dalam pelaksanaan kegiatan program kerja HIMSI</li>
                          <li>Berkolaborasi dengan dinas lain untuk mendukung pekerjaan administrasi di tiap dinas</li>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <h5 class="card-title mt-4">Sertifikat</h5>
                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi2kIM9IlEYCk6CF_wteGjT8W2ToLsmY3ygWnt7J5jXm7V_oLK_c2jfG_67Jn0QPmg4R6Na0No7gWY4Kc6noZX7J3PLAMv7PPaGvX2yYTxcYmqEyoE6fmhz46xN67Wa94RLtO2aoPbqC6Ml7RT06pJSWG5reMol57EQvr529LD2Ov3SHCyQ20J6IbdA=w400-h300" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Junior Web Developer</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Badan Nasional Sertifikasi Profesi (BNSP)
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi2kIM9IlEYCk6CF_wteGjT8W2ToLsmY3ygWnt7J5jXm7V_oLK_c2jfG_67Jn0QPmg4R6Na0No7gWY4Kc6noZX7J3PLAMv7PPaGvX2yYTxcYmqEyoE6fmhz46xN67Wa94RLtO2aoPbqC6Ml7RT06pJSWG5reMol57EQvr529LD2Ov3SHCyQ20J6IbdA=w400-h300" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Junior Network Administrator</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Badan Nasional Sertifikasi Profesi (BNSP)
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi2kIM9IlEYCk6CF_wteGjT8W2ToLsmY3ygWnt7J5jXm7V_oLK_c2jfG_67Jn0QPmg4R6Na0No7gWY4Kc6noZX7J3PLAMv7PPaGvX2yYTxcYmqEyoE6fmhz46xN67Wa94RLtO2aoPbqC6Ml7RT06pJSWG5reMol57EQvr529LD2Ov3SHCyQ20J6IbdA=w400-h300" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Junior Mobile Programmer</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Badan Nasional Sertifikasi Profesi (BNSP)
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <h5 class="card-title mt-5">Pelatihan</h5>
                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://images.bisnis.com/posts/2020/03/18/1214933/dts_0.png" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Junior Web Developer</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Vocational School Graduate Academy (VSGA) - Digital Talent Scholarship 2022
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://images.bisnis.com/posts/2020/03/18/1214933/dts_0.png" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Junior Network Administration</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Vocational School Graduate Academy (VSGA) - Digital Talent Scholarship 2022
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="card mb-3 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.html">
                          <img src="https://images.bisnis.com/posts/2020/03/18/1214933/dts_0.png" alt="" class="width-90 rounded-3 foto-sekolah" alt="">
                        </a>
                      </div>
                      <div class="col-auto">
                        <img src="" alt="">
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#" class="text-reset namapendidikan">Junior Mobile Programmer</a>
                          </h6>
                          <span class="text-muted d-block small mb-1">
                            Vocational School Graduate Academy (VSGA) - Digital Talent Scholarship 2023
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div><!-- End Bordered Tabs -->

            <div class="buttons mt-3">
              <a href="/">
                <button class="btn btn-outline-primary px-4"><i class="fa fa-sign-out"></i>Back</button>
              </a>


            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>