<?php

require __DIR__ . '/../data.php';

//Order how the teams should be sorted and printed by ranking.
$ranking_order = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 17, 26, 31, 38, 'Not ranked'];
?>

<div class="teams-container">
    <?php
    foreach ($ranking_order as $ranking):
        foreach ($teams as $team_name => $team_info):
            //Check if teams ranking match the correct order
            if ($team_info['uefa-coefficient-ranking'] == $ranking) { ?>
                <div class="team-card">
                    <h2 class="team_name">
                        <?= $team_name; ?>
                    </h2>
                    <img src="<?= $team_info['logo']; ?>" alt="">

                    <div class="team-info">
                        <p class="team_league"><?= "League: " . $team_info['league']; ?></p>
                        <p class="team_ranking"><?= "Ranking: " . $team_info['uefa-coefficient-ranking']; ?></p>
                        <p class="team_city"><?= "City: " . $team_info['city']; ?></p>
                        <p class="team_group"><?= "Group: " . $team_info['group']; ?></p>
                        <a href="<?= $team_info['url']; ?>"><?= "Official " . $team_name . " Website"; ?></a>
                    </div>
                </div>
    <?php
            }
        endforeach;
    endforeach; ?>
</div>