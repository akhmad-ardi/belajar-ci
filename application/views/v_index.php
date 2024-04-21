<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <title>Codeigniter | Template</title>
</head>

<body>
  <div id="wrapper">
    <header>
      <hgroup>
        <h1>Codeigniter.com</h1>
        <h3>Membuat template sederhana pada Codeigniter</h3>
      </hgroup>
      <nav>
        <ul>
          <li>
            <a href="<?php echo base_url() ?>web">Home</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>web/about">About</a>
          </li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>


    <section>
      <h1>
        <?php echo $judul ?>
      </h1>

      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam totam, autem dolorem distinctio repellat
        corporis, aliquam voluptates, magnam nulla alias asperiores illo incidunt ex hic culpa? Totam impedit fuga
        inventore
        nostrum alias est sit id numquam? Eius ipsum voluptate ea perspiciatis consequuntur, reiciendis quo enim alias
        aperiam minima deleniti debitis!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed debitis velit aliquam labore dolores ratione qui
        sint
        aperiam officiis ipsam, nulla atque maiores voluptatem id consequuntur quos iure? Distinctio aliquam atque
        sequi,
        quia illo asperiores sit vitae totam, beatae neque nostrum doloribus perspiciatis. Eos temporibus alias
        assumenda
        exercitationem nulla dolorum, veritatis numquam eum rem quia corrupti, consequatur, magni facere rerum neque aut
        nostrum beatae illum. Saepe sit ipsam ullam.
      </p>
    </section>

    <footer>
      <a href="">Codeigniter</a>
    </footer>
  </div>
</body>

</html>