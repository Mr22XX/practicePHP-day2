

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan php day2</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-image: url('./bg.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
    }
    .box{
        border-radius: 8px;
        margin: 10px;
        height: auto;
        backdrop-filter: blur(30px);
        background: transparent;
        width: auto;
        display: flex;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 30px;
    }

    a{
        color: white;
    }
    h1{
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }
    div{
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 1.5rem;
    }

    .btn a{
        text-decoration: none;
    }
    .btn {
        text-decoration: none;
        color: black;
    }

    .btn{
        background-color: white;
        height: 5vh;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 10vh;
        border-radius: 8px;
        cursor: pointer;
    }


    .btn:hover{
        background-color: black;
        transition: 0.2s ease-in-out;
        color: white;
        text-decoration: none;
    }

</style>
<body>
    <h1>Pilih Data Buku</h1>
    <div class="box">
           <div>
               <ul>
                <li>
                    <?= $_GET["judul"];?> 
                </li>
                <li>
                    <?= $_GET["pengarang"];?> 
                </li>
                <li>
                    <?= $_GET["penerbit"];?> 
                </li>
                <li>
                    <?= $_GET["terbit"];?> 
                </li>
               </ul>
            </div>
    </div>
    <a href="index.php"><div class="btn">Back</div></a>
</body>
</html>