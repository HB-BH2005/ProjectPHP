<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=1.0">
    <link rel="stylesheet" href="../css/skins/color-1.css?v=1.0">
    <link rel="stylesheet" href="../css/style_admin.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <!--===Main container start===-->
    <div class="main-container">
        <!-- Include Navbar -->
        <?php include("navbar.php"); ?>

        <!--===Main content start===-->
        <div class="main-content">
            <!-- Include Topbar -->
            <?php include("header.php"); ?>


            <section class="levels section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Subjects</h2>
                        </div>
                    </div>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>level</th>
                                    <th>Description</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($subjects) && is_array($subjects) && count($subjects) > 0)

                                    foreach ($subjects as $subject): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($subject->title); ?></td>
                                        <td><?php echo htmlspecialchars($subject->level); ?></td>
                                        <td><?php echo htmlspecialchars($subject->description); ?></td>
                                        <td>
                                            <a href="edit_subject.php?id=<?php echo $subject->id; ?>" class="action-icon"><i class="fas fa-edit"></i></a>
                                            <a href="delete_subject.php?id=<?php echo $subject->id; ?>" class="action-icon delete-icon" onclick="return confirm('Are you sure you want to delete this subject?')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="add-level">
                            <a href="add_subject.php" class="btn">Add New Subject</a>
                        </div>
                    </div>

                    <!-- Include Footer -->
                    <?php include("footer.php"); ?>
                </div>
                <!--===Main content END===-->
        </div>
        <!--===Main container END===-->
        <!--===Js Files===-->
        <script src="../js/scripts.js?v=1.0"></script>
</body>

</html>