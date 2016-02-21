<h2>Latest projects</h2>

<ul class="teaser cf">
    <?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
    <li>
        <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <figure>
            <a href="<?php echo $project->url() ?>">
                <img src="<?php echo thumb($image, array('width' => 480, 'height' => 270, 'crop' => true))->url() ?>" alt="<?php echo $project->title()->html() ?>" >
            </a>
        </figure>
        <?php endif ?>
        <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    </li>
    <?php endforeach ?>
</ul>
