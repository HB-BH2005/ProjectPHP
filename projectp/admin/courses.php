<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
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
        <?php include("navbar.php") ; ?>

        <!--===Main content start===-->
        <div class="main-content">
            <!-- Include Topbar -->
            <?php include("header.php"); ?>

            
            <section class="levels section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Courses</h2>
                        </div>
                    </div>
                    <div class="row">
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>level</th>
                                <th>Subject</th>
                                <th>content</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if(count($courses)>0)
                                foreach ($courses as $course): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($course->title); ?></td>
                                    <td><?php echo htmlspecialchars($course->level); ?></td>
                                    <td><?php echo htmlspecialchars($course->subject); ?></td>
                                    <td>
                                        <?php 
                                            $content = htmlspecialchars($course->content);
                                            $fileExtension = pathinfo($content, PATHINFO_EXTENSION); // Get the file extension

                                            if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                                                <img src="<?php echo $content; ?>" alt="content" width="50">
                                        <?php elseif (in_array($fileExtension, ['mp4', 'webm', 'ogg'])): ?>
                                                <video width="100" controls>
                                                    <source src="<?php echo $content; ?>" type="video/<?php echo $fileExtension; ?>">
                                                    Your browser does not support the video tag.
                                                </video>
                                        <?php elseif (in_array($fileExtension, ['mp3', 'wav', 'ogg'])): ?>
                                                <audio controls>
                                                    <source src="<?php echo $content; ?>" type="audio/<?php echo $fileExtension; ?>">
                                                    Your browser does not support the audio tag.
                                                </audio>
                                        <?php elseif ($fileExtension === 'pdf'): ?>
                                                <a href="<?php echo $content; ?>" target="_blank">View PDF</a>
                                        <?php else: ?>
                                                <span>Unsupported file type</span>
                                        <?php endif; ?>
                                    </td>
                                    
                                    <td>
                                        <a href="edit_course.php?id=<?php echo $course->id; ?>" class="action-icon"><i class="fas fa-edit"></i></a>
                                        <a href="delete_course.php?id=<?php echo $course->id; ?>" class="action-icon delete-icon" onclick="return confirm('Are you sure you want to delete this course?')"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="add-course">
                        <a href="add_course.php" class="btn">Add New course</a>
                    </div>
                </div>
            <!-- Include Footer -->
            <?php include("footer.php") ; ?>
        </div>
        <!--===Main content END===-->
    </div>
    <!--===Main container END===-->
    <!--===Js Files===-->
    <script src="../js/scripts.js?v=1.0"></script>
</body>
</html>