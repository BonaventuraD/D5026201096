<html>

<head>
    <title>Tugas PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: linear-gradient(rgba(65, 65, 65, 0.63), rgba(65, 65, 65, 0.63)), url("https://images.hdqwalls.com/wallpapers/valorant-key-art-4k-ny.jpg");
        }

        .container {
            color: white;
        }

        h1 {
            color: red;
        }

        input {
            color: black;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Valorant Indonesia Gaming Store</h1>
        <h2>mau beli valorant point murah? cuma ada disini</h2>
        <br>
        <form action="tugasphpresult" method="get">
        <p>pricelist :</p>
        <div class="row">
            <div class="col-sm-10">
                125 VP = Rp 15.000
                
            </div>
            <div class="col-sm-2">x&nbsp;<input type="number" placeholder="0" id="quantity1" name="quantity1" min="0" max="5">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
               420 VP = Rp 49.000
                
            </div>
            <div class="col-sm-2">x&nbsp;<input type="number" placeholder="0" id="quantity2" name="quantity2" min="0" max="5">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
               700 VP = Rp 77.000
                
            </div>
            <div class="col-sm-2">x&nbsp;<input type="number" placeholder="0" id="quantity3" name="quantity3" min="0" max="5">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                1120 VP = Rp 126.000
                
            </div>
            <div class="col-sm-2">x&nbsp;<input type="number" placeholder="0" id="quantity4" name="quantity4" min="0" max="5">
            </div>
        </div>

        <br>
        <br>
        <div class="row">
            <div class="col-sm-10">
                Total
            </div>
            <div class="col-sm-2"><span id="total"></span> <button id="cek"
                    class="btn btn-default">check</button>
            </div>
        </div>


        <script>
            $(document).ready(function () {

                $("#cek").click(function () {
                    var q1 = $("#quantity1").val() * 15000;
                    var q2 = $("#quantity2").val() * 49000;
                    var q3 = $("#quantity3").val() * 77000;
                    var q4 = $("#quantity4").val() * 126000;

                    var total = q1 + q2 + q3 + q4;

                    $("#total").text("Rp " + total);
                    $("#total").show();
                }
                )
            }
            )
        </script>
        <h2>Your Riot id</h2>
        
            <div class="form-group">
                <label for="riotid">Riot ID:</label>
                <input type="text" class="form-control" id="riotid" placeholder="Enter Riot ID, example : loenovirzt"
                    name="riotid" required>
            </div>
            <div class="form-group">
                <label for="tag">tag:</label>
                <input type="text" class="form-control"  id="tag" placeholder="Enter tag, example : #7665" name="tag"
                    required>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="check" required> Apabila terjadi kesalahan penamaan, diluar
                    tanggung jawab
                    kami. Silahkan periksa kembali terlebih dahulu</label>
            </div>
            <div class="form-group">
                <label for="payment">Pilih pembayaran:</label>
                <select name="payment" class="form-control" id="payment" required>
                    <option value="OVO">OVO</option>
                    <option value="GOPAY">Gopay</option>
                </select>
            </div>
            <script>
                $(document).ready(function () {
                    $("#pembayaran1").hide();
                    $("#pembayaran2").hide();
                    $("#payment").click(function () {
                        var bayar = $("#payment").val();

                        switch (bayar) {
                            case "OVO":
                                $("#pembayaran2").hide();
                                $("#pembayaran label").text("Masukkan Nomor OVO Anda");
                                $("#pembayaran1").show();

                                break;
                            case "GOPAY":
                                $("#pembayaran1").hide();
                                $("#pembayaran label").text("Masukkan Nomor Gopay Anda");
                                $("#pembayaran2").show();

                        }

                    }
                    )
                }
                )
            </script>

            <div id="pembayaran1">
                <label for="nomorovo"></label>
                <input type="text" class="form-control" id="nomorovo" placeholder="Nomor OVO, example : 08123456789"
                    name="ovo">
            </div>
            <div id="pembayaran2">
                <label for="nomorgopay"></label>
                <input type="text" class="form-control" id="nomorgopay" placeholder="Nomor Gopay, example : 08123456789"
                    name="gopay">
            </div>
            <br>
            <button type="submit" class="btn btn-default" id="button">Submit</button>
          
        </form>
    </div>
   
        

</body>

</html>