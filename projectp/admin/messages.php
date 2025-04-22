<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/skins/color-1.css">
    <link rel="stylesheet" href="../css/style_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <!--===Main container start===-->
    <div class="main-container">
        <?php include 'navbar.php'; ?>

        <!--===Main content start===-->
        <div class="main-content">
            <!-- Include Topbar -->
            <?php include 'header.php'; ?>

            <!--=====Contact Section Start=====-->
            <section class="contact section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Messages</h2>
                        </div>
                    </div>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>subject</th>
                                    <th>Messages</th>
                                    <th>Action</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(count($messages)>0)
                                    foreach ($messages as $message): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($message->name); ?></td>
                                        <td><?php echo htmlspecialchars($message->email); ?></td>
                                        <td><?php echo htmlspecialchars($message->subject); ?></td>
                                        <td><?php echo htmlspecialchars($message->news); ?></td>
                                        <td>
                                            <a href="edit_message.php?id=<?php echo $message->id; ?>" class="action-icon"><i class="fas fa-edit"></i></a>//change to send a message
                                            <a href="delete_message.php?id=<?php echo $message->id; ?>" class="action-icon delete-icon" onclick="return confirm('Are you sure you want to delete this message?')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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