<?php
// Check if there's a success message and display it
if (isset($_SESSION['success_message'])) {
    echo '<div class="alert alert-success" role="alert">';
    echo $_SESSION['success_message'];
    echo '</div>';

    // Unset the success message so it doesn't display on refresh
    unset($_SESSION['success_message']);
}

$names = [];
foreach ($facultyList as $faculty) {
    $names[] = $faculty['last_name'] . ", " . $faculty["first_name"];
}

// dd($name);
?>
<form action="/schedule2" method="POST">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-header">
                    <div class="page-pretitle">Manage</div>
                    <h2 class="page-title">Schedule
                        <button type="submit" name="submit" class="btn btn-sm btn-outline-primary float-end">
                            <i class="fas fa-save"></i> Save
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Faculty</label>
                                        <select name="faculty" class="form-select">
                                            <?php foreach ($facultyList as $faculty): ?>
                                                <option value="<?= $faculty["id"]; ?>"><?= $faculty["last_name"]; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <!-- <input type="submit" name="submit"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Subject</label>
                                            <select name="subject" class="form-select">
                                                <?php foreach ($subjects as $subject): ?>
                                                    <option value="<?= $subject["id"]; ?>">
                                                        <?= $subject["course_code"] . " - " . $subject["title"]; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!-- <input type="submit" name="submit"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Class</label>
                                        <select name="class" id="class-select" class="form-select">
                                            <?php foreach ($class as $section): ?>
                                                <option value="<?= $section["id"]; ?>"><?= $section["class"]; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <!-- <input type="submit" name="submit"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Room</label>
                                            <select name="room" class="form-select">
                                                <?php foreach ($rooms as $room): ?>
                                                    <option value="<?= $room["id"]; ?>"><?= $room["name"]; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!-- <input type="submit" name="submit"> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Day</label>
                                        <select name="day" id="class-select" class="form-select">
                                            <option value="monday">Monday</option>
                                            <option value="monday">Tuesday</option>
                                            <option value="monday">Wednesday</option>
                                            <option value="monday">Thursday</option>
                                            <option value="monday">Friday</option>
                                        </select>
                                        <!-- <input type="submit" name="submit"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">To</label>
                                            <select name="to" id="toSelect" class="form-select"
                                                onchange="updateFromOptions()">
                                                <option value="7:30">7:30</option>
                                                <option value="8:00">8:00</option>
                                                <option value="8:30">8:30</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:30">9:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:30">1:30</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:30">2:30</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:30">3:30</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:30">4:30</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:30">5:30</option>
                                            </select>
                                            <!-- <input type="submit" name="submit"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">From</label>
                                            <select name="from" id="fromSelect" class="form-select">
                                                <option value="8:30">8:30</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:30">9:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:30">1:30</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:30">2:30</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:30">3:30</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:30">4:30</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:30">5:30</option>
                                            </select>
                                            <!-- <input type="submit" name="submit"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="content">
                            <div class="head">
                                <h5 class="mb-0" id="classLabel">Top Visitors by Country</h5>
                                <p class="text-muted">Current year website visitor data</p>
                            </div>
                            <div class="canvas-wrapper">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">7:30 - 8:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8:00 - 8:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8:30 - 9:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9:00 - 9:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9:30 - 10:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10:00 - 10:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10:30 - 11:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11:00 - 11:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11:30 - 12:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1:00 - 2:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2:30 - 3:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3:00 - 3:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3:30 - 4:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4:00 - 4:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4:30 - 5:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="content">
                            <div class="head">
                                <h5 id="header-title" class="mb-0">Top Visitors by Country</h5>
                                <p class="text-muted">Current year website visitor data</p>
                            </div>
                            <div class="canvas-wrapper">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">7:30 - 8:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8:00 - 8:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8:30 - 9:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9:00 - 9:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9:30 - 10:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10:00 - 10:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10:30 - 11:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11:00 - 11:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11:30 - 12:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1:00 - 2:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2:30 - 3:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3:00 - 3:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3:30 - 4:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4:00 - 4:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4:30 - 5:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="content">
                            <div class="head">
                                <h5 class="mb-0">Most Visited Pages</h5>
                                <p class="text-muted">Current year website visitor data</p>
                            </div>
                            <div class="canvas-wrapper">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">7:30 - 8:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8:00 - 8:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8:30 - 9:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9:00 - 9:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9:30 - 10:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10:00 - 10:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10:30 - 11:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11:00 - 11:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11:30 - 12:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1:00 - 2:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2:30 - 3:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3:00 - 3:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3:30 - 4:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4:00 - 4:30</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4:30 - 5:00</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


</form>
</div>
</div>
</div>


<script>

</script>