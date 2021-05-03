<?php
        require "dbutil.php";
        $db = DbUtil::loginConnection();

        $stmt = $db->stmt_init();

        if($stmt->prepare("SELECT * FROM game WHERE (home_team LIKE ?) OR (away_team LIKE ?)") or die(mysqli_error($db))) {
                $searchString = '%' . $_GET['inputSearchGame'] . '%';
                $stmt->bind_param('s', $searchString);
                $stmt->execute();

                $stmt->bind_result($number, $OT, $shootout, $home_team, $away_team, 
                $home_goals, $home_PIM, $home_corsi, $home_shots_on_net, $home_missed_shots, 
                $away_goals, $away_PIM, $away_corsi);
                
                echo "
                <table class=\"stats-table\"> <tr class=\"stats-table-row-headings\"> 
                <th>Number</th>
                <th>OT</th>
                <th>Shootout</th>
                <th>Home Team</th>
                <th>away team</th>
                <th>Home Goals</th>
                <th>home PIM</th>
                <th>home corsi</th>
                <th>home shots on net</th>
                <th>home missed shots</th>
                <th>away goals</th>
                <th>away PIM</th>
                <th>away corsi</th>
                <th>away shots on net</th>
                <th>away missed shots</th>
                </tr>";

                while($stmt->fetch()) {
                        echo "<tr><td>$number</td><td>$OT</td><td>$shootout</td><td>$home_team</td><td>$away_team 
                        </td><td>$home_goals</td><td>$home_PIM</td><td>$home_corsi</td><td>$home_shots_on_net</td><td>$home_missed_shots 
                        </td><td>$away_goals</td><td>$away_PIM</td><td>$away_corsi</td><td>$Age</td></tr>";
                }
                echo "</table>";

                $stmt->close();
        }

        $db->close();


?>