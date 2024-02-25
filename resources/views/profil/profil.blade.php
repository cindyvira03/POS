<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil Admin</title>
<style>
    .profil-box {
        width: 300px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin: 50px auto;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .profil-box h2 {
        text-align: center;
        color: #333;
    }
    .profil-info {
        margin-top: 20px;
    }
    .profil-info p {
        margin: 10px 0;
        color: #666;
    }
    .profil-info p strong {
        color: #333;
    }
</style>
</head>
<body>

<div class="profil-box">
    <h2>Profil Admin</h2>
    <div class="profil-info">
        <p><strong>ID: </strong>{{$id}}</p>
        <p><strong>Nama: </strong>{{$name}}</p>
    </div>
</div>

</body>
</html>
