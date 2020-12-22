<section>
    <div class="container-fluid">
        
            <?php foreach ($viewVars['allcharacters'] as $item) : ?>
                    <div class="row">
					
						<div class="col-md-3 card border-0 text-left">
								<img src="<?= $absoluteURL ?>/images/characters/<?= $item->getPicture() ?>" alt="Character image" width = '100px'>
						</div>
						
						<div class="col-md-9 card border-0 text-left">
						<span class="display-4 font-weight-bold mb-4"> <?= $item->getName() ?></span>        
								<span class="display-5 "><?= $item->getDescription() ?> </span>
						</div>
					
                    </div>
            <?php endforeach; ?>
        
    </div>
</section>