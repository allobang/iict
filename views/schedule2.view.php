<?php
// dd($facultyList);
$names = [];
foreach ($facultyList as $faculty) {
    $names[] = $faculty['last_name'] . ", " . $faculty["first_name"];
}

// dd($name);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-header">
                <div class="page-pretitle">Manage</div>
                <h2 class="page-title">Schedule</h2>
            </div>
        </div>
        <form action="/schedule2" method="POST">
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
                                                <option value="2:00">2:00</option>
                                                <option value="3:00">3:00</option>
                                                <option value="4:00">4:00</option>
                                                <option value="5:00">5:00</option>
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
                                                <option value="2:00">2:00</option>
                                                <option value="3:00">3:00</option>
                                                <option value="4:00">4:00</option>
                                                <option value="5:00">5:00</option>
                                            </select>
                                            <!-- <input type="submit" name="submit"> -->
                                        </div>
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
                                    <div class="detail">
                                        <p class="detail-subtitle">To</p>
                                        <span class="number"></span>
                                    </div>
                                    <select name="to" id="toSelect" class="form-select" onchange="updateFromOptions()">
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
                                        <option value="2:00">2:00</option>
                                        <option value="3:00">3:00</option>
                                        <option value="4:00">4:00</option>
                                        <option value="5:00">5:00</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="detail">
                                        <p class="detail-subtitle">From</p>
                                        <span class="number"></span>
                                    </div>

                                    <select name="from" id="fromSelect" class="form-select">
                                        <option value="8:30">8:30</option>
                                        <option value="9:00">9:00</option>
                                        <option value="9:30">9:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="1:00">1:00</option>
                                        <option value="2:00">2:00</option>
                                        <option value="3:00">3:00</option>
                                        <option value="4:00">4:00</option>
                                        <option value="5:00">5:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Subject</label>
                                            <select name="faculty" class="form-select">
                                                <?php foreach ($subjects as $subject): ?>
                                                    <option value="<?= $subject["id"]; ?>"><?= $subject["title"]; ?>
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
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="orange fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail">
                                        <p class="detail-subtitle">Support Request</p>
                                        <span class="number">75</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="fas fa-envelope-open-text"></i> For this week
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8 mt-8">
                <div class="box box-primary">
                    <div class="box-body">
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
                                    <th scope="row">1:00 - 2:00</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2:00 - 3:00</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3:00 - 4:00</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">4:00 - 5:00</th>
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
</div>


<script>
    function updateFromOptions() {
        const toSelect = document.getElementById('toSelect');
        const fromSelect = document.getElementById('fromSelect');
        const toTime = toSelect.value;

        // Array of all possible times in the same order as the options
        const timeOptions = ["7:30", "8:00", "8:30", "9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "1:00", "2:00", "3:00", "4:00", "5:00"];

        // Find the index of the selected "to" time
        const toIndex = timeOptions.indexOf(toTime);

        // Clear current options in "from"
        fromSelect.innerHTML = '';

        // Add options that are at least 1 hour ahead
        for (let i = toIndex + 2; i < timeOptions.length; i++) { // +2 skips 1 hour ahead (2 * 30 minutes)
            const option = document.createElement('option');
            option.value = timeOptions[i];
            option.textContent = timeOptions[i];
            fromSelect.appendChild(option);
        }
    }
</script>