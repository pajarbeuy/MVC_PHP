$(function () {
  $(".tambahData").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    // Reset form dan id
    $("#formTambah")[0].reset();
    $("#id").val("");
    // Set action ke tambah
    $(".modal-body form").attr(
      "action",
      "http://localhost/belajarphp/MVC/public/Mahasiswa/tambah"
    );
  });

  $(".modalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    // Set action ke ubah
    $(".modal-body form").attr(
      "action",
      "http://localhost/belajarphp/MVC/public/Mahasiswa/ubah"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/belajarphp/MVC/public/Mahasiswa/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
