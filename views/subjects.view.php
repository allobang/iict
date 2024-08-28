<div class="container">
    <div class="page-title">
        <h3><?= $specialization['title'] ?></h3>
    </div>
    <a href="/subjects/WM" class="btn btn-square btn-primary mb-2">Web and Mobile Application</a>
    <a href="/subjects/NS" class="btn btn-square btn-primary mb-2">Network Security</a>
    <!-- <a href="/subjects/create" class="btn btn-primary mb-3">Add Subject</a> -->
    <?php foreach ($arrangedSubjects as $years => $year) : ?>
        <h4 class="mt-4">
            <?php
            if ($years == 1)
                echo "FIRST YEAR";
            else if ($years == 2)
                echo "SECOND YEAR";
            else if ($years == 3)
                echo "THIRD YEAR";
            else if ($years == 4)
                echo "FOURTH YEAR";
            ?>
        </h4>
        <div class="row">
            <?php foreach ($year as $semesters => $semester) : ?>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header"><?php if ($semesters == 1) echo "First Semester";
                                                    else if ($semesters == 2) echo "Second Semester";
                                                    else echo "Mid Year"; ?></div>
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
    <?php endforeach; ?>
</div>