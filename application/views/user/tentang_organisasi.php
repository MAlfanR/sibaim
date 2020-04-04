<br>
<h1 class="text-center">Organisasi</h1>

<div class="card">
  <div class="card-body text-center">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3500">
      <div class="carousel-inner">
        <?php
        $i = 1; 
        foreach($foto as $row): 
        if($i == 1){?>
          <div class="carousel-item active">
            <img src="<?= base_url('assets/images/OrganisasiBaim/'.$row['foto']); ?>" class="d-block w-50 mx-auto" alt="...">
          </div>
        <?php }else{?>
          <div class="carousel-item">
          <img src="<?= base_url('assets/images/OrganisasiBaim/'.$row['foto']); ?>" class="d-block w-50 mx-auto" alt="...">
          </div>
        <?php }
        $i++;?>
        <?php endforeach; ?>
      </div>
    </div>
    <p class="text-white text-left mt-3"><?= $teks; ?></p>
  </div>
</div>