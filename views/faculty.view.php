<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Users
                <a href="roles.html" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-user-shield"></i> Roles</a>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($facultyList as $faculty => $item) :
                            $name = "{$item['last_name']}, {$item['first_name']} " . substr($item['middle_name'], 0, 1) . ".";

                        ?>
                            <tr>
                                <td><?= $name; ?></td>
                                <td><?= $item['email']; ?></td>
                                <td><?= $item['position_rank']; ?></td>
                                <td><?= $item['employment_status']; ?></td>
                                <td class="text-end">
                                    <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                    <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>