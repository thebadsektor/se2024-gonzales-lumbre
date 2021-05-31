<div class="wrapper">
    <div class="container p-5" id="content">
        <div class="row">
            <div class="col">
                <h3 class="display-4 mb-0 text-secondary ">Tracking</h3>
            </div>
        </div>
        <div class="row">
            <div class="col mt-3 mx-3">
                <p>All tracking and delivery list</p>
            </div>
        </div>
        <div class="row mx-3 border-start border-2">
            <div class="col ">
                <?php
                if (isset($tracking) && is_array($tracking) && !empty($tracking) && isset($track) && is_array($track) && !empty($track)) {
                    foreach ($tracking as $row) {
                        if ($track[0]['td_rsd_id'] == $row['rsd_id']) {
                            echo '<div class="py-2 bg-white rounded-lg mb-2 border-start border-primary border-5 shadow position-relative">';
                        } else {
                            echo '<div class="border py-2 bg-white rounded-lg mb-2 position-relative">';
                        }
                        echo '<a href="' . base_url() . 'track/' . encrypt_it($row['rsd_id']) . '" class="text-capitalize">';
                        echo '<h4 class="px-3 fw-light text-capitalize text-primary">' . $row['rsd_device_brand'] . ' ' . $row['rsd_device_model'] . '</h4>';
                        echo '<div class="px-3  text-muted">Service ID: DCRS-' . encrypt_it($row['rsd_id']) . '</div>';
                        echo '</a>';
                        echo '<span class="position-absolute top-50 end-0 translate-middle me-1"><i class="fas fa-chevron-right fa-fw fa-lg text-muted"></i></span>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No tracking data available.</p>';
                }
                ?>
            </div>
            <div class="col">
                <div class="box">
                    <ul id="first-list">
                        <?php if (isset($track) && is_array($track) && !empty($track)) {
                            foreach ($track as $row) {
                                echo '<li class="shadow-sm border">';

                                switch ($row['td_status']) {
                                    case 'Paid':
                                        $comment = 'Awaiting for repair';
                                        break;
                                    case 'Repairing':
                                        $comment = 'Repairing your device';
                                        break;
                                    case 'Completed':
                                        $comment = 'Repair is succesful';
                                        break;
                                    case 'Delivering':
                                        $comment = 'Runner picking up your device';
                                        break;
                                    default:
                                        $comment = 'Device has been delivered';
                                        break;
                                }

                                echo '<span></span>';
                                echo '<div class="text-capitalize text-primary">' . $row['td_status'] . '</div>';
                                echo '<div><p>' . $comment . '</p></div>';

                                if ($row['td_rd_id'] == null) {
                                    echo '<small class="text-capitalize pt-3 text-end">' . $row['sd_full_name'] . '</small>';
                                } else {
                                    $runner = $controller->get_runner_info($row['td_rd_id']);
                                    echo '<small class="text-capitalize pt-3 text-end">' . $runner[0]['rd_full_name'] . '</small>';
                                }

                                echo '<div class="time">';
                                $date_explode = explode(' ', $row['td_log']);

                                echo '<span class="text-capitalize">' . date("F j", strtotime($date_explode[1])) . '</span>';
                                echo '<span>' . date("H:m a", strtotime($date_explode[0])) . '</span>';
                                echo '</div>';
                                echo '</li>';
                            }
                        } else {
                            echo '<li>';
                            echo '<div class=" text-primary"><p>No tracking information available.</p></div>';
                            echo '</li>';
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>