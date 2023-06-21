<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LK21</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/film">All Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/genre">Film Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php foreach ($semuafilm as $film): ?>
                <tr>
                    <td>
                        <?php echo $i++; ?>
                    </td>
                    <td><img style="widht: 50px;" src="/assets/cover/<?= $film['cover'] ?>" alt=""></td>
                    <td>
                        <?php echo $film['nama_film'] ?>
                    </td>
                    <td>
                        <?php echo $film['nama_genre'] ?>
                    </td>
                    <td>
                        <?php echo $film['duration'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </table>
</body>

</html>