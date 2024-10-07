<?php

require __DIR__ . '/../data.php';

//Order how the teams should be sorted and printed by ranking.
$ranking_order = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 17, 26, 31, 38, 'Not ranked'];
?>

<div class="teams">
    <?php
    foreach ($ranking_order as $ranking):
        foreach ($teams as $team_name => $team_info):
            //Check if teams ranking match the correct order
            if ($team_info['uefa-coefficient-ranking'] == $ranking) { ?>
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
    <?php
            }
        endforeach;
    endforeach; ?>
</div>