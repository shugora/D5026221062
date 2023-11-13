<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style1.css">
    <title>Javascript Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
            var bil1 = document.getElementById("bill1");
            var bil2 = document.getElementById("bill2");
            var nrp = document.getElementById("nrp");

            if (bil1.value == "") {
                alert("Bilangan 1 harus diisi");
                bil1.focus();
                return false;
            }
            if (bil2.value == "") {
                alert("Bilangan 2 harus diisi");
                bil2.focus();
                return false;
            }
            var nrpValue = nrp.value;

            if (isNaN(nrpValue)) {
                alert("NRP harus berupa angka");
                nrp.focus();
                return false;
            }

            if (nrpValue.length !== 10) {
                alert("NRP harus memiliki tepat 10 karakter");
                nrp.focus();
                return false;
            }

            

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <form action="http://www.detik.com" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="bill1">Bilangan 1 :</label>
                <input type="number" id="bill1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bill2">Bilangan 2 :</label>
                <input type="number" id="bill2" class="form-control">
            </div>
            <div class="form-group">
                <label for="nrp">NRP :</label>
                <input type="text" id="nrp" class="form-control">
            </div>
            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
