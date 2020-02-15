<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                            <?php
                            echo $total_users;
                            ?>
                        </h1>
                        <p>Users</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="fa fa-tags"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2">
                            <?= $today_users ?>
                        </h1>
                        <p>Today Users</p>
                    </div>
                </section>
            </div>
            <!-- This is script is for count page visitor  -->
            <?php

            $counter_name = "counter.txt";

            // Check if a text file exists. If not create one and initialize it to zero.
            if (!file_exists($counter_name)) {
                $f = fopen($counter_name, "w");
                fwrite($f, "0");
                fclose($f);
            }

            // Read the current value of our counter file
            $f = fopen($counter_name, "r");
            $counterVal = fread($f, filesize($counter_name));
            fclose($f);

            // If not, increase counter value by one
            if (!isset($_SESSION['hasVisited'])) {
                $_SESSION['hasVisited'] = "yes";
                $counterVal++;
                $f = fopen($counter_name, "w");
                fwrite($f, $counterVal);
                fclose($f);
            }
            ?>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-area-chart"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3">
                            <?= $counterVal ?>
                        </h1>
                        <p>Visitors</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol blue">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            <?= $weekly ?>
                        </h1>
                        <p>This Week Users</p>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Advanced Table
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> First Name</th>
                                <th><i class="fa fa-bookmark"></i> Last Name</th>
                                <th><i class="fa fa-user"></i> User Name</th>
                                <th><i class=" fa fa-envelope"></i> Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_users as $user) : ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>
</section>
<!--main content end-->