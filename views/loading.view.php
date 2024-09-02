<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Loading Management
                <!-- <a href="roles.html" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-user-shield"></i> Roles</a> -->
            </h3>
        </div>
        <form action="/loading" method="POST" accept-charset="utf-8">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="faculty" class="form-label text-uppercase"><small>Faculty</small></label>
                            <select name="faculty" id="faculty" class="form-select">
                                <?php foreach ($facultyList as $faculty): ?>
                                    <option value="<?= $faculty["id"]; ?>"><?= $faculty["last_name"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label text-uppercase"><small>Subject</small></label>
                            <select name="subject" id="subject" class="form-select">
                                <?php foreach ($subjects as $subject): ?>
                                    <option value="<?= $subject["id"]; ?>">
                                        <?= $subject["course_code"] . " - " . $subject["title"]; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="class" class="form-label text-uppercase"><small>Class</small></label>
                            <select name="class" id="class-select" class="form-select">
                                <?php foreach ($class as $section): ?>
                                    <option value="<?= $section["id"]; ?>"><?= $section["class"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="school-year" class="form-label text-uppercase"><small>School
                                    Year</small></label>
                            <select name="school_year" id="school-year" class="form-select">
                                <option value="2024-2025">2024-2025</option>
                                <option value="2025-2026">2025-2026</option>
                                <option value="2026-2027">2026-2027</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="semester" class="form-label text-uppercase"><small>Semester</small></label>
                            <select name="semester" id="semester" class="form-select">
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">Mid Year</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button name="submit" type="submit" class="btn btn-success"><i class="fas fa-check"></i>
                        Save</button>
                    <a href="roles.html" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a>
                </div>
            </div>
        </form>


        <div class="row">
            <?php foreach ($loading as $item) : ?>
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header"><?= $item["last_name"]; ?></div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Title</th>
                                        <th>Units</th>
                                        <th>Lec</th>
                                        <th>Lab</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($semester as $subjects => $subject) : ?>
                                        <tr>
                                            <td><?= htmlspecialchars($subject['course_code']) ?></td>
                                            <td><?= htmlspecialchars($subject['title']) ?></td>
                                            <td><?= htmlspecialchars($subject['units']) ?></td>
                                            <td><?= htmlspecialchars($subject['lecture_hours']) ?></td>
                                            <td><?= htmlspecialchars($subject['lab_hours']) ?></td>
                                            <td class="text-end">
                                                <div class="btn-group" role="group" aria-label="Action Buttons">
                                                    <a href="/view?name=<?= urlencode($name) ?>&idno=<?= urlencode($faculty["id_number"]) ?>" class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="/update?id=<?= urlencode($faculty["id"]) ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="/delete?id=<?= urlencode($faculty["id"]) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="content">
                    <div class="head">
                        <h5 class="mb-0" id="classLabel">List of Subject Load</h5>
                        <p class="text-muted">All</p>
                    </div>
                    <div class="canvas-wrapper">
                    <?php foreach ($loading as $item): ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Course No.</th>
                                    <th scope="col">Course Description</th>
                                    <th scope="col">Units</th>
                                    <th scope="col">Hours</th>
                                    <th scope="col">Pre requisite</th>
                                    <th scope="col">Section</th>
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
                            </tbody>
                        </table>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
$(document).ready(function() {
    // Load saved form data from local storage
    $('#faculty').val(localStorage.getItem('faculty'));
    $('#subject').val(localStorage.getItem('subject'));
    $('#class-select').val(localStorage.getItem('class'));
    $('#school-year').val(localStorage.getItem('school_year'));
    $('#semester').val(localStorage.getItem('semester'));

    // Save form data to local storage on change
    $('select').on('change', function() {
        localStorage.setItem($(this).attr('name'), $(this).val());
    });
});
</script>