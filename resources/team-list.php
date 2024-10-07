<?php

require __DIR__ . '/../data.php'; ?>

<div class="teams">
    <?php
    foreach ($teams as $team_name => $team_info): ?>
        <h2 class="team_name">
            <?= $team_name; ?>
        </h2>
        <h3 class="team_league">
            <?= "League: " . $team_info['league']; ?>
        </h3>
        <h3 class="team_ranking">
            <?= "Ranking: " . $team_info['uefa-coefficient-ranking']; ?>
        </h3>
        <h3 class="team_city">
            <?= "City: " . $team_info['city']; ?>
        </h3>
        <a href="<?= $team_info['url']; ?>"><?= "Official " . $team_name . " Website"; ?></a>
        <img src="<?= $team_info['logo']; ?>" alt="">
        <h3 class="team_group">
            <?= "Group: " . $team_info['group']; ?>
        </h3>

    <?php endforeach; ?>


</div>