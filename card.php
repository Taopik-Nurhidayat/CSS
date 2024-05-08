<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar membuat Card</title>
    <style>
*,
*:after,
*:before{
    box-sizing: border-box;
}

body{
    font-family: "inter", sans-serif;
    background-color:rgb(163, 163, 117);
}

.card{
    display: flex;
    flex-direction: column;
    flex-basis: 300px;
    flex-shrink: 0;
    flex-grow: 0;
    max-width: 30%;
    background-color: #fff;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,1.5);
    border-radius: 10px;
    overflow: hidden;
    margin:35%;
   
}

.card-img{
    padding-bottom: 56.25%;
    position: relative;
    margin-bottom: 10px;

}
.card-img img{
    position: absolute;
    width: 100%;
}

.card-body{
    padding: 1.5rem;
}
.card-title{
    font-size: 16px;
    line-height: 1.33;
    font-weight: 700;
    font-family: cursive;
}
.card-intro{
    margin-top: 0.75rem;
    line-height: 1.5;
    font-family: cursive;
}
.container{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-img">
                <img src="img/zenix.jpg" alt="inova zenix">
            </div>
            <div class="card-body">
                <h2 class="card-title">Inova Zenix (2023)</h2>
                <p class="card-intro">
                    Varian terbaru yang hadir di tahun 2023 adalah Toyota Kijang Innova Zenix Hybrid.
Transpormasi besar-besaran yang membuat mobil ini naik kelas dan ramah lingkungan sesuai dengan trend terbaru. Mesinnya dibekali dengan TNGA TNGA 2.0L berkode M20A-FXS yang mampu memproduksi tenaga 152 Ps atau 149 tk pada 6.600 rpm dan torsi 19,1 kgm atau 197,3 Nm pada 4.500-4.900 rpm.
</p>
            </div>
        </div>
    </div>
</body>
</html>